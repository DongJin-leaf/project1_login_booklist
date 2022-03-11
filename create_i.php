<?php
$conn = mysqli_connect(
    "localhost",
    "root",
    "ehdwls6359",
    "project1");

$i_read = "SELECT * FROM book_i_read";
$to_read = "SELECT * FROM book_to_read";

$result_i = mysqli_query($conn, $i_read);
$result_to = mysqli_query($conn, $to_read);
$list_i = '';
$list_to = '';
while($row=mysqli_fetch_array($result_i)) {
    $list_i = $list_i."<li>
    <a href=\"content.php?id={$row['id']}\">{$row['title']}</a></li>";
}
while($row=mysqli_fetch_array($result_to)) {
    $list_to = $list_to."<li>{$row['title']}</li>";
}
?>
<!doctype hmtl>
<html>
    <head>
        <meta charset="utf-8">
        <title>독서기록</title>
    </head>
    <body>
        <h1><a href="index.php">독서목록</a></h1>
        <h3>읽은 책</h3>
        <ol>
            <?=$list_i?>
        </ol>
        <form action="plus_create_i.php" method="post">
            <p><input type="text" name="title" placeholder="tilte"></p>
            <p><textarea name="summary" placeholder="summary"></textarea></p>
            <p><input type="submit"></p>
        </form>
        <h3>읽을 책</h3>
        <ol>
            <?=$list_to?>
        </ol>
    </body>
</html>