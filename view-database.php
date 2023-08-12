<?php
	// add lesson code
    require './inc/header.php';
    // check the session before we show any data
    session_start();
    if(!isset($_SESSION['user_id'])) {
        header('location:signin.php');
        exit();
    } else {
        // connect to database
        require './inc/database.php';
        // set up query
        $sql = "SELECT * FROM finaldeal";
        // run the query
        $result = $conn->query($sql);
        echo '<section class="person-row">';
        echo '<table class="table table-striped">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Model</th>
                    <th>Car Year</th>
                    <th>Phone Number</th>
                <tr>';
        foreach($result as $row) {
            echo '
                <tr>
                    <td>' . $row['fname'] . '</td>
                    <td>' . $row['lname'] . '</td>
                    <td>' . $row['model'] . '</td>
                    <td>' . $row['caryear'] . '</td>
                    <td>' . $row['telNumber'] . '</td>
                </tr>
                ';
        }
        echo'</table>';
        echo'<a href="logout.php" class="btn btn-warning">Logout</a>';
        echo '</section>';
        $conn = null;
    }
    require './inc/Footer.php';
?>
