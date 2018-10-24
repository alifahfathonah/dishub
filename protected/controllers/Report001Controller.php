<?php

class Report001Controller extends Controller
{
	
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}
	
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','admin','create','rpt0001','rpt0002','rpt0003','rpt0003a','rpt0004','rpt0004a'),
				'users'=>array('@'),
				
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('update','delete'),
				'users'=>array('@'),
				'expression'=>'isset($user->role) && ($user->role==="1") ',
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionRpt0001()
	{
		$this->renderPartial('rpt0001');
	}
	
	public function actionRpt0002()
	{
		$this->renderPartial('rpt0002');
	}
	
	public function actionRpt0003()
	{
		$model=new Trayek('search01');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Trayek']))
			$model->attributes=$_GET['Trayek'];

		$this->render('rpt0003',array(
			'model'=>$model,
		));
	}
	public function actionRpt0003a($id)
	{
		$model= Trayek::model()->findByPk($id);
		$gruptrayek_id = $model->gruptrayek_id;
		$this->renderPartial('rpt0003a',array('gruptrayek_id'=>$gruptrayek_id));
		
	}
	
	
	public function actionRpt0004()
	{
		$model=new Gruptrayek('search01');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Gruptrayek']))
			$model->attributes=$_GET['Gruptrayek'];

		$this->render('rpt0004',array(
			'model'=>$model,
		));
	}
	
	public function actionRpt0004a($id)
	{
		
		$gruptrayek_id = $id;
		$this->renderPartial('rpt0004a',array('gruptrayek_id'=>$gruptrayek_id));
		
	}
	
	public function loadModel($id)
	{
		$model=Trayek::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
}