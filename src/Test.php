<?php
/*
 +------------------------------------------------------------------------+
 | Plinker-RPC PHP                                                        |
 +------------------------------------------------------------------------+
 | Copyright (c)2017-2018 (https://github.com/plinker-rpc/core)           |
 +------------------------------------------------------------------------+
 | This source file is subject to MIT License                             |
 | that is bundled with this package in the file LICENSE.                 |
 |                                                                        |
 | If you did not receive a copy of the license and are unable to         |
 | obtain it through the world-wide-web, please send an email             |
 | to license@cherone.co.uk so we can send you a copy immediately.        |
 +------------------------------------------------------------------------+
 | Authors: Lawrence Cherone <lawrence@cherone.co.uk>                     |
 +------------------------------------------------------------------------+
 */
 
namespace Plinker\Test;

/**
 * Opis Closure
 * Required if you want to send back closures
 * @see: https://github.com/opis/closure
 */
use Opis\Closure\SerializableClosure;

/**
 * A few basic methods which demostrate how easy it is to define a
 * class to interface to, a range of data types can be sent back from
 * strings, arrays, objects, closures or even self/this.
 */
class Test
{
    /**
     * @param array $config
     */
    public function __construct(array $config = array())
    {
        $this->config = $config;
    }

    /**
     * By calling this you can return the entire class to call locally.
     */
    public function this($params = [])
    {
        return $this;
    }

    /**
     * Returns the config array which is set above
     */
    public function config($params = [])
    {
        return $this->config;
    }
    
    /**
     * Returns an array, see no need to encode it for return, just how it should be.
     */
    public function an_array($params = [])
    {
        return ['Hello World'];
    }

    /**
     * By using Opis Closure, we can serilise a closure and return for local execution.
     */
    public function closure($params = [])
    {
        $closure = function ($string) {
            return $string;
        };

        return new SerializableClosure($closure);
    }
    
    /**
     * By using Opis Closure, execute a closuer which was sent by the client.
     */
    public function run_closure($closure = null)
    {
        $values = ['Hello', 'World'];
        
        return $closure($values);
    }

    /**
     * Return an instance of Datetime.
     */
    public function date($params = [])
    {
        return new \DateTime();
    }

    /**
     * The servers IP address.
     */
    public function my_ip($params = [])
    {
        return $_SERVER['SERVER_ADDR'];
    }

    /**
     * The callers IP address, well unless your being forwarded.
     */
    public function your_ip($params = [])
    {
        return $_SERVER['REMOTE_ADDR'];
    }
}
