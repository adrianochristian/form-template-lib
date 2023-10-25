<?php 
require_once "Input.php";
class Button extends Input {
    protected string $type = 'submit';

    public function __construct(protected string $name) {
        parent::__construct($this->name, $this->type, null, $this->name);
    }

    public function _renderSetting(): string
    {
        return '<button type="' . $this->_type . 
            '" id="' . $this->_name . 
            '" name="' . $this->_name . 
            '" >' . $this->_value .'</button><br>';
    }

    public function validate(): bool
    {  
        return true;
    }
}