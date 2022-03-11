<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'ehdwls6359',
    'project1');
$i_read = "SELECT * FROM book_i_read WHERE id=".$_GET['id'];
$result = mysqli_query($conn, $i_read);
$row = mysqli_fetch_array($result);
$title = '<h3>'.$row['title'].'</h3>';
$summary = $row['summary'];

$update_link = '<a href="update.php?id='.$_GET['id'].'">update</a>';
$delete_link = '
    <form action="plus_delete_i.php" method="post">
        <input type="hidden" name="id" value="'.$_GET['id'].'">
        <input type="submit" value="delete">
    </form>
';
?>
<!doctype hmtl>
<html>
    <head>
        <meta charset="utf-8">
        <title>독서기록</title>
    </head>
    <body>
        <h1><a href="index.php">독서목록</a></h1>
        <h2>독후감</h2>
        <p><?=$title?></p>
        <p><?=$summary?></p>
        <p><?=$update_link?><?=$delete_link?></p>
    </body>
</html>