<?php
if (!function_exists('get_segment')) {
    function get_segment($url, $segment = 1)
    {
        $uri = new \CodeIgniter\HTTP\URI($url);

        return $uri->getSegment($segment);
    }
}
