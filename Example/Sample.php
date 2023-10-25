<?php
require_once "../Components/Button.php";
require_once "../Components/TextInput.php";
require_once "../Layout/MainPage.php";

$form = new Form();

$form->addInput(new TextInput("firstname", "First Name", $_POST['firstname'] ?? ''));
$form->addInput(new TextInput("lastname", "Last Name", $_POST['lastname'] ?? ''));
$form->addInput(new Button('Submit'));

$page = new MainPage($form);

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD']=="POST") {
    if ($form->validate()) {
        $firstName = $form->getValue("firstname");
        $lastName = $form->getValue("lastname");
        echo $firstName." ".$lastName;
    }
}

echo $page->render();



