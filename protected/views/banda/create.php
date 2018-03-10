<?php
/* @var $this BandaController */
/* @var $model Banda */

/*$this->breadcrumbs=array(
	'Bandas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Banda', 'url'=>array('index')),
	array('label'=>'Manage Banda', 'url'=>array('admin')),
);*/
?>

<h1>Registrar Banda</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>