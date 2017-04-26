<?php

namespace diversen;

/**
 * Get URL part from URL path by index key ,e.g. 0 or 1 or 2 etc.
 */
class urlPart  {

    /**
     * Limit of elements to explode from the URL
     * @var int $limit
     */
    public $limit = 10;
    
    /**
     * Get part by index
     * @param int $index
     * @return string $part
     */
    public function getPart($index) {
        $parts = parse_url($_SERVER['REQUEST_URI']);

        if (!isset($parts['path'])) {
            return null;
        }
        
        $pathAry = explode('/', $parts['path'], $this->limit);
        $pathAry = array_values(array_filter($pathAry));
        
        

        
        if (isset($pathAry[$index])) {
            return $pathAry[$index];
        }
        
        return null;
        
    }
    
    /**
     * Get part by index
     * @param int $index
     * @return string $part
     */
    public static function get ($index) {
        $urlPart = new \diversen\urlPart();
        return $urlPart->getPart($index);
    }
}
