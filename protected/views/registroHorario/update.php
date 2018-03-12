<?php
/* @var $this RegistroHorarioController */
/* @var $model RegistroHorario */

$this->breadcrumbs=array(
	'Registro Horarios'=>array('index'),
	$model->id_r_h=>array('view','id'=>$model->id_r_h),
	'Update',
);

$this->menu=array(
	array('label'=>'List RegistroHorario', 'url'=>array('index')),
	array('label'=>'Create RegistroHorario', 'url'=>array('create')),
	array('label'=>'View RegistroHorario', 'url'=>array('view', 'id'=>$model->id_r_h)),
	array('label'=>'Manage RegistroHorario', 'url'=>array('admin')),
);
?>

<h1>Update RegistroHorario <?php echo $model->id_r_h; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>