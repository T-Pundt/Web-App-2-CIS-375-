<?php

function results_customer_search($lastName){
    global $db;
    $query = 'SELECT * FROM customers WHERE lastName = :lastName';

    $statement = $db->prepare($query);
    $statement->bindParam(':lastName', $lastName);
    $statement->execute();
    $customers = $statement->fetchAll();
    $statement->closeCursor();
    return $customers;
}

function customer_search_ID($customerID){
    global $db;
    $query = 'SELECT * FROM customers WHERE customerID = :customerID';

    $statement = $db->prepare($query);
    $statement->bindParam(':customerID', $customerID);
    $statement->execute();
    $customers = $statement->fetchAll();
    $statement->closeCursor();
    return $customers;
}

function delete_customer($customerID){
    global $db;
    $query = 'DELETE FROM customers
              WHERE customerID = :customerID';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':customerID', $customerID);
    $statement->execute();
    $statement->closeCursor();
}

function add_customer($customerID, $firstName, $lastName, $address, $city, $state, $postalCode, $countryCode, $phone, $email, $password){
    global $db;
    $query = 'INSERT INTO customers
                (customerID, firstName, lastName, address, city, state, postalCode, countryCode, phone, email, password)
               VALUES
               (:customerID, :firstName, :lastName, :address, :city, :state, :postalCode, :countryCode, :phone, :email, :password)';
               
    $statement = $db->prepare($query);
    $statement -> bindValue(':customerID', $customerID);
    $statement -> bindValue(':firstName', $firstName);
    $statement -> bindValue(':lastName', $lastName);
    $statement -> bindValue(':address', $address);
    $statement -> bindValue(':city', $city);
    $statement -> bindValue(':state', $state);
    $statement -> bindValue(':postalCode', $postalCode);
    $statement -> bindValue(':countryCode', $countryCode);
    $statement -> bindValue(':phone', $phone);
    $statement -> bindValue(':email', $email);
    $statement -> bindValue(':password', $password);

    $statement->execute();
    $statement->closeCursor();
}
?>