<?php
  $errors = array();
if (empty($_POST)) {
  

$name = $_POST['name'];
$price = $_POST [ 'price'];

    if (empty($_POST['name']))
        $errors['name'] = 'Name mandatory';

    if (empty($_POST['price']))
        $errors['price'] = 'Price mandatory';

    if (empty($errors)) {
        foreach($errors as $key => $error){
            echo $error . '<br>';
        }
        }else{
        //our dsn
    $dsn = 'mysql:host=localhost;dbname=flowers';
    
    $pdo = new PDO($dsn, 'root', '');
// use question mark instead of the variable
    $query = "INSERT INTO flowers (name,price) VAlUES (?,?)";
   
// Using prepared, I dont need to take care of the 'inner' quotes
if(empty($errors)){
    $prep = $pdo->prepare($query);
    $prep->bindValue(1, $name);
    $prep->bindValue(1, $price);
//Compile and execute
    $prep->execute();
    echo '{"success": "Welcome new Member"}';
        }else{
            echo json_encode($errors, JSON_PRETTY_PRINT);

        }
}
