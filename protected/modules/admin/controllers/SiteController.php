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
		print_r($this->admin);
		if(isset($_POST['SysAdmin']) && !empty($_POST['SysAdmin'])){
			if( isset(Yii::app()->session['timestologin']) && Yii::app()->session['timestologin'] > 5 ) {
				$login = 'notice';
			} else {
				$username = $_POST['SysAdmin']['username'];
				$password = md5($_POST['SysAdmin']['password']);
				$user = SysAdmin::model()->find(array('select' => 'id_sys_admin,name,surname,email,type', 'condition' => 'username=:userName AND password=:password AND is_active=1', 'params' => array(':userName' => $username, ':password' => $password)));
				if (!empty($user->id_sys_admin)) {
					$login = 'success';	
					Yii::app()->session['admin'] = $user;
					$this->redirect(Yii::app()->createUrl('admin/site/index'));
				} else {
					if(isset(Yii::app()->session['timestologin']))
						Yii::app()->session['timestologin'] += 1;
					else
						Yii::app()->session['timestologin'] = 1;
					$login = 'error';
				}
			}
		}

		$this->render('login_form',compact('model','login'));
	}

	public function actionLogout()
	{
		if(isset(Yii::app()->session['admin']))
			unset(Yii::app()->session['admin']);
		$this->redirect(Yii::app()->createUrl('admin/site/login'));
	}
}
