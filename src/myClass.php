<?php

class myClass
{
    private $status='test';

    public function checkStatus()
    {
        return $this->status==myFunc();
    }
}

function myFunc()
{
    return 'FOO';
}