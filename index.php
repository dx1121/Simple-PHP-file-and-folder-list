<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title>Share Files and Folders with date</title>
 </head>

<style type="text/css">
body,td,th {
	font-size:18px;
	font-family: Verdana, Geneva, sans-serif;
	line-height:24px;
	color:#fff
}

a:link {
	color: #9C9C9C;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #9C9C9C;
}
a:active {
	text-decoration: none;
	color: #9C9C9C;
}

a:hover{
	color: #FFF;
	text-decoration: none;
}
body {
	margin-left: 20px;
	margin-top: 20px;
	margin-right: 20px;
	margin-bottom: 20px;
	background:#121212
}
ul{margin:0;padding:0}
li span{font-size:18px;color: #EB5FA9;}
li {list-style-type:none}
</style>

 <body>

<!-- Need to change $dirname and <a> tag link to your own folder -->
<?php 

date_default_timezone_set('Australia/Brisbane'); 
?>
  
<div style="max-width:960px;width:100%;margin:0 auto">

<h3>Share Files - Right Click to copy URL</h3>

<ul>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$dirname = "../cliff";
$dir = opendir($dirname);

while(false != ($file = readdir($dir)))
{
if(($file != ".") and ($file != "..") and ($file != "index.php"))
{
  $list[] = $file;
}
}
sort($list);
$number = 1;
foreach($list as $item) {
?>

<li><span style="font-size:18px"><?php echo '('.$number.') ';?></span><span><a href="../cliff/<?php echo $item ?>" target="_blank"><?php echo $item ?></a></span><span style="color:#484848;margin-left:15px;font-size:11px;"><?php echo date ("F d Y H:i:s.", filemtime($item)); ?></span></li>



<?php $number++;}
unset($list);
closedir($dir); ?>
</ul>

</div>

 </body>
</html>
