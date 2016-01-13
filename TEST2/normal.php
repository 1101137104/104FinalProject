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
                            <button type="button" style="background: none; border: 0;">
                                <img id="img1" src="img1.png" class="img-responsive img-sit1 img-sit2 ">
                            </button>
                        </div>
                        <div class="col-md-12">
                            <button type="button" style="background: none; border: 0;">
                                <img id="img2" src="img2.png" class="img-responsive img-sit1 img-sit2 ">
                            </button>
                        </div>
                        <div class="col-md-12">
                            <button type="button" style="background: none; border: 0;" >
                                <img id="img3" src="img3.png" class="img-responsive img-sit1 img-sit2 ">
                            </button>
                        </div>
                        <div class="col-md-12">
                            <button type="button" style="background: none; border: 0;">
                                <img id="img4" src="img4.png" class="img-responsive img-sit1 img-sit2 ">
                            </button>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="panel with-nav-tabs panel-primary img-sit5">
                            <div class="panel-heading">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1primary" data-toggle="tab">一般案件</a></li>
                                </ul>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1primary">
                                            <form class="form-horizontal" role="form" action="normalAction.php" method="post">
                                                <div class="form-group ">
                                                    <label class="control-label col-sm-4" for="SType">選擇服務項目/類別</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" id="SType" name="SType" required/>
                                                            <option value="水電">水電</option>
                                                            <option value="油漆">油漆</option>
                                                            <option value="園藝">園藝</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label col-sm-4" for="SArea">選擇服務區域</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" id="SArea" name="SArea" required="required" />
                                                            <option value="楠梓">楠梓</option>
                                                            <option value="大社">大社</option>
                                                            <option value="左營">左營</option>
                                                            <option value="燕巢">燕巢</option>
                                                            <option value="建工">建工</option>
                                                            <option value="旗山">旗山</option>
                                                            <option value="前鎮">前鎮</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label col-sm-4" for="SDate">選擇服務日期</label>
                                                    <div class="col-sm-8 set-text">
                                                        <input type="date"  id="SDate" name="SDate" required="required" />
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label col-sm-4" for="STime">選擇服務時段</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" id="STime" name="STime" required="required" />
                                                            <option value="早上(8:00~12:00)">早上(8:00~12:00)</option>
                                                            <option value="下午(13:00~17:00)">下午(13:00~17:00)</option>
                                                            <option value="晚上(18:00~20:00)">晚上(18:00~20:00)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <p>填寫個人基本資料</p>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" for="CName">姓名:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="CName" required="required" />
                                                    </div>
                                                </div> 
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" for="CAdd">住址(區域後):</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="CAdd" required="required" />
                                                    </div>
                                                </div>  
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" for="CTel">連絡電話</label>
                                                    <div class="col-sm-8">
                                                        <input type="tel" class="form-control" id="CTel" required="required" />
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