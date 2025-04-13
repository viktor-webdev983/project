<?php 

class Link extends Tag {
    const ACTIVECLASS = 'active';

    public function __construct() {
        $this->setAttr('href', '');

        parent::__construct('a');
    }

    public function open() {
        $this->activateSelf();
        return parent::open();
    }

    private function activateSelf() {
        if($this->getAttr('href') === $_SERVER['REQUEST_URI']) {
            $this->addClass(Self::ACTIVECLASS);
        }
    }
}