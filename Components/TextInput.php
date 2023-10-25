<?php 
require "Input.php";
class TextInput extends Input {
    protected string $type = 'text';

    public function __construct(protected string $name, protected string $label, protected string $value) {
        parent::__construct($this->name, $this->type, $this->label, $this->value);
    }

    public function _renderSetting()
    {

    }

    public function validate()
    {
        
    }
}