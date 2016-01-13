<?php

$db_host='127.8.2.130';
$db_name='bg2015';
$db_user='adminHHRZRKh';
$db_password='e8TJ1V_bSy8d';
$dsn="mysql:host=$db_host;dbname=$db_name;charset=utf8";


try {
    $db = new PDO($dsn, $db_user, $db_password);
    $stmt = $db->prepare("SELECT * FROM Area");
    $count = $stmt ->execute(array($subject));

    $msg = '';
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $msg.='<tr>';
        $msg.='<td>';
        $msg.=$row['Area_ID'];
        $msg.='</td>';
        $msg.='<td>';
        $msg.=$row['Area_Name'];
        $msg.='</td>';
        $msg.='</tr>';
    }

    header("Location:index.html");
    exit();
} catch (Exception $ex) {
    echo $e->getFile(), $e->getLine(), $e->getMessage();
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>地區清單</title>
    </head>
    <body>
        <table border = 1>
            <tr><td>ID</td><td>地區</td></tr>
            <?php echo $msg; ?>
        </table>
    </body>
</html>