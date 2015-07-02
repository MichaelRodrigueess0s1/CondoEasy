<?php
/* @var $this ApartamentoController */
/* @var $model Apartamento */

$this->breadcrumbs=array(
	'Apartamentos'=>array('index'),
	$model->idapartamento,
);

$this->menu=array(
	array('label'=>'List Apartamento', 'url'=>array('index')),
	array('label'=>'Create Apartamento', 'url'=>array('create')),
	array('label'=>'Update Apartamento', 'url'=>array('update', 'id'=>$model->idapartamento)),
	array('label'=>'Delete Apartamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idapartamento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Apartamento', 'url'=>array('admin')),
);
?>

<h1>View Apartamento #<?php echo $model->idapartamento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idapartamento',
		'numero',
		'idbloco',
	),
)); ?>
