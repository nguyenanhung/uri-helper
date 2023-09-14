<?php
/**
 * Project uri-helper
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 14/09/2023
 * Time: 10:20
 */

namespace nguyenanhung\Libraries\URI;

class Utils
{
    public static function reformatParseUrl($url = '', $domain = ''): string
    {
        $url = trim($url);
        $domain = trim($domain);
        if (empty($url)) {
            return $url;
        }
        $url = trim($url);
        $parse = parse_url($url);
        if (isset($parse['host'])) {
            return $url;
        }
        $newUrl = $domain . $url;
        return trim($newUrl);
    }
}
