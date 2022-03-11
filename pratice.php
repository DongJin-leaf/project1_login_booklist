<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'ehdwls6359',
    'project1');

$filtered = array(
    'title'=>mysqli_real_escape_string($conn, $_POST['title'])
);
echo $filtered['title'];


?>