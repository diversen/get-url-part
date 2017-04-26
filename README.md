# get-url-part

Very simple and minimal PHP library to get a part of the URL from 
$_SERVER['REQUEST_URI']. No dependencies. 

Install: 

    composer require diversen/get-url-part

Usage:

    use diversen\urlPart

    $urlPart = new urlPath();
    $urlPArt->getPart(0); // Returns e.g. 'test' from http://localhost:8080/test/etc/

Or as a static method: 

    urlPart::get(0);

Test: 

See [index.php](index.php)
