<?php

class FrontpageController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='column3a';
	private $_model;

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$criteria=new CDbCriteria(array(
			//'condition'=>'status='.Post::STATUS_PUBLISHED,
			'condition'=>'frontpage=1 AND status='.Post::STATUS_PUBLISHED,
			'order'=>'update_time DESC',
			'with'=>'commentCount',
		));
		if(isset($_GET['tag']))
			$criteria->addSearchCondition('tags',$_GET['tag']);

		$dataProvider=new CActiveDataProvider('Post', array(
			'pagination'=>array(
				'pageSize'=>1,
			),
			'criteria'=>$criteria,
		));

			$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
			{
				if(Yii::app()->user->isGuest)
					$condition='status='.Post::STATUS_PUBLISHED.' OR status='.Post::STATUS_ARCHIVED;
				else
					$condition='';
				$this->_model=Post::model()->findByPk($_GET['id'], $condition);
			}
			if($this->_model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		return $this->_model;
	}

}
