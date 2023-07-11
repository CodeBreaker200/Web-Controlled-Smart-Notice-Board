<?php

require_once 'db_conn.php';

function display_data(){
    global $conn;
    $sql = "SELECT * FROM users";
    // Execute query and store result set
    $result = mysqli_query($conn, $sql);
    // SQL query to retrieve data
    return $result;
}

?>

<?php

require_once 'config.php';

function show_data(){
    global $con;
    $sql = "SELECT * FROM info";
    // Execute query and store result set
    $result = mysqli_query($con, $sql);
    // SQL query to retrieve data
    return $result;
}

?>