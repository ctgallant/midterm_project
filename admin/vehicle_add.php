<?php include '../view/header.php'; ?>
<main>
    <h1>Add Vehicle</h1>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="add_vehicle">

        <label>Vehicle:</label>
        <select name="vehicle_id">
        <?php foreach ( $vehicles as $vehicle ) : ?>
            <option value="<?php echo $vehicle['vehicleID']; ?>">
                <?php echo $vehicle['vehicleName']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        <label>Model:</label>
        <input type="text" name="model" />
        <br>

        <label>Year:</label>
        <input type="text" name="year" />
        <br>

        <label>Price:</label>
        <input type="text" name="price" />
        <br>

        <label>Make:</label>
        <input type="text" name="make" />
        <br>

        <label>Type:</label>
        <input type="text" name="type" />
        <br>

        <label>Class:</label>
        <input type="text" name="class" />
        <br>
        
        <label>Vehicle ID:</label>
        <input type="text" name="vehicle_id" />
        <br>
        

        <label>&nbsp;</label>
        <input type="submit" value="Add Product" />
        <br>
    </form>

</main>
<?php include '../view/footer.php'; ?>