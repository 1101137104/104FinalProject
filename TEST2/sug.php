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
                            <button type="button" style="background: none; border: 0;" >
                                <img id="img4" src="img4.png" class="img-responsive img-sit1 img-sit2 ">
                            </button>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="panel with-nav-tabs panel-primary img-sit5">
                            <div class="panel-heading">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1primary" data-toggle="tab">意見回饋</a></li>
                                </ul>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1primary">
                                            <form class="form-horizontal" role="form" action="sugAction.php" method="post">
                                                <div class="col-md-6">
                                                    <img src="Proposal.jpg" class="img-responsive img-rounded" alt="dowload from http://www.face2016.com/the-proposal/">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label col-sm-5" for="TName">工人姓名:</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="TName" name="TName" required="required" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">                                                   
                                                        <label for="Prop" class="control-label col-sm-5">意見回饋:</label>
                                                        <div class="col-sm-7">
                                                            <textarea class="form-control" rows="8" id="Prop" name="Prop" required="required" /></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">        
                                                        <div class="col-sm-offset-8 col-sm-2">
                                                        <input type="submit" class="btn btn-primary btn-md" value="送出">
                                                        </div>
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
    </body>
</html>