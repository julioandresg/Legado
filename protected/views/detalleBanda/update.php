<?php
/* @var $this DetalleBandaController */
/* @var $model DetalleBanda */

$this->breadcrumbs=array(
	'Detalle Bandas'=>array('index'),
	$model->id_det_banda=>array('view','id'=>$model->id_det_banda),
	'Update',
);

$this->menu=array(
	array('label'=>'List DetalleBanda', 'url'=>array('index')),
	array('label'=>'Create DetalleBanda', 'url'=>array('create')),
	array('label'=>'View DetalleBanda', 'url'=>array('view', 'id'=>$model->id_det_banda)),
	array('label'=>'Manage DetalleBanda', 'url'=>array('admin')),
);
?>

<h1>Update DetalleBanda <?php echo $model->id_det_banda; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>