<?php
/* @var $this MusicoController */
/* @var $model Musico */

$this->breadcrumbs=array(
	'Musicos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Musico', 'url'=>array('index')),
	array('label'=>'Create Musico', 'url'=>array('create')),
	array('label'=>'View Musico', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Musico', 'url'=>array('admin')),
);
?>

<h1>Update Musico <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>