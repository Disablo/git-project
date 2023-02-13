<?php

    //Read STRINGS
    function read_str($start, $end, $cell) {

        $excel = PHPExcel_IOFactory::load('traders.xlsx');
        $value_arr = [];

        for ($i = $start; $i <= $end; $i++) {
            $valueName = $excel->getActiveSheet()->getCell($cell . strval($i))->getValue();
            array_push($value_arr, $valueName);
        }
        
        return $value_arr;

    }


    //Read INTEGERS. Can red percents if you set is_in to false
    function read_int($start, $end, $cell, $is_int) {

        $excel = PHPExcel_IOFactory::load('traders.xlsx');
        $value_arr = [];

        for ($i = $start; $i <= $end; $i++) {
            $valueName = $excel->getActiveSheet()->getCell($cell . strval($i))->getValue();
            
            if ($is_int == TRUE) {
                array_push($value_arr, $valueName);
            } else {
                array_push($value_arr, round($valueName * 100, 2));
            }

        }
        
        return $value_arr;

    }


    //Read any TIME
    function read_time($start, $end, $cell) {

        $excel = PHPExcel_IOFactory::load('traders.xlsx');
        $value_arr = [];

        for ($i = $start; $i <= $end; $i++) {
            $valueName = $excel->getActiveSheet()->getCell($cell . strval($i));
            $time = PHPExcel_Style_NumberFormat::toFormattedString($valueName->getCalculatedValue(), 'hh:mm:ss');
            array_push($value_arr, $time);
        }
        
        return $value_arr;

    }


    //Finding TOP-RATED TRADER
    // function find_max($arr) {

    //     $max = $arr;
    //     $key = array_search($max, $arr);

    //     $excel = PHPExcel_IOFactory::load('traders.xlsx');
    //     $valueName = $excel->getActiveSheet()->getCell('B' . strval($key))->getValue();

    //     return $valueName;

    // }

?>