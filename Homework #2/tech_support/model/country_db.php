<?php

function country_collection(){
    global $db;
    $query = 'SELECT * FROM countries';

    $statement = $db->prepare($query);
    $statement->execute();
    $countries = $statement->fetchAll();
    $statement->closeCursor();
    return $countries;
}



?>