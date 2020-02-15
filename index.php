<?php

/* mymangacms_base inside public folder	*/
require __DIR__.'/mymangacms_base/bootstrap/autoload.php';
$app = require_once __DIR__.'/mymangacms_base/bootstrap/app.php';

/* mymangacms_base in the parent folder */
//require __DIR__.'/../mymangacms_base/bootstrap/autoload.php';
//$app = require_once __DIR__.'/../mymangacms_base/bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

// set the public path to this directory
$app->bind('path.public', function() {
    return __DIR__;
});

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
