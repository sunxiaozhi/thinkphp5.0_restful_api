<?php

namespace app\api\controller;

class Index
{
    public function index()
    {
        return 'api';
    }

    public function json()
    {
        return [
            'a' => 1,
            'b' => 1,
            'c' => 1,
        ];
    }
}
