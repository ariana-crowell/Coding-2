<?php
        include_once 'dbh.inc.php';

        $first = $POST['first'];
        $last = $POST['last'];
        $emial = $POST['email'];
        $uid = $POST['uid'];
        $pwd = $POST['pwd'];

        $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$emial', '$uid', '$pwd');";
        mysqli_query($conn, $sql);

        header("Location: ../index.php?signup=success");