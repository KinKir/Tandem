<?php 
$is_final = true;
include_once(dirname(__FILE__).'/classes/register_action_user.php');
require_once dirname(__FILE__).'/classes/lang.php';
require_once dirname(__FILE__).'/classes/utils.php';
require_once dirname(__FILE__).'/classes/gestorBD.php';


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Tandem</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link media="screen" rel="stylesheet" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/tandem.css" media="all" />

<script type="text/javascript">
	startTandemConnectedTandem = function(){
		parent.$.fn.colorbox.close();
	}
</script>
<!-- End Save for Web Styles -->
</head>
<body id="home_" style="background-color:#FFFFFF;">
<div>
	<img id="home" src="images/final1.png" width="310" height="85" alt="" />
</div>
<div class="text">
	<p><?php echo $LanguageInstance->get('You are in a videochat with your partner');?></p>
</div>
<p></p>
<div class='btn_review'>
	<a  href="#" onclick="startTandemConnectedTandem();"><?php echo $LanguageInstance->get('Start tandem now!');?></a>
</div>
<br /><br />
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>