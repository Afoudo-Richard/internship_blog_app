<?php 

    function base_url($path="")
    {
        global $config;
        $url = $config['url'].$path;
        echo $url;
    }

    function site_url($path="")
    {
        global $config;
        $url = $config['url'].$path;
        return $url;
    }
