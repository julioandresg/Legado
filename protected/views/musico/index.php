<?php
/* @var $this MusicoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Musicos',
);

$this->menu=array(
	array('label'=>'Create Musico', 'url'=>array('create')),
	array('label'=>'Manage Musico', 'url'=>array('admin')),
);
?>

<h1>Musicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
