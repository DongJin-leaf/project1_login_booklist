<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'ehdwls6359',
    'project1');

$filtered = array(
    'title'=>mysqli_real_escape_string($conn, $_POST['title'])
);

$to_book = "
    DELETE
        FROM book_to_read
        WHERE title = '{$filtered['title']}'
";
$result = mysqli_query($conn, $to_book);
if($result === false){
    echo '오류';
    error_log(mysqli_error($conn));
} else {
    echo '성공 <a href="index.php">돌아가기</a>';
}
?>