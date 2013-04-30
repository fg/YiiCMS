<?php
/**
* Sys Admin Controller
*/
class SysadminController extends AdminModuleController
{
	
	public function actionChangepassword()
	{
		$model = SysAdmin::model()->findByPk($this->admin->id_sys_admin);
		
		$this->render('changepassword',compact('model'));

	}
}