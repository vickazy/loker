<?php
namespace App\Loker\Targets;

use App\Loker\LokerInterface;

class LokerSemarang implements LokerInterface{

    private $base = 'lokersemarang.com';

    public function getProperties()
    {
        return 'Loker semarang Property';
    }

    public function getBase()
    {
        return $this->base;
    }
}