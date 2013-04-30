<?php
$form = $this->beginWidget('bootstrap.widgets.TbForm', array(
    'id'=>'verticalForm',
    'htmlOptions'=>array('class'=>'well'),
));
echo $form->passwordFieldRow('', 'password', array('class'=>'span3'));
echo $form->passwordFieldRow($model, 'password', array('class'=>'span3'));
$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Log in', 'htmlOptions' => array('class' => 'span2 pull-right')));
echo '<div class="clearfix"></div>';
$this->endWidget(); 

?>
