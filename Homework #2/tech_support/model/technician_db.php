<?php

function get_technician() {
    global $db;

    $query = 'SELECT * FROM technicians ORDER BY techID';

    $statement = $db->prepare($query);
    $statement->execute();
    $technicians = $statement->fetchAll();
    $statement->closeCursor();
    return $technicians;
}

function add_technician($techID, $firstName, $lastName, $email, $phone, $password){
    global $db;
    $query = 'INSERT INTO technicians 
                    (techID, firstName, lastName, email, phone, password)
              VALUES
                    (:techID, :firstName, :lastName, :email, :phone, :password)';

    $statement = $db->prepare($query);
    $statement->bindValue(':techID', $techID);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':password', $password);
     
    $statement->execute();
    $statement->closeCursor();
}

function delete_technician($techID){
    global $db;
    $query = 'DELETE FROM technicians
              WHERE techID = :techID';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':techID', $techID);
    $statement->execute();
    $statement->closeCursor();
}


?>