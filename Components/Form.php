<?php
class Form {

    public function __construct(protected array $_inputs = []) {}

    /**
     * Adds an input instance to the collection of inputs managed by this form object
     *
     * @param Input $input 
     * @return void
     */
    public function addInput(Input $input): void
    {
        $this->_inputs[] = $input;
    }

    /**
     * Iterates over all inputs managed by this form and returns false if any of them don't validate
     *
     * @return boolean
     */
    public function validate(): bool
    {
        foreach ($this->_inputs as $input) {
            if (!$input->validate()){
                return false;
            }
        }

        return true;
    }

    /**
     * Returns the value of the input by $name
     *
     * @param string $name
     * @return string
     */
    public function getValue(string $name): string
    {
        foreach ($this->_inputs as $input) {
            if ($name === $input->_name){
                return $input->_value;
            }
        }

        return 'Name not found';
    }

    /**
     * Draws the outer form element, and the markup for each input, one input per row
     *
     * @return string
     */
    public function display(): string
    {
        $form = '<form action="' . $_SERVER['PHP_SELF'] . '" method="POST" class="form-container">';
        
        foreach ($this->_inputs as $input) {
            $form .= $input->render();
        }
        
        $form .= '</form>';
        
        return $form;
    }
}
