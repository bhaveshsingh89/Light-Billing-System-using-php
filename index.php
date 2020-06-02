<?php include("header.php"); ?>
  <body style=" background:url('img/Energized_electric_grid_XL_721_420_80_s_c1.jpg'); background-size:cover;">
    <div class="container">    
        <div id="loginbox" style="margin-top:200px; margin-right:800px; width:450px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info"  style="sbackground-size:cover;">
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                    </div>     

                    <div style="padding-top:30px;" class="panel-body" >

                        <div style="display:none;" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form action="clientprocess.php" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
                                        <input id="login-username" type="text" class="form-control" style=" background-color:transparent; color:#000;; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bolder;" name="username" value="" placeholder="Enter your Meter Number"> 
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                        <input id="login-password" type="text" class="form-control" name="password" placeholder="Enter Your Registered Mobile Number" style=" background-color:transparent; color:#000;; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bolder;">
                            </div>
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                        <a class="btn btn-success pull-left" href="adminindex.php"><span class="glyphicon glyphicon-check"></span>Admin Sign In</a>
                                      <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-check"></span>Login</button>
                                    </div>
                                </div>
							</form>
                        </div>
					</div>   
				</div> 
			</div> <!-- /container -->
</body>
</html>