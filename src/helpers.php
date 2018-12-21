<?php

if (!function_exists('drip')) {
    /**
     * @return Glorand\Drip\Laravel\DripContract
     */
    function drip()
    {
        return app('drip');
    }
}
