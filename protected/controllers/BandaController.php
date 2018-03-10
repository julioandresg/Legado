<?php

class BandaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
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
			array('allow', 'actions'=>array('index'),'users'=>array('*'),),
			array('allow', 'actions'=>array('view'),'users'=>array('*'),),
			array('allow', 'actions'=>array('create'),'users'=>array('@'),),
			array('allow', 'actions'=>array('update'),'users'=>array('@'),),
			array('allow', 'actions'=>array('admin'),'users'=>array('*'),),
			array('allow', 'actions'=>array('delete'),'users'=>array('legado'),),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Banda;
	if (isset($_POST['Banda'])) {

            $model->attributes = $_POST['Banda'];

            $uploadedFile = CUploadedFile::getInstance($model, 'logo');
            $fileName = "$model->nombre";  
            $model->logo = $fileName;

            if ($model->save()) {
                   
                $uploadedFile->saveAs(Yii::app()->basePath . '/../imagenes/banda/'.$fileName.'.jpg');
                $this->redirect(array('view', 'id' => $model->id_banda));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
	if (isset($_POST['Banda'])) {
            $model->attributes = $_POST['Banda'];
            $model->logo = CUploadedFile::getInstance($model, 'logo');
            if ((is_object($model->logo) && get_class($model->logo) === 'CUploadedFile')) {
                $model->logo->saveAs(Yii::app()->basePath . '/../imagenes/banda/'. $model->nombre.'.jpg');
                $model->logo = $model->nombre.'.jpg';
            }

            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id_banda));
        }

        $this->render('update', array(
            'model' => $model,
        ));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Banda');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Banda('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Banda']))
			$model->attributes=$_GET['Banda'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Banda the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Banda::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Banda $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='banda-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
