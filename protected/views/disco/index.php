<?php
/* @var $this DiscoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Discos',
);

$this->menu=array(
	array('label'=>'Create Disco', 'url'=>array('create')),
	array('label'=>'Manage Disco', 'url'=>array('admin')),
);
?>

<h1>Discos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
