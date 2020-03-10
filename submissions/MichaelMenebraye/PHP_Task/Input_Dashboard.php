<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'ecommerce_sample';

$dsn = 'mysql:host='. $host . ';dbname='. $dbname;
  
$pdo = new PDO($dsn, $user, $password);

$stmt = $pdo->query('SELECT * FROM sample');

if($stmt)
{
    echo '<table width="50%" border="1" cellpadding="5" cellspacing="5"
    <tr>
        <td> id </td>
        <td> brands </td>
        <td> brand Name </td>
        <td> quantity </td>
        <td> price </td>
        <td> Date </td>
    </tr>
    ';
}
while($row = $stmt->fetch(PDO::FETCH_OBJ)){
    echo '  <tr>
                <th> '.$row->id.'</th>
                <th> '.$row->brands.'</th>
                <th> '.$row->brand_name.'</th>
                <th> '.$row->quantity.'</th>
                <th> '.$row->price.'</th>
                <th> '.$row->date.'</th>
    ';
}
?>