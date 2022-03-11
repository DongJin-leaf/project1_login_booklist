<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'ehdwls6359',
    'project1');
$member = "
    INSERT INTO member
        (ID, pass, name)
        VALUES(
            '{$_POST['ID']}',
            '{$_POST['pass']}',
            '{$_POST['name']}'
        )
";
$result = mysqli_query($conn, $member);
if($result === false){
    echo '문제 발생';
    error_log(mysqli_error($conn));
} else {
    echo "<script>location.replace('index.php');</script>";
}