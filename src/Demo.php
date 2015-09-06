<?php
namespace plinker\Test;

class Demo {

    public function __construct(array $config = array())
    {
        $this->config = $config;
    }

    function test($params = array())
    {
        return $params[0];
    }

}