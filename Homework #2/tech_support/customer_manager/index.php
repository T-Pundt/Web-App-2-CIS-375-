<?php
require('../model/database.php');
require('../model/customer_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'search_customer';
    }
}

if ($action == 'search_customer') {
    // Display the customer search
    include('search_customer.php');
} 

else if ($action == 'customer_search'){
    //Get the lastName search value and get the customers with that last name
    $lastName = filter_input(INPUT_POST, 'lastName');
    $customers = results_customer_search($lastName);

    //Display customers
    include('customer_search_results.php');
}

else if($action == 'view/update_customer') {
    $customerID = filter_input(INPUT_POST, 'customerID');
    $customers = customer_search_ID($customerID);
    include('view_update_customer.php');
}


else if($action == 'update_customer') {
    $firstName = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST, 'lastName');
    $address = filter_input(INPUT_POST, 'address');
    $city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');
    $postalCode = filter_input(INPUT_POST, 'postalCode');
    $countryCode = filter_input(INPUT_POST, 'countryCode');
    $phone = filter_input(INPUT_POST, 'phone');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    $customerID = filter_input(INPUT_POST, 'customerID');

    delete_customer($customerID);
    add_customer($customerID, $firstName, $lastName, $address, $city, $state, $postalCode, $countryCode, $phone, $email, $password);

    header("Location: .");
}
?>