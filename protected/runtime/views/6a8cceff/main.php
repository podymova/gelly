<?php
require_once '/var/www/geely/protected/vendors/phamlp/haml/HamlHelpers.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>
<?php echo 'Geely Motors | Geely Motors'; ?>

</title><meta content="text/html; charset=utf-8" http-equiv="Content-Type" /><meta content="en" name="language" /><link href="favicon.png" rel="shortcut icon" type="image/x-icon" /><link href="<?php echo Yii::app()->request->baseUrl; ?>/css/layout.css" rel="stylesheet" /></head><body>
<div class="header">
<div class="logo">
<a href="" title="Главная">
<img alt="Главная" src="images/fusion_starter_logo.png" /></a></div><div class="navigation">
<a href="/">
<img class="logo_kit" src="images/logo_kitavto.png" /></a></div><div class="menu">
<a class="left" href="page_mk08.html" title="MK 08">
<b>
MK 08
</b></a><a class="left" href="page_mk.html" title="MK">
<b>
MK
</b></a><a class="left" href="page_mkcross.html" title="MK Cross">
MK Cross
</a><a class="left" href="page_emgrand.html" title="Emgrand">
Emgrand
</a><a class="left" href="page_emgrand_hb.html" title="Emgrand хэтчбек">
Emgrand хэтчбек
</a><a class="left" href="page_emgrand_x7.html" title="Emgrand X7">
Emgrand X7
</a><a class="left" href="page_spec.html" title="Акции">
Акции
</a><a class="left" href="page_contacts2.html" title="Контакты">
Контакты
</a><a class="left" href="page_contacts2feedback.html" title="Обратная связь">
Обратная связь
</a></div></div><div class="content" style="overflow: visible">
<div class="auto">
<img src="images/h7--main-page.jpg" /></div><a href="http://www.kit-avto.ru/geely/">
<img alt="sc7" src="images/small-banner2.jpg" /></a></div><div class="footer">
<p class="left">
Copyright 2012 ©
</p></div><!--#header  -->
<!--#logo= CHtml::encode(Yii::app()->name)  -->
<!--header  -->
<!--#mainmenu  -->
<!--:php  -->
<!--$this->widget('zii.widgets.CMenu',array(  -->
<!--'items'=>array(  -->
<!--array('label'=>'Home', 'url'=>array('/site/index')),  -->
<!--array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),  -->
<!--array('label'=>'Contact', 'url'=>array('/site/contact')),  -->
<!--array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),  -->
<!--array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)  -->
<!--),  -->
<!--));  -->
<!--mainmenu  -->
<!--:php  -->
<!--$this->widget('zii.widgets.CBreadcrumbs', array(  -->
<!--'links'=>$this->breadcrumbs,  -->
<!--));  -->
<!--= $content  -->
<!--#footer  -->
<!--Copyright &copy; #{date('Y')} by My Company.  -->
<!--%br  -->
<!--All Rights Reserved.  -->
<!--%br  -->
<!--= Yii::powered()  -->
<!--footer  -->
<!--page  -->
</body></html>