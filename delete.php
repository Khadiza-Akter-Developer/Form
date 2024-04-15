<?php
include "config.php";

if(isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "DELETE FROM `user` WHERE `id` = '$user_id'";

    $result = $conn->query($sql);

    if($result == TRUE) {
        echo "Record deleted";
    }
    else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <style> 
           .add-button{
            background-color: lightblue;
            color: black;
            border: none;  
            border-radius: 5px;
            padding: 5px 5px;
         }
        </style>
    </head>
    <body>
        <br>
        <br>
        <a href="view.php" class="add-button">Back to list</a>
    </body>
</html>
