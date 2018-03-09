<?php
/* @var $this DetalleBandaController */
/* @var $model DetalleBanda */

$this->breadcrumbs=array(
	'Detalle Bandas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DetalleBanda', 'url'=>array('index')),
	array('label'=>'Manage DetalleBanda', 'url'=>array('admin')),
);
?>

<h1>Create DetalleBanda</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>