<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'misoucr2_hw3user', 'uvsQ7@Eo}(&b', 'misoucr2_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
