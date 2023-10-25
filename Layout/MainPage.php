<?php
require_once "../Components/Form.php";

class MainPage {

    public function __construct(protected Form $form) {}

    public function render(): string
    {
        $page = '<html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Main</title>
                    </head>
                    <body>';
        $page .= '<div class="container">' . $this->form->display() . '</div>';
        $page .= '</body>
                </html>';

        return $page;
    }
}