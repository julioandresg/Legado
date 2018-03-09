<?php
/* @var $this DetalleBandaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detalle Bandas',
);

$this->menu=array(
	array('label'=>'Create DetalleBanda', 'url'=>array('create')),
	array('label'=>'Manage DetalleBanda', 'url'=>array('admin')),
);
?>

<h1>Detalle Bandas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
