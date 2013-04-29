<?php

class SiteController extends AdminModuleController
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionLogin(){
		$this->layout = 'login';
		$model = new SysAdmin;
		
		if(isset($_POST['SysAdmin']) && !empty($_POST['SysAdmin'])){
			Yii::app()->user->setFlash('success', "Login Success");
		}

		$this->render('login_form',compact('model'));
	}

	public function actionLogout()
	{
		if(isset(Yii::app()->session['admin']))
			unset(Yii::app()->session['admin']);
		$this->redirect(Yii::app()->createUrl('admin/site/login'));
	}
}
