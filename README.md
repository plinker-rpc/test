**Plinker-RPC**
=========

Plinker PHP RPC client/server makes it really easy to link and execute PHP component classes on remote systems, while maintaining the feel of a local method call.

A Test component which simply returns back what you sent, for testing/example purposes.

Features:
=========

 * Client <=> Server AES Encryption.
 * Signed and authenticated payload packets.
 * Call a components method or return an object or closure for local execution.

For Example (Making a remote call)
---------------------------

    <?php
    require 'vendor/autoload.php';

    /**
     * Initialize plinker client.
     *
     * @param string $url to host
     * @param string $component namespace of class to interface to
     * @param string $public_key to authenticate on host
     * @param string $private_key to authenticate on host
     * @param string $config component construct config
     */
    $plink = new Plinker\Core\Client(
        'http://example.com',
        'Test\Demo',
        'username',
        'password',
        array(
            'time' => time()
        )
    );
    echo '<pre>'.print_r($plink->test(), true).'</pre>';


**then the server part...**

    <?php
    require 'vendor/autoload.php';

    /**
     * POST Server Part
     */
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $server = new Plinker\Core\Server(
            $_POST,
            'username',
            'password'
        );
        exit($server->execute());
    }


##Components##
	{
		"require": {
			"plinker/core": ">=v0.1",
			"plinker/test": ">=v0.1"
		}
	}
