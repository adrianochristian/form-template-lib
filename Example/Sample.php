<?php
require "../Components/TextInput.php";
require "../Layout/MainPage.php";

$form = new Form();

$form->addInput(new TextInput("firstname", "First Name", "Bruce"));
$form->addInput(new TextInput("lastname", "Last Name", "Wayne"));
$form->addInput(new Button('Submit'));

$page = new MainPage($form);

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD']=="POST") {
    if ($form->validate()) {
        // display user info
        $firstName = $form->getValue("firstname");
        $lastName = $form->getValue("lastname");
        echo $firstName." ".$lastName;
    } else {
       echo $page->render();
    }
} else {
   echo $page->render();
}
