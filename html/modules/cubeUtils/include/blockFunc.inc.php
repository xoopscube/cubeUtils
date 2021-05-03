<?php
/**
 * @package    CubeUtils
 * @version    2.3
 * @author     Gigamaster, 2020 XCL PHP7
 * @author     NobuNobu, 2008-01-31  <nobunobu@nobunobu.com>
 * @copyright  Copyright 2006-2021 NobuNobu - XOOPS Cube Project
 * @license    Legacy https://github.com/xoopscube/xcl/blob/master/GPL_V2.txt
 * @license    Cube : https://github.com/xoopscube/xcl/blob/master/BSD_license.txt
 */

/**
 * @param $bid
 * @param bool $useCache
 * @return bool
 */
function cubeUtils_GetBlock($bid, $useCache=true) {
    $blockHandler =& xoops_gethandler('block');
    $blockObject =& $blockHandler->get($bid);
    if (!$blockObject) return false;
    $blockProcedure =& Legacy_Utils::createBlockProcedure($blockObject);
    if ($blockProcedure->prepare()) {
        $root=&XCube_Root::getSingleton();
        $controller = $root->mController;
        $context =& $root->mContext;

        $usedCacheFlag = false;
        $cacheInfo = null;

        if ($useCache && $controller->isEnableCacheFeature() && $blockProcedure->isEnableCache()) {
            $cacheInfo =& $blockProcedure->createCacheInfo();

            $controller->mSetBlockCachePolicy->call(new XCube_Ref($cacheInfo));
            $filepath = $cacheInfo->getCacheFilePath();

            if ($cacheInfo->isEnableCache() && $controller->existActiveCacheFile($filepath, $blockProcedure->getCacheTime())) {
                $content = $controller->loadCache($filepath);
                if ($blockProcedure->isDisplay() && !empty($content)) {
                    $block['content'] = $content;
                }

                $usedCacheFlag = true;
            }
        }

        if (!$usedCacheFlag) {
            $blockProcedure->execute();

            $renderBuffer = null;
            if ($blockProcedure->isDisplay()) {
                $renderBuffer =& $blockProcedure->getRenderTarget();
                $block['content'] = $renderBuffer->getResult();
            }
            else {
                $renderBuffer = new XCube_RenderTarget();
            }
            if ($useCache) {
                if ($controller->isEnableCacheFeature() && $blockProcedure->isEnableCache() && is_object($cacheInfo) && $cacheInfo->isEnableCache()) {
                    $controller->cacheRenderTarget($cacheInfo->getCacheFilePath(), $renderBuffer);
                }
            }
        }
    }
    return $block;
}

