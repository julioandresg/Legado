<?php
/* @var $this MusicoController */
/* @var $model Musico */

$this->breadcrumbs=array(
	'Musicos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Musico', 'url'=>array('index')),
	array('label'=>'Manage Musico', 'url'=>array('admin')),
);
?>

<h1>Create Musico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>