<?php
namespace Plinker\Test;

use Opis\Closure\SerializableClosure;

class Demo {

    public function __construct(array $config = array())
    {
        $this->config = $config;
    }

    function this($params = array())
    {
        return $this;
    }
    
    function hello($params = array())
    {
        return ['Hello World'];
    }
    
    function helloClosure($params = array())
    {
        $test = function ($what) {
            return $what.' - Thanks buddy...';
        };

        return new SerializableClosure($test);
    }

}