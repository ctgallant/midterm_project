<?php
function get_vehicle($vehicle_id) {
    global $db;
    $query = 'SELECT * FROM vehicles
              WHERE vehicleID = :vehicle_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':vehicle_id', $vehicle_id);
    $statement->execute();
    $vehicle = $statement->fetch();
    $statement->closeCursor();
    return $vehicle;
}


function delete_vehicle($vehicle_id) {
    global $db;
    $query = 'DELETE FROM vehicles
              WHERE vehicleID = :vehicle_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':vehicle_id', $vehicle_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_vehicle($vehicle_id, $model, $make, $price, $year, $type, $class) {
    global $db;
    $query = 'INSERT INTO vehicles
                 (vehicleID, vehicleModel, vehicleMake, vehiclePrice, vehicleYear, vehicleType, vehicleClass)
              VALUES
                 (:vehicle_id, :model, :make, :price, :year, :type, :class)';
    $statement = $db->prepare($query);
    $statement->bindValue(':vehicleID', $vehicle_id);
    $statement->bindValue(':model', $model);
    $statement->bindValue(':make', $make);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':year', $year);
    $statement->bindValue(':type', $type);
    $statement->bindValue(':class', $class);
    $statement->execute();
    $statement->closeCursor();
}
?>