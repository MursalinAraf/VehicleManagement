<div class="alignment">
<form action="" method="post">
	<br><br> <br><br>
   <div class="form-group">

            <label for="inputDay">User Name:</label>
  <input type="text" name="username" id="username" placeholder="User Name" required>
             
        </div>
		 <div class="form-group">

            <label for="inputDay">Password:</label>
          <input type="password" name="password" id="password" placeholder="Password" required>
             
        </div>

    <div class="field">
        <label for="remember">
            <input type="checkbox" name="remember" id="remember">Remember me
        </label>
    </div>
    </br>
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    </br>
    <input type="submit" value="Login">
</form>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <strong>Login</strong>
				   <div style="float:right; font-size: 90%; position: relative; top:-1px"><a href="#">Forgot password?</a></div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal"  method="post">
                    <div class="form-group">
                          <label for="inputDay"  class="col-sm-3 control-label">User_Name:</label>
  
                        <div class="col-sm-9">
						       <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" name="username" id="inputDay" placeholder="User Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputDay" class="col-sm-3 control-label">
                            Password:</label>
                        <div class="col-sm-9">
              <input type="password" name="password"class="form-control" id="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label for="remember">
            <input type="checkbox" name="remember" id="remember">Remember me
        </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
						 
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
   
                            <button type="submit" class="btn btn-success btn-sm">
                                Sign in</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Reset</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="panel-footer">
                    Not Registered? <a href="register.php">Register here</a></div>
            </div>
        </div>
    </div>
</div>

 