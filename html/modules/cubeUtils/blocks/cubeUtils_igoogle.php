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

function b_cubeUtils_igoogle_edit($options) {
    $blockHandler =& xoops_gethandler('block');
    $blockObjects = $blockHandler->getAllBlocksByGroup(XOOPS_GROUP_ANONYMOUS);
    $blockOptionStr = '';
    foreach ($blockObjects as $blockObject ) {
        $block_type = $blockObject->getVar("block_type");
        $bid = $blockObject->getVar('bid');
        $name = "[$bid]". $blockObject->getVar("title"). " - " . $blockObject->getVar("name");
        $selected = ($options[0] == $bid) ? 'selected' : '' ;
        $blockOptionStr .= '<option value="'.$bid.'" '.$selected.'>'.$name.'</option>';
    }
    return _MB_CUBE_UTILS_BLOCKNAME.' : <select name="options[0]">'.$blockOptionStr.'</select>';
}

function b_cubeUtils_igoogle_show($options) {
    require_once dirname(__FILE__, 2) .'/include/blockFunc.inc.php';
    $bid = (int)$options[0];
    $result = cubeUtils_GetBlock($bid);
    $result['bid'] = $bid;
    return $result;
}

