<?php
/* @var $this VagaController */
/* @var $model Vaga */

$this->breadcrumbs=array(
	'Vagas'=>array('index'),
	$model->idvaga,
);

$this->menu=array(
	array('label'=>'List Vaga', 'url'=>array('index')),
	array('label'=>'Create Vaga', 'url'=>array('create')),
	array('label'=>'Update Vaga', 'url'=>array('update', 'id'=>$model->idvaga)),
	array('label'=>'Delete Vaga', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idvaga),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vaga', 'url'=>array('admin')),
);
?>

<h1>View Vaga #<?php echo $model->idvaga; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idvaga',
		'idapartamento',
		'dscVaga',
	),
)); ?>
