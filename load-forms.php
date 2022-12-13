<?php

require('Formbuilder/Formbuilder.php');
require('Formbuilder/Formbuilder_pdo.php');

$form = new Formbuilder_pdo();
$form->connect();
$forms_list = $form->loadForms();
?>