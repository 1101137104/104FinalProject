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
                    <div class="col-md-3">
                        <div class="col-md-12">
                            <button type="button" style="background: none; border: 0;" >
                                <img id="img1" src="img1.png" class="img-responsive img-sit1 img-sit2 ">
                            </button>
                        </div>
                        <div class="col-md-12">
                            <button type="button" style="background: none; border: 0;" >
                                <img id="img2" src="img2.png" class="img-responsive img-sit1 img-sit2 ">
                            </button>
                        </div>
                        <div class="col-md-12">
                            <button type="button" style="background: none; border: 0;" >
                                <img id="img3" src="img3.png" class="img-responsive img-sit1 img-sit2 ">
                            </button>
                        </div>
                        <div class="col-md-12">
                            <button type="button" style="background: none; border: 0;" >
                                <img id="img4" src="img4.png" class="img-responsive img-sit1 img-sit2 ">
                            </button>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="panel with-nav-tabs panel-primary img-sit5">
                            <div class="panel-heading">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1primary" data-toggle="tab">緊急案件</a></li>
                                </ul>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1primary">
                                            <form class="form-horizontal" role="form" action="urgentAction.php" method="post">
                                                <div class="form-group ">
                                                    <label class="control-label col-sm-4" for="SType">選擇服務項目/類別</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" id="SType" required="required" />
                                                            <option value="1">修繕</option>
                                                            <option value="2">園藝</option>
                                                            <option value="3">裝潢</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label col-sm-4" for="SArea">選擇服務區域</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" id="SArea" required/>
                                                            <option value="6">楠梓</option>
                                                            <option value="7">大社</option>
                                                            <option value="8">左營</option>
                                                            <option value="9">燕巢</option>
                                                            <option value="10">建工</option>
                                                            <option value="11">旗山</option>
                                                            <option value="12">前鎮</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <p>填寫個人基本資料</p>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" for="CName">姓名:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="CName" required/>
                                                    </div>
                                                </div> 
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" for="CAdd">住址(區域後):</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="CAdd" required/>
                                                    </div>
                                                </div>  
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" for="CTel">連絡電話</label>
                                                    <div class="col-sm-8">
                                                        <input type="tel" class="form-control" id="CTel" required/>
                                                    </div>
                                                </div>  
                                                <div class="form-group">        
                                                    <div class="col-sm-offset-10 col-sm-2">
                                                        <input type="submit" class="btn btn-primary btn-md" value="送出" >
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </body>
</html>