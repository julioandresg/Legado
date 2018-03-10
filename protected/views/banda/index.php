<?php
/* @var $this BandaController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Bandas',
);

$this->menu=array(
	array('label'=>'Create Banda', 'url'=>array('create')),
	array('label'=>'Manage Banda', 'url'=>array('admin')),
);*/
?>

<h1>Bandas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
