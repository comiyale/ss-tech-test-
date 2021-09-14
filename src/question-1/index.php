<?php

    function reverseArray($arr){
        $total = count($arr) - 1; // remember 0 based index
        $returnArray = array();

        if($total > 0){
            while($total >= 0){
                if($arr[$total] != null){
                    array_push($returnArray, $arr[$total]);
                    $total--; // reduce $total each time
                }
            }
        }

        return $returnArray;
    }

    $returnArr = reverseArray( ['Apple', 'Banana', 'Orange', 'Coconut']);
    print_r($returnArr);

?>
