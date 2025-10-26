<?php
function validateName(&$errors, $field_list, $field_name)
{
    $pattern = "/^[a-zA-Z'-]+$/";
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name])))
        $errors[$field_name] = 'required';
    else if (!preg_match($pattern, $field_list[$field_name]))
        $errors[$field_name] = 'invalid format (only letters allowed)';
}

function validateEmail(&$errors, $field_list, $field_name)
{
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name])))
        $errors[$field_name] = 'required';
    else if (!filter_var($field_list[$field_name], FILTER_VALIDATE_EMAIL))
        $errors[$field_name] = 'invalid email format';
}

function validatePassword(&$errors, $field_list, $field_name)
{
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name])))
        $errors[$field_name] = 'required';
    else if (strlen($field_list[$field_name]) < 6)
        $errors[$field_name] = 'password must be at least 6 characters';
}

function validateState(&$errors, $field_list, $field_name)
{
    if (empty($field_list[$field_name]))
        $errors[$field_name] = 'state must be selected';
}

function validateGender(&$errors, $field_list, $field_name)
{
    if (empty($field_list[$field_name]))
        $errors[$field_name] = 'gender must be selected';
}
?>
