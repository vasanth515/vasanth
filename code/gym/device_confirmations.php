<?php
include('connection.php');

$secret = $_SESSION['secret'];
$user 	= $_SESSION['email'];

require_once 'googleLib/GoogleAuthenticator.php';
$ga 		= new GoogleAuthenticator();
$qrCodeUrl 	= $ga->getQRCodeGoogleUrl($user, $secret,'www.a2zwebhelp.com');


?>

<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Google Two Factor Authentication Login with PHP</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/layout.css">
        <link rel="stylesheet" href="assets/css/form-design.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">  
		
		
</head>
    <body class="a2z-wrapper">

        <!--Start a2z-area-->
        <section class="a2z-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="form-area register-from">
                            <div class="form-content">
                                <h2>Google Two Factor Authentication</h2>
                                <p>Enter the verification code generated by Google Authenticator app on your phone.</p>

                            </div>
                            <div class="form-input">
                                <h2>Enter Code</h2>
                                <form name="reg" action="auth.php" method="POST">

                                    <div class="form-group">
										<img src='<?php echo $qrCodeUrl; ?>'/>
                                    </div>

                                    <div class="form-group">
										<input type="text" name="code" id="code" autocomplete="off" value="" required>
                                        <label>Enter Google Authenticator Code</label>
                                    </div>
                                    
                                    <div class="a2z-button">
                                        <button type="submit" class="a2z-btn">Submit</button>
                                    </div>
									
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>