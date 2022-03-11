<?php
$conn = mysqli_connect(
    "localhost",
    "root",
    "ehdwls6359",
    "project1");

$update_link = '';
$filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
$i_read = "SELECT * FROM book_i_read WHERE id={$filtered_id}";
$result = mysqli_query($conn, $i_read);
$row = mysqli_fetch_array($result);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1><a href="index.php">독서목록</a></h1>
        <h2>독후감</h2>
        <form action="plus_update.php" method="POST">
            <input type="hidden" name="id" value="<?$_GET['id']?>">
            <p><input type="text" name="title" placeholder="title"
            value="<?=$row['title']?>"></p>
            <p><textarea name="summary" placeholder="summary"><?=$row['summary']?></textarea></p>
            <p><input type="submit"></p>
        </form>
    </body>
</html>
