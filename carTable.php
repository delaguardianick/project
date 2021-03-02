<?php 
    $tier = $_GET['q'];

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
    // $sql = "SELECT * FROM `rcars` WHERE `tierCode` = $tier";
    $sql = 'SELECT * FROM `rcars` WHERE 1 AND `tierCode` = "' . $tier . '"';
    // ERROR IS HERE ^^^^^^^^^^^^^^^^^^
    $result = $conn->query($sql) or die($conn->error);

    if ($result->num_rows > 0) {
        echo'
        <table class="table table-striped" id="car-table">
            <caption>Pick one of the available rides:</caption>
        <thead class="thead-dark">
            <tr>
            <th scope="col">Car ID</th>
            <th scope="col">Model</th>
            <th scope="col">Tier</th>
            <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>';

        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo'<tr>
            <th scope="row">
            <div class="radio">
                <label><input type="radio" id="regular" name="optradio">' . $row['id'] . '</label>
            </div></th>
            <td>' . $row['model'] . '</td>
            <td>' . $row['tierCode'] . '</td>
            <td></td>
            </tr>';
        } 
        echo ' </tbody>
                </table>';
    }else {
        echo "0 results";
    }
    mysqli_close($conn);
?>