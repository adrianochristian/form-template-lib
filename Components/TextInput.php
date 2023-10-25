<?php 
require_once "Input.php";
class TextInput extends Input {
    protected string $type = 'text';

    public function __construct(protected string $name, protected string $label, protected string $value = '') {
        parent::__construct($this->name, $this->type, $this->label, $this->value);
    }

    public function _renderSetting(): string
    {
        return '<input type="' . $this->_type . 
            '" id="' . $this->_name . 
            '" name="' . $this->_name . 
            '" value="' . $this->_value . 
            '" ><br>';
    }

    public function validate()
    {
        if (empty(trim($this->_value))) {
            return false;
        }

        return true;
    }
}