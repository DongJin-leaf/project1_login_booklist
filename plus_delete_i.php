<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'ehdwls6359',
    'project1');

$filtered = array(
    'id'=>mysqli_real_escape_string($conn, $_POST['id'])
);
echo $filtered['id'];
$i_book = "
    DELETE
        FROM book_i_read
        WHERE id = {$filtered['id']}
";
$result = mysqli_query($conn, $i_book);
if($result === false){
    echo '오류';
    error_log(mysqli_error($conn));
} else {
    echo '성공 <a href="index.php">돌아가기</a>';
}
?>