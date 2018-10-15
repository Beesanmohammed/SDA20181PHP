<?php
/*
 * @author aashgar
 */
class Singleton {
    //put your code here
    private static $s;
    private $data;
    public function setData($data) {
        $this->data = $data;
    }
    public function getData() {
        return $this->data;
    }
    private function __construct() {
        ;
    }
    public static function getInstance() {
        if(!isset(self::$s))
            self::$s = new Singleton ();
        return self::$s;
    } 
}
