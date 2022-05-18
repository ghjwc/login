<?php

    session_start();

    $host = 'localhost';
    $user = 'root';
    $db = 'hyosung3';
    
    $conn = mysqli_connect($host, $user);
    // DB 서버 접속
    $db_conn = mysqli_select_db($conn, $db);
    // DB 선택


    if($db_conn) {
        echo 'DB 접속 성공!';
    } else {
        echo '실패';
    }
    ?>