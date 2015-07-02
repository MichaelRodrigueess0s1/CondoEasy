<?php
/* @var $this BlocoController */
/* @var $model Bloco */

$this->breadcrumbs=array(
	'Blocos'=>array('index'),
	$model->idbloco,
);

$this->menu=array(
	array('label'=>'List Bloco', 'url'=>array('index')),
	array('label'=>'Create Bloco', 'url'=>array('create')),
	array('label'=>'Update Bloco', 'url'=>array('update', 'id'=>$model->idbloco)),
	array('label'=>'Delete Bloco', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idbloco),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bloco', 'url'=>array('admin')),
);
?>

<h1>View Bloco #<?php echo $model->idbloco; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idbloco',
		'idcondominio',
		'dscPredio',
	),
)); ?>
