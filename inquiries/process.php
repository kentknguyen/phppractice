<?php

print_r($_POST);

echo '<br>';

print_r($_FILES);

echo '<br>';

echo $_POST['name'];

$n = $_POST['name'];

$e = $_POST['email'];

$p = $_POST['project'];

$d = $_POST['description'];

//mkdir('users/'.$u);

//$t = $_FILES['photo']['tmp_name'];
//
//$i = 'users/'.$u.'/'.$_FILES['photo']['name'];

//move_uploaded_file($t, $i);

$cnt = mysqli_connect('localhost','root','','inquiries');

$qry = "insert into inquiries (name, email, project, description) values ('$n', '$e', '$p', '$d');";

mysqli_query($cnt, $qry);

mysqli_close($cnt);

?>