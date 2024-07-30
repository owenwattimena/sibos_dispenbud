<?php

if (! function_exists('set_active')) {
    function set_active($route)
    {
        return request()->routeIs($route) ? 'active' : '';
    }
}
