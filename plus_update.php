<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'ehdwls6359',
    'project1');


$filtered = array(
    'id'=>mysqli_real_escape_string($conn, $_POST['id']),
    'title'=>mysqli_real_escape_string($conn, $_POST['title']),
    'summary'=>mysqli_real_escape_string($conn, $_POST['summary'])
);

echo $filtered['id']; #### 여기가 문제

$i_read = "
        UPDATE book_i_read
            SET
                title = '{$filtered['title']}',
                summary = '{$filtered['summary']}'
            WHERE
                id = {$filtered['id']}
";
$result = mysqli_query($conn, $i_read);
if($result === false){
    echo '오류';
    error_log(mysqli_error($conn));
} else {
    echo '성공 <a href="index.php">돌아가기</a>';
}

?>