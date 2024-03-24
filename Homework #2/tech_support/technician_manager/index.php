<?php
require('../model/database.php');
require('../model/technician_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL){
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL){
        $action = 'list_technicians';
    }
}


if ($action == 'list_technicians'){
    // Get data
    $technicians = get_technician();

    //Display Data
    include('technician_list.php');
}

else if ($action == 'show_add_form') {
    include('technician_add.php');
}

else if ($action == 'add_technician'){
    $ID = filter_input(INPUT_POST, 'ID');
    $firstName = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST, 'lastName');
    $email = filter_input(INPUT_POST, 'email');
    $phoneNumber = filter_input(INPUT_POST, 'phoneNumber');
    $password = filter_input(INPUT_POST, 'password');


    //Validate Inputs
    if($phoneNumber[3] != '-' || $phoneNumber[7] != '-'){
        $error = "Invalid phone number format. Please try again";
        include('../errors/error.php');
     }
     else{
        add_technician($ID, $firstName, $lastName, $email, $phoneNumber, $password);
        header("Location: .");
     }
}

else if ($action == 'delete_technician') {
    $techID = filter_input(INPUT_POST, 'techID');
    delete_technician($techID);
    header("Location: .");
}

?>