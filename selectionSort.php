<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/18
 * Time: 11:05
 * 选择排序
 */


function selectionSort()
{
    $arr = [2,5,10,1,9,6,8,7,4,3,0];
    $len = count($arr);

    for($i = 0; $i< $len; $i++)
    {
        $minIndex = $i;
        for($j = $i +1; $j < $len; $j++ )
        {
            if($arr[$j] < $arr[$minIndex])
            {
                $tmp = $arr[$minIndex];
                $arr[$minIndex] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }
    return $arr;
}

$arr = selectionSort();
print_r($arr);
die();