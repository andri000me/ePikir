<?php
if (!function_exists('text_uc')) {
    function text_uc($text = '')
    {
        return ucwords(strtolower($text));
    }
}
