<?php

function check_empty_fields($required_fields_array) {

    //initialize an array to store any error message from the form
    $form_errors = array();

    //loop through the required fields array
    foreach ($required_fields_array as $name_of_field) {
        if (!isset($_POST[$name_of_field]) || $_POST[$name_of_field] == NULL){
            $form_errors[] = $name_of_field . ' is a required field';
        }
    }

    return $form_errors;
}

function check_min_length($fileds_to_check_length) {

    //initialize an array to store any error message from the form
    $form_errors = array();

    foreach ($fileds_to_check_length as $name_of_field) {
        if (!isset($_POST[$name_of_field]) || $_POST[$name_of_field] == NULL){
            $form_errors[] = $name_of_field . ' is a required field';
        }
    }

    return $form_errors;
}