<?php
require "../Components/Form.php";

class MainPage {

    public function __construct(protected Form $form) {}

    public function render(): string
    {
        return '<div class="container">' . $this->form->display() . '</div>';
    }
}