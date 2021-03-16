<?php
require('../model/database.php');
require('../model/zippyusedautos_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_vehicles';
    }
}

if ($action == 'list_vehicles') {
    $vehicle_id = filter_input(INPUT_GET, 'vehicle_id', 
            FILTER_VALIDATE_INT);
    if ($vehicle_id == NULL || $vehicle_id == FALSE) {
        $vehicle_id = 1;
    }
    $vehicle_name = get_vehicle_name($vehicle_id);

    include('vehicle_list.php');
} else if ($action == 'delete_vehicle') {
    $vehicle_id = filter_input(INPUT_POST, 'vehicle_id', 
            FILTER_VALIDATE_INT);
    $vehicle_id = filter_input(INPUT_POST, 'vehicle_id', 
            FILTER_VALIDATE_INT);
    if ($vehicle_id == NULL || $vehicle_id == FALSE ||
            $vehicle_id == NULL || $vehicle_id == FALSE) {
        $error = "Missing or incorrect vehicle id.";
        include('../errors/error.php');
    } else { 
        delete_vehicle($vehicle_id);
        header("Location: .?vehicle_id=$vehicle_id");
    }
} else if ($action == 'show_add_form') {
    $vehicles = get_vehicles();
    include('vehicle_add.php');    
} else if ($action == 'add_vehicle') {
    $vehicle_id = filter_input(INPUT_POST, 'vehicle_id', 
            FILTER_VALIDATE_INT);
    $model = filter_input(INPUT_POST, 'model');
    $year = filter_input(INPUT_POST, 'year');
    $price = filter_input(INPUT_POST, 'price');
    $make = filter_input(INPUT_POST, 'make');
    $type = filter_input(INPUT_POST, 'type');
    $class = filter_input(INPUT_POST, 'class');

    if ($vehicle_id == NULL || $model == FALSE || $year == NULL || 
            $price == NULL || $make == NULL || $class == NULL || $type == FALSE ) {
        $error = "Invalid vehicle data. Check all fields and try again.";
        include('../errors/error.php');
    } else { 
        add_vehicle($vehicle_id, $model, $year, $price, $make, $class, $type);
        header("Location: .?vehicle_id=$vehicle_id");
    }

    // Validate inputs
    if ($model == NULL) {
        $error = "Invalid vehicle name. Check name and try again.";
        include('view/error.php');
    } else {
        add_vehicle($model, $make);
        header('Location: .?action=list_vehicles');  
    }
} else if ($action == 'delete_vehicle') {
    $vehicle_id = filter_input(INPUT_POST, 'vehicle_id', 
            FILTER_VALIDATE_INT);
    delete_vehicle($vehicle_id);
    header('Location: .?action=list_vehicles');     
}
?>