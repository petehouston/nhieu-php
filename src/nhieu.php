<?php

if( ! function_exists('nhieu'))
{

    /**
     * Get the zero/singular/plural form of a given word
     *
     * @param  string  $word
     * @param  integer $count
     * @return string
     */
    function nhieu($word, $count = 11)
    {
        $unit = [
            'không',
            'một',
            'hai',
            'ba',
            'bốn',
            'năm',
            'sáu',
            'bảy',
            'tám',
            'chín',
            'mười'
        ];

        $count = $count > 0 ? $count : 0;

        if($count < 11) {
            return sprintf("%s %s", $unit[$count], $word);
        }

        return sprintf("nhiều %s", $word);
    }
}