<?php
    Yii::app()->user->setFlash('success', '<strong>Well done!</strong> You successfully read this important alert message.');
	$this->widget('bootstrap.widgets.TbAlert', array(
	'block'=>true, // display a larger alert block?
	'fade'=>true, // use transitions?
	'closeText'=>'×', // close link text - if set to false, no close link is displayed
	'alerts'=>array( // configurations per alert type
	'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
	),
	));
?>
<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'verticalForm',
    'htmlOptions'=>array('class'=>'well'),
)); ?>
 
<?php echo $form->textFieldRow($model, 'name', array('class'=>'span3')); ?>
<?php echo $form->passwordFieldRow($model, 'password', array('class'=>'span3')); ?>
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Log in', 'htmlOptions' => array('class' => 'span2 pull-right'))); ?>
<div class="clearfix"></div>
<?php $this->endWidget(); ?>
