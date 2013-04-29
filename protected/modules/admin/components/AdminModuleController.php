<?php
class AdminModuleController extends CController {
	public $admin;
	public $baseUrl = '/admin';

	public function beforeAction()
	{
		if(!isset(Yii::app()->session['admin']))
		{
			if(Yii::app()->controller->id == 'site' && Yii::app()->controller->action->id == 'login')
			{
				return true;
			}
			else
			{
				$this->redirect(Yii::app()->createUrl('admin/site/login'));
				Yii::app()->end();
			}
		}else if(Yii::app()->controller->id == 'site' && Yii::app()->controller->action->id == 'login'){
			$this->redirect(Yii::app()->createUrl('admin/site/index'));
			return false;
		}
		return true;
    }
}