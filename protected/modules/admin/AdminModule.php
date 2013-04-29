<?php 
class AdminModule extends CWebModule
{
	public function init()
	{
	    Yii::app()->getComponent('bootstrap');
	    
	    // import the module-level models and components
	    $this->setImport(array(
	        'admin.components.*',
	    ));

	    $this->layout = 'main';

	}

}