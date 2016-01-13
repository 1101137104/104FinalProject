<?php
$SType=$_POST['SType'];
$SArea=$_POST['SArea'];
$SDate=$_POST['SDate'];
$STime=$_POST['STime'];

$db_host='127.0.0.1';
$db_name='bg2015';
$db_user='root';
$db_password='';
$dsn="mysql:host=$db_host;dbname=$db_name;charset=utf8";

$str = "很抱歉，此時間點、此區域沒有工人可以為你服務";
try {
    $db = new PDO($dsn, $db_user, $db_password);
    $stmt = $db->prepare("SELECT Worker_Name,Worker_Phone 
    						FROM worker 
    						JOIN workarea ON worker.Worker_ID=workarea.Worker_ID
    						JOIN area ON WorkArea.Area_ID=area.Area_ID 
    						JOIN service ON worker.Service_ID=service.Service_ID 
    						JOIN workday ON worker.Worker_ID=workday.Worker_ID 
    						JOIN scheduling ON workday.scheduling_ID=scheduling.scheduling_ID 
    						WHERE (service.Service_Category=?) 
    						AND (workarea.Do='1')
    						AND (area.Area_Name=?) 
    						AND (workday.Free='1')
    						AND (scheduling.Scheduling_Date=?) 
    						AND (scheduling.Scheduling_Time=?)");
    $count = $stmt ->execute(array($SType,$SArea,$SDate,$STime));

    $msg='';
    $msg2='';
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $msg = $row['Worker_Name'];
        $msg2 = $row['Worker_Phone'];
            
    }
} catch (PDOException $e) {
    echo $e->getFile(), $e->getLine(), $e->getMessage();
}



?>

<html>
    <html>
    <head>
        <title>生活百工網</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon"  href="slogo.jpg">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body class="img-responsive" style="background-image:url('backgrounp1.jpg');">
        <div>
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-5">
                        <img src="LOGO3.gif" class="img-responsive img-sit4 img-sit2 img-rounded" >
                    </div> 
                </div>
                <div class="row">
                    <div class="col-sm-offset-4 col-md-4">
                        <div class="thumbnail">
                            <div class="col-sm-offset-1 col-md-10">
                                <img src="aboutus.jpg" alt="ALT NAME" class="img-responsive" />
                            </div>
                            <div class="caption set-text3">
                                <table>
                                    <tr><td class="col-md-4">委託日期：</td><td><?php echo $SDate; ?></td></tr>
                                    <tr><td class="col-md-4">委託時段：</td><td><?php echo $STime; ?></td></tr>
                                    <tr><td class="col-md-4">工人姓名：</td><td><?php if($msg==''){
                                                                        echo $str;
                                                                    }else{echo $msg;}
                                                                ?></td></tr>
                                    <tr><td class="col-md-4">工人電話：</td><td><?php if($msg2==''){
                                                                        echo " ";
                                                                    }else{echo $msg2;}
                                                                ?></td></tr>
                                </table>
                                <p align="center">
                                    <a href="index.php" class="btn btn-primary btn-block">確定</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
