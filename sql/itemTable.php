<?php 
    $store = $_GET['q'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // $sql = "SELECT * FROM `rcars` WHERE `storeCode` = $store";
    $sql = 'SELECT * FROM `items` WHERE `store_name` = "' . $store . '"';
    // ERROR IS HERE ^^^^^^^^^^^^^^^^^^
    $result = $conn->query($sql) or die($conn->error);

    if ($result->num_rows > 0) {
        echo'
        <table class="table table-striped" id="car-table">
        <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col">Item ID</th>
                <th scope="col">Item</th>
                <th scope="col">Store</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>';

        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo'<tr>
            <th scope="row">
            <div class="radio">
                <label><input type="radio" id="regular" name="optradio"></label>
            </div></th>
                <td>' . $row['id'] . '</td>
                <td>' . $row['item'] . '</td>
                <td>' . $row['store_name'] . '</td>
                <td>' . $row['price'] . '</td>
            </tr>';
        } 
        echo ' </tbody>
                </table>';
    }else {
        echo "0 results";
    }
    mysqli_close($conn);
?>