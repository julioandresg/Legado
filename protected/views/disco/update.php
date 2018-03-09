<?php
/* @var $this DiscoController */
/* @var $model Disco */

$this->breadcrumbs=array(
	'Discos'=>array('index'),
	$model->id_disco=>array('view','id'=>$model->id_disco),
	'Update',
);

$this->menu=array(
	array('label'=>'List Disco', 'url'=>array('index')),
	array('label'=>'Create Disco', 'url'=>array('create')),
	array('label'=>'View Disco', 'url'=>array('view', 'id'=>$model->id_disco)),
	array('label'=>'Manage Disco', 'url'=>array('admin')),
);
?>

<h1>Update Disco <?php echo $model->id_disco; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>