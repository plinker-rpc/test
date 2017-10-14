## Table of contents

- [\Plinker\Test\Demo](#class-plinkertestdemo)

<hr />

### Class: \Plinker\Test\Demo

> A few basic methods which demostrate how easy it is to define a class to interface to, a range of data types can be sent back from strings, arrays, objects, closures or even self/this.

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$config=array()</strong>)</strong> : <em>void</em><br /><em>Array ( [foo] => bar [time] => 1505829919.8237 [self] => http://127.0.0.1/example/server.php [component] => Test\Demo [config] => Array ( [foo] => bar ) [action] => config [params] => Array ( ) [data] => ...snip / encrypted payload [public_key] => 01418673ae1efc38699b408567231f8311a3fe561483268be5bade7d0bf24fd8 [request_time] => 1505829919 [encrypt] => 1 [token] => 48d4b40332d09035ea0a623bbc5bb17e9159c36e8078190688bae4e6c888e9a8 )</em> |
| public | <strong>an_array(</strong><em>array</em> <strong>$params=array()</strong>)</strong> : <em>void</em><br /><em>Returns an array, see no need to encode it for return, just how it should be.</em> |
| public | <strong>closure(</strong><em>array</em> <strong>$params=array()</strong>)</strong> : <em>void</em><br /><em>By using Opis Closure, we can serilise a closure and return for local execution.</em> |
| public | <strong>config(</strong><em>array</em> <strong>$params=array()</strong>)</strong> : <em>void</em><br /><em>Returns the config array which is set above</em> |
| public | <strong>my_ip(</strong><em>array</em> <strong>$params=array()</strong>)</strong> : <em>void</em><br /><em>The servers IP address.</em> |
| public | <strong>my_time(</strong><em>array</em> <strong>$params=array()</strong>)</strong> : <em>void</em><br /><em>The servers version of time, an example of a string.</em> |
| public | <strong>this(</strong><em>array</em> <strong>$params=array()</strong>)</strong> : <em>void</em><br /><em>By calling this you can retrun the entire class to call locally.</em> |
| public | <strong>your_ip(</strong><em>array</em> <strong>$params=array()</strong>)</strong> : <em>void</em><br /><em>The callers IP address, well unless your being forwarded.</em> |

