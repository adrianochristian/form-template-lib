<?php 
require_once "Input.php";
class Button extends Input {
    protected string $type = 'submit';

    public function __construct(protected string $name) {
        parent::__construct($this->name, $this->type, null, $this->name);
    }

    public function _renderSetting(): string
    {
        return '<button class="column" type="' . $this->_type . 
            '" id="' . $this->_name . 
            '" name="' . $this->_name . 
            '" ><a>' . $this->_value .'</a></button><br></div>';
    }

    public function validate(): bool
    {  
        return true;
    }
}