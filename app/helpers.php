<?php

if (!function_exists('currentRoute')) {
    function currentRoute(...$routes)
    {
        foreach($routes as $route) {
            if(request()->url() == $route) {
                return ' active';
            }
        }
    }
}


