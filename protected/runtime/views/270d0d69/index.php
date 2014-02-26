<?php
require_once '/var/www/geely/protected/vendors/phamlp/haml/HamlHelpers.php';
?><?php $this->pageTitle=Yii::app()->name; ?>
<h1>
Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i>
</h1><p>
Congratulations! You have successfully created your Yii application.
</p><p>
You may change the content of this page by modifying the following two files:
</p><ul>
<li>
View file: <tt><?php echo __FILE__; ?></tt>
</li><li>
Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt>
</li></ul><?php	$markdown___=new CMarkdownParser();echo  $markdown___->safeTransform("For more details on how to further develop this application, please read
the [documentation](http://www.yiiframework.com/doc/).
Feel free to ask in the [forum](http://www.yiiframework.com/forum/),
should you have any questions.
");?>