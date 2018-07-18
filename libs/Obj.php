<?php

/**
 * Description of Serialize
 *
 * @author it
 */
class Obj {

    protected $data = [];

    public function __construct() {
        ;
    }

    public function __get($property) {
        return $this->data[$property];
    }

    public function __set($property, $value) {
        $this->data[$property] = $value;
        return TRUE;
    }

}
