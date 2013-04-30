<?php

if(isset($login)){
	if ($login == 'success') {
		Yii::app()->user->setFlash('success', '<strong>Başarılı</strong> Giriş başarı ile gerçekleşti.');
	} else if($login == 'error') {
		Yii::app()->user->setFlash('error', '<strong>Hata</strong> Bilgiler yanlış girildi.');
	} else if($login == 'notice') {
		Yii::app()->user->setFlash('notice', '<strong>Uyarı</strong> Çok sayıda geçersiz giriş girişimi.');
	}
}
	
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'verticalForm',
    'htmlOptions'=>array('class'=>'well'),
));

$this->widget('bootstrap.widgets.TbAlert', array(
		'block'=>true,
		'fade'=>true, 
		'closeText'=>'×',
		'alerts'=>array( 
		'notice'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'),
		'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'),
		'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'),
	),
));

echo $form->textFieldRow($model, 'username', array('class'=>'span3'));
echo $form->passwordFieldRow($model, 'password', array('class'=>'span3'));
$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Log in', 'htmlOptions' => array('class' => 'span2 pull-right')));
echo '<div class="clearfix"></div>';
$this->endWidget(); 

?>
