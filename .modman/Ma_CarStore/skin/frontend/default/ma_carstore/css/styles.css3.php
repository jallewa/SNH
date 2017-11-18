<?php
    header('Content-type: text/css; charset: UTF-8');
    header('Cache-Control: must-revalidate');
    header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');
    $url = $_REQUEST['url'];
?>
.aaa
{
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	position: relative;
    behavior: url(<?php echo $url; ?>css/css3.htc);
}
.header .quick-access{
	-webkit-border-radius: 0 0 5px 5px;
	-moz-border-radius: 0 0 5px 5px;
	border-radius: 0 0 5px 5px;
	position: relative;
    behavior: url(<?php echo $url; ?>css/css3.htc);
}