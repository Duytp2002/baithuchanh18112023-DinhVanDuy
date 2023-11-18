<?php

$link = mysqli_connect("localhost", "root", "", "baithuchanh18112023");
 
if($link === false){
    die("ERROR: Không thể kết nối. " . mysqli_connect_error());
}
 

$sql = "INSERT INTO myguests (firs_tname, last_name, email) VALUES ('Dinh Van', 'Duy', 'duy@mail.com'),('Dinh Van', 'Trung', 'trung@mail.com'),('Dinh Van', 'Duy', 'duy@mail.com')";
if(mysqli_query($link, $sql)){

    $last_id = mysqli_insert_id($link);
    echo "Chèn bản ghi thành công. ID đã chèn cuối cùng là: " . $last_id;
} else{
    echo "ERROR: Không thể thực thi câu lệnh $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>