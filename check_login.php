<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        $host = 'localhost';
        $user = 'root';
        $pw = 'ehdwls6359';
        $db_name = 'project1';
        
        $mysqli = new mysqli($host, $user, $pw, $db_name);
        $username = $_POST['id'];
        $userpass = $_POST['pw'];
        $q = "SELECT * FROM member WHERE ID='$username' AND pass='$userpass'";
        $result = $mysqli->query($q);
        $row = $result->fetch_array(MYSQLI_ASSOC);

        # 로그인 성공
        if ($row != null){
            $_SESSION['username'] = $row['ID'];
            $_SESSION['name'] = $row['name'];
            echo "<script>location.replace('index.php');</script>";
            exit;
        }
        # 로그인 실패
        if($row == null){
            echo "<script>alert('Invalid username or password')</script>";
            echo "<script>location.replace('login.php');</script>";
            exit;
        }
        ?>
    </body>
</html>