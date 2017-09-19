<?php
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
class Demo
{

    /**
     * @param array $config - This contains decoded payload, and config passed to the connection construct
     * Array
        (
            [foo] => bar
            [time] => 1505829919.8237
            [self] => http://127.0.0.1/example/server.php
            [component] => Test\Demo
            [config] => Array
                (
                    [foo] => bar
                )
        
            [action] => config
            [params] => Array
                (
                )
        
            [data] => ...snip / encrypted payload
            [public_key] => 01418673ae1efc38699b408567231f8311a3fe561483268be5bade7d0bf24fd8
            [request_time] => 1505829919
            [encrypt] => 1
            [token] => 48d4b40332d09035ea0a623bbc5bb17e9159c36e8078190688bae4e6c888e9a8
        )
     */
    public function __construct(array $config = array())
    {
        $this->config = $config;
    }

    /**
     * By calling this you can retrun the entire class to call locally.
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
        $test = function ($what) {
            return $what.' - Thats cool!';
        };

        return new SerializableClosure($test);
    }

    /**
     * The servers version of time, an example of a string.
     */
    public function my_time($params = [])
    {
        return date_create()->format('Y-m-d H:i:s');
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
