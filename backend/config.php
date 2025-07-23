<?php
// var_dump($_SERVER['SCRIPT_NAME']); die;
// var_dump(_DIR_); die;

switch($_SERVER['SCRIPT_NAME']) {
    default:
    $CURRENT_PAGE ='backend.index';
    $PAGE_TITLE = 'DEMOSHOP - Admin';
    break;
}