<?php 
    include('db.php');

    $sql = "select
            name,
            age,
            sex,
            location
            from member
            where sex='남성'";

    // query에 대응하는 데이터는 $result 안에 
    $result = $conn -> query($sql);

    echo "row의 개수";
    echo $result->num_rows;
    echo "<br><br><br>";
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        print($row['name']);
        print($row['age']);
        print($row['sex']);
        print($row['location']);
        echo "<br>";
    }
?>