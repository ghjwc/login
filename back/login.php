<?php 
    include('db.php');

    // $sql = "select
    //         name,
    //         age,
    //         sex,
    //         location
    //         from member
    //         where sex='남성'";

    // // query에 대응하는 데이터는 $result 안에 
    // $result = $conn -> query($sql);

    // echo "row의 개수";
    // echo $result->num_rows;
    // echo "<br><br><br>";
    // while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    //     print($row['name']);
    //     print($row['age']);
    //     print($row['sex']);
    //     print($row['location']);
    //     echo "<br>";
    // }

    print_r($_POST);
    $id = $_POST['id'];
    $pw = $_POST['pw'];

    $sql = "select no, email, password from member
            where email = '$id'";

    // query 실행
    $result = $conn -> query($sql);

    $db_pw = mysqli_fetch_assoc($result);
    // echo "html에서 넘어온 값";
    // echo "<br><br><br>";
    // echo "db에서 넘어온 값";

    // DB에서 넘어온 값이 null
    if($db_pw == null) {
        echo "이메일이 존재하지 않습니다.";
    } else {
        // 비밀번호가 맞는지 확인
        if($pw == $db_pw['password']) {
            $_SESSION['no'] = $db_pw['no'];
            $_SESSION['email'] = $db_pw['email'];
            echo "
            <script>
                location.href='todo.php';
            </script>
            ";
        } else {
            echo "패스워드가 맞지 않습니다.";
        }
    }


    include('../view/login.html')
?>