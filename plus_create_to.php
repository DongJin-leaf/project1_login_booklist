<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'ehdwls6359',
    'project1');
$i_read = "
    INSERT INTO book_to_read
        (title, created)
        VALUES(
            '{$_POST['title']}',
            NOW()
        )
";
$result = mysqli_query($conn, $i_read);
if($result === false){
    echo '문제 발생';
    error_log(mysqli_error($conn));
} else {
    echo '성공 <a href="index.php">돌아가기</a>';
}