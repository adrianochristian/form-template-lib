<?php 

class Button extends Input {
    public function __construct(protected string $name) {
        parent::__construct($this->name, 'submit');
    }

    public function _renderSetting()
    {

    }

    public function validate()
    {

    }
}