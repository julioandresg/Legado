<?php
/* @var $this BandaController */
/* @var $model Banda */

$this->breadcrumbs=array(
	'Bandas'=>array('index'),
	$model->id_banda=>array('view','id'=>$model->id_banda),
	'Update',
);

$this->menu=array(
	array('label'=>'List Banda', 'url'=>array('index')),
	array('label'=>'Create Banda', 'url'=>array('create')),
	array('label'=>'View Banda', 'url'=>array('view', 'id'=>$model->id_banda)),
	array('label'=>'Manage Banda', 'url'=>array('admin')),
);
?>

<h1>Update Banda <?php echo $model->id_banda; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>