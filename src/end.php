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
<!-- Save for Web Styles (Tandem Pantalla Inici_ParaExportar.psd) -->
<style type="text/css">


#home_ {
	position:absolute;
	left:0px;
	top:0px;
	width:695px;
	height:626px;
}
.text{
	text-align: center;
	margin-top: 10px;
	font-weight: bold;
	font-size: 14px;
}

.btn_review{text-align:center;}
.btn_review a{
	padding:6px;
	background-color:#5CB85C;
	border-radius:4px;
	color:#FFF;
	text-align:center;
	border:1px solid #4CAE4C;
}


</style>

<script type="text/javascript">
	desconn = function(){
		$.ajax({
			type: 'GET',
			url: "desconn.php",
			data: {'room':'<?php echo $_GET["room"];?>','close_session': 1},
			success: function(){
                    <?php 
                    if (isset($_SESSION[USE_WAITING_ROOM]) && $_SESSION[USE_WAITING_ROOM]==1) { 
					 	echo "window.location.href = 'feedback.php' ";
                    ?>				
                    <?php  } else { ?>
                        top.document.location.href="selectUserAndRoom.php";
                    <?php  } ?>
			}
		});
	}
</script>
<!-- End Save for Web Styles -->
</head>
<body id="home_" style="background-color:#FFFFFF;">
<div>
	<img id="home" src="images/final1.png" width="310" height="85" alt="" />
</div>
<div class="text">
	<p><?php echo $LanguageInstance->get('Activityhasbeencompleted');?></p>
	<p><?php echo $LanguageInstance->get('ThankyouforusingTANDEM');?></p>
</div>
<p></p>
<div <?php if (isset($_SESSION[USE_WAITING_ROOM]) && $_SESSION[USE_WAITING_ROOM]==1) { ?>class='btn_review'<?php } ?>>
	<?php if (isset($_SESSION[USE_WAITING_ROOM]) && $_SESSION[USE_WAITING_ROOM]==1) { ?>
	<p><?php echo $LanguageInstance->get('The videochat recording will be stop automatically');?></p>
	<a  href="#" onclick="desconn();"><?php echo $LanguageInstance->get('peer_review_form');?></a>
    <?php  } else { ?>
	<a href="#" onclick="desconn();"><img id="home" src="images/final2.png" width="310" height="205" alt="" /></a>
	<?php  } ?>    
</div>
<br /><br />
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>