<?php
/* @var $this BandaController */
/* @var $model Banda */
/*
$this->breadcrumbs=array(
	'Bandas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Banda', 'url'=>array('index')),
	array('label'=>'Create Banda', 'url'=>array('create')),
);
*/
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#banda-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
$j = 0;
$musicos= [];
foreach (Musico::model()->findAll() as $musico) {
    $musicos[$j] = ['id2' => $musico->id, 'datos2' => $musico->nombre ];
    $j++;
}
?>

<h1>Buscador de Bandas</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'banda-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_banda',
		'nombre',
		//'logo',
		array(
                    'name'=>'representante',
                    'value'=>function($model){
                        $tipo=  Musico::model()->find('id='.$model->representante);

                        return $tipo->nombre.' '.$tipo->apellido_paterno.' '.$tipo->apellido_materno;
                    },'filter'=>CHtml::listData($musicos,'id2','datos2')),
		'telefono',
		'correo',
		/*
		'genero',
		'website',
		'fanpage',
		'instagram',
		'youtube',
		'eventos',
		'historia',
		'spotify',
		'itunes',
		'soundcloud',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
