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

function b_cubeUtils_whatsnew_edit($options) {
    return _MB_CUBE_UTILS_NUMOFCONTENT.' : <input type="text" name="options[0]" value="'. (int)$options[0] .'" />';
}

function b_cubeUtils_whatsnew_show($options) {
    $mGetRSSItems = new XCube_Delegate();
    $mGetRSSItems->register('Legacy_BackendAction.GetRSSItems');
    $items = array();
    $mGetRSSItems->call(new XCube_Ref($items));

    $max_item = intval($options[0]);
    if (empty($max_item)) $max_item = 5;

    $sortArr = array();
    $n = 0;
    foreach ($items as $item) {
        $i = (int)$item['pubdate'];
        for (; isset($sortArr[$i]) ; $i++);
        $sortArr[$i] = $item;
    }
    krsort($sortArr);
    $result['items'] = array_slice($sortArr,0,$max_item);
    return $result;
}

