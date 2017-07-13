<?php
	session_start();
	include '../db.php';
	include 'login_action.php';
?>

<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=11" >
        <title>GoalDiary | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		<link rel="shortcut icon" href="<?php echo $site_root; ?>/favicon.ico" type="image/vnd.microsoft.icon" />
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
			<div style="text-align:center;margin-bottom:10px;">
				<img src="../logo.png" alt="logo" style="max-width:360px;max-height:100px"/> 
			</div>
            <div class="header">Sign In</div>
            <form action="login.php" method="post">
                <div class="body bg-gray">
					<?php if ($error!=''){ ?>
						<b style='color:red'><?php echo $error; ?></b>
					<?php } ?>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off" value="<?php echo $username; ?>"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" value="<?php echo $password; ?>"/>
                    </div>          
                </div>
                <div class="footer">                                                               
                    <button type="submit" name="btn_login" class="btn bg-olive btn-block">Sign me in</button>  
                </div>
            </form>

            <div class="margin text-center" style="font-size:11px;">
                <span>Copyright @ <a href="../../" target="_blank">shinesjohn.com</a></span>
                <br/>
				<span>Developed by <a target="_blank" href="http://shinesjohn.com">Shine S. John</a></span>
			</div>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>