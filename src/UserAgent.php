<?php

namespace Campo;

class UserAgent
{

    /**
     * Grab a random user-agent from the useragents.txt list.
     *
     * @return string
     */
    public static function random()
    {
        $agents = file(__DIR__ . '/useragents.txt');
        $key = array_rand($agents);

        return $agents[$key];
    }
}
