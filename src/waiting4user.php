<?php
require_once dirname(__FILE__).'/classes/lang.php';
require_once dirname(__FILE__).'/classes/constants.php';
require_once dirname(__FILE__).'/classes/utils.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Tandem Pantalla Inici_ParaExportar</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script>
<?php 
if ($_SESSION[OPEN_TOOL_ID]>0){?>
	top.setExpiredNow(60);
<?php } ?>
</script>
<style type="text/css">
<!--

#home_ {
	position:absolute;
	left:0px;
	top:0px;
	width:695px;
	height:626px;  
}

-->
</style>
</head>
<body id="home" style="background-color:#FFFFFF;">
<img id="home" src="images/Tandem-Speakapps_01.gif" alt="" />
<br /><br />
<p style="text-align:center;"><?php echo $LanguageInstance->get('waitingUserX');?><?php echo isset($_GET["fn"])?" <b>".$_GET["fn"]." ".$_GET["sn"]."</b>":"";?></p>
<p style="text-align:center;"><?php echo $LanguageInstance->get('acceptance');?><br/>
<h4 style="text-align:center;"><span id="startNowBtn"></span></h4></p>
<?php 
if ($_SESSION[OPEN_TOOL_ID]>0){
$url_2_return = str_replace("waiting4user.php","sampleConfirm.php",curPageURL());
$id_register_tandem = isset($_SESSION[CURRENT_TANDEM])?$_SESSION[CURRENT_TANDEM]:false;
$separtor = '?';
if (strpos($url_2_return, '?')!==false){
	$separtor = '&';
}
$url_2_return .= $separtor.'id='.$id_register_tandem;
	?>
<script language="javascript">
window.onbeforeunload = function() {};
document.location.href='ltiConsumer.php?id=<?php echo $_SESSION[OPEN_TOOL_ID]?>&return_url=<?php echo $url_2_return?>';
</script>
<?php }?>
</body>
</html>