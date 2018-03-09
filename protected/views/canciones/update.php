<?php
/* @var $this CancionesController */
/* @var $model Canciones */

$this->breadcrumbs=array(
	'Canciones'=>array('index'),
	$model->id_cancion=>array('view','id'=>$model->id_cancion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Canciones', 'url'=>array('index')),
	array('label'=>'Create Canciones', 'url'=>array('create')),
	array('label'=>'View Canciones', 'url'=>array('view', 'id'=>$model->id_cancion)),
	array('label'=>'Manage Canciones', 'url'=>array('admin')),
);
?>

<h1>Update Canciones <?php echo $model->id_cancion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>