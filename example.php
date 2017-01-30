<?php
set_time_limit(0);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">-->
        <meta http-equiv="Content-Type" content="text/html; charset=Windows-1251">
        <title>Sample</title>
    </head>
    <body>
		<?php
		include_once 'class.verifyEmail.php';

		$email = 'abhi.ashish2015@gmail.com';

		$vmail = new verifyEmail();
		// print_r($vmail);die;
		$vmail->setStreamTimeoutWait(50);
		$vmail->Debug= TRUE;
		$vmail->Debugoutput= 'html';

		$vmail->setEmailFrom('abhishek.pandit2017@gmail.com');
		// echo "<pre>";print_r($vmail);die;
		if ($vmail->check($email)){
			echo 'exit';die;
			// echo 'email &lt;' . $email . '&gt; exist!';
		}elseif (verifyEmail::validate($email)){
			echo 'not exit';die;
			// echo 'email &lt;' . $email . '&gt; valid, but not exist!';
		}else {
			echo 'noexit';die;
			// echo 'email &lt;' . $email . '&gt; not valid and not exist!';
		}
		?>
    </body>
</html>
