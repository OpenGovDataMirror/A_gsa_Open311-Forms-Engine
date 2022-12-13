<?php

require('Formbuilder/Formbuilder.php');

// At this stage, we simulate getting an array of the
// form_structure and hash from our database. This is
// how the form data would have been saved using
// the $form->get_encoded_form_array() method.

$get_form_id = $_REQUEST['form_id'];
$schema = $_REQUEST['schema'];

include('fake-form-db-vals.php');

$form = new Formbuilder($fake_db_vals);

if ($schema == 'open311') {
	
	$form->render_open311_service_definition();
	
} else {
	$form->render_json();	
}


// OR, if you're using the database extension class you can load a form
// by passing in the record id:

//require('Formbuilder/Formbuilder_pdo.php');
//$form = new Formbuilder_pdo();
//$form->connect();
//$form->render_json( 1 );

?>