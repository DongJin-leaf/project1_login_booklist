<?php
session_start();
if(!isset($_SESSION['username'])) {
    echo "<script>location.replace('login.php');</script>";
}
else {
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
}
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
    $list_to = $list_to."<input type=\"checkbox\" name=\"title\" value=\"{$row['title']}\">{$row['title']}<br>";
}

?>
<!doctype hmtl>
<html>
    <head>
        <meta charset="utf-8">
        <title>독서기록</title>
    </head>
    <body>
        <div class="base">
            <button type="button" class="btn" onclick="location.href='logout.php'">
                LOGOUT</button>
        </div>
        <h1><a href="index.php">독서목록</a></h1>
        <h3>읽은 책</h3>
        <ol>
            <?=$list_i?>
        </ol>
        <a href="create_i.php">create</a>
        <h3>읽을 책</h3>
        <form action="plus_delete_to.php" method="post">
            <?=$list_to?>
            <a href="create_to.php">create</a>
            <input type="submit" value="delete">
        </form>
    </body>
</html>