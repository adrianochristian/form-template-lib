<?php
abstract class Input {
    abstract public function validate();
    abstract protected function _renderSetting();

    public function __construct(
        protected $_name, 
        protected $_type, 
        protected $_label = null, 
        protected $_value = null,
    ) {}

    /**
     * returns the name of this input
     */
    public function name(): string
    {
        return $this->_name;
    }


    /**
     *  renders a row in the form for this input. 
     *  All inputs have a label on the left, and an area on the right where the actual
     *  html form element is displayed (such as a text box, radio button, select, etc)
     */
    public function render(): string
    {
        return '<label for="' . $this->_name . '">' . $this->_label .
            '</label><br>' .
            '<input type="' . $this->_type . 
            '" id="' . $this->_name . 
            '" name="' . $this->_name . 
            '" value="' . $this->_value . 
            '" >';
    }

    /**
     * returns the current value managed by this input
     */
    public function getValue() {
        return $this->_value;
    }
}
