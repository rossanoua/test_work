<?php
//require_once SCRIPTS . 'c_file_exists.php';

function isHostSet ($robotstxt){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $robotstxt);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    $data = curl_exec($curl);
    curl_close($curl);

    $data = array($data);

    $str = implode(" ", $data);

    $str = strtolower($str);

    $sitemapset = substr_count($str, 'sitemap:') . '</br>';
    $hostset =  substr_count($str, 'host:') . '</br>';

    $hostsetbool = (boolean) $hostset;
    $sitemapsetbool = (boolean) $sitemapset;

    return array($sitemapset, $hostset, $hostsetbool, $sitemapsetbool);
}

