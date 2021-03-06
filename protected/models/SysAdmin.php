<?php

/**
 * This is the model class for table "sys_admin".
 *
 * The followings are the available columns in table 'sys_admin':
 * @property integer $id_sys_admin
 * @property string $name
 * @property string $surname
 * @property string $username
 * @property string $email
 * @property string $password
 * @property integer $type
 * @property integer $is_active
 * @property string $add_date
 */
class SysAdmin extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SysAdmin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sys_admin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, surname, username, email, password', 'required'),
			array('type, is_active', 'numerical', 'integerOnly'=>true),
			array('name, surname, email', 'length', 'max'=>64),
			array('username, password', 'length', 'max'=>32),
			array('add_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_sys_admin, name, surname, username, email, password, type, is_active, add_date', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_sys_admin' => 'Id Sys Admin',
			'name' => 'Name',
			'surname' => 'Surname',
			'username' => 'Username',
			'email' => 'Email',
			'password' => 'Password',
			'type' => 'Type',
			'is_active' => 'Is Active',
			'add_date' => 'Add Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_sys_admin',$this->id_sys_admin);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('add_date',$this->add_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}