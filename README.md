# get-url-part

Very simple and minimal library to get a part of the URL from 
$_SERVER['REUQEST_URI'] with no dependencies. 

Install: 

    composer require diversen/get-url-part

Usage:

    use diversen\urlPart

    $urlPart = new urlPath();
    $urlPArt->getPart(0); // Returns e.g. 'test' from https://localhost/test/etc/

Or as a static method: 

    urlPart::get(0);

Test: 

See [index.php](index.php)
