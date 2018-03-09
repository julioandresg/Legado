<?php
/* @var $this CancionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Canciones',
);

$this->menu=array(
	array('label'=>'Create Canciones', 'url'=>array('create')),
	array('label'=>'Manage Canciones', 'url'=>array('admin')),
);
?>

<h1>Canciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
