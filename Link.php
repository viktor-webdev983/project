<?php 

class Link extends Tag {
    public function __construct() {
        $this->setAttr('href', '');

        parent::__construct('a');
    }
}