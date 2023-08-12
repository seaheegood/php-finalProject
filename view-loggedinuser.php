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
    $sql = "SELECT * FROM finaladmins";
    // run the query
    $result = $conn->query($sql);
    echo '<section class="person-row">';
    echo '<table class="table table-striped">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>username</th>
                <tr>';
    foreach($result as $row) {
        echo '
                <tr>
                    <td>' . $row['first_name'] . '</td>
                    <td>' . $row['last_name'] . '</td>
                    <td>' . $row['username'] . '</td>
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