<?php include '../view/header.php'; ?>
<main>
    <h1>Zippy's Used Autos</h1>
    <section>
        <h2>Vehicle Inventory List</h2>
        <table>
            <tr>
                <th>Model</th>
                <th>Year</th>
                <th>Price</th>
                <th>Make</th>
                <th>Type</th>
                <th>Class</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($vehicles as $vehicle) : ?>
            <tr>
                <td><?php echo $vehicle['vehicleModel']; ?></td>
                <td><?php echo $vehicle['vehicleYear']; ?></td>
                <td><?php echo $vehicle['vehiclePrice']; ?></td>
                <td><?php echo $vehicle['vehicleMake']; ?></td>
                <td><?php echo $vehicle['vehicleType']; ?></td>
                <td><?php echo $vehicle['vehicleClass']; ?></td>
                
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_product">
                    <input type="hidden" name="vehicle_id"
                           value="<?php echo $vehicle['vehicleID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_form">Add Vehicle</a></p>   
    </section>
</main>
<?php include '../view/footer.php'; ?>