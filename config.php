<?php
$conn = new mysqli("localhost","root","","glosario");
    
if ($conn->connect_errno) {
    echo "Error: ". $conn->connect_error;
}