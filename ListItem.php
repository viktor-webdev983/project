<?php

class ListItem extends Tag {
    public function __construct() {
        parent::__construct('li');
    }

    public function __toString() {
        return $this->show();
    }
}
