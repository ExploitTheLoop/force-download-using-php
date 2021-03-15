<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "keysystem";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>error 404!</strong> database connection failed.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
} else{
    echo "succes";
}


?>