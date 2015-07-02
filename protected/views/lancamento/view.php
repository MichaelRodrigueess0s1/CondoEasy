<?php
/* @var $this LancamentoController */
/* @var $model Lancamento */

$this->breadcrumbs=array(
	'Lancamentos'=>array('index'),
	$model->idlancamentos,
);

$this->menu=array(
	array('label'=>'List Lancamento', 'url'=>array('index')),
	array('label'=>'Create Lancamento', 'url'=>array('create')),
	array('label'=>'Update Lancamento', 'url'=>array('update', 'id'=>$model->idlancamentos)),
	array('label'=>'Delete Lancamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idlancamentos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lancamento', 'url'=>array('admin')),
);
?>

<h1>View Lancamento #<?php echo $model->idlancamentos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idlancamentos',
		'tipo_lancamento',
		'valor',
		'dsc_lancamento',
		'data',
		'status',
		'idstatus_lancamento',
		'idbloco',
		'idUsuario',
	),
)); ?>
