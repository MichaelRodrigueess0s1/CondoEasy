<?php
/* @var $this StatusLancamentoController */
/* @var $model StatusLancamento */

$this->breadcrumbs=array(
	'Status Lancamentos'=>array('index'),
	$model->idstatus_lancamento,
);

$this->menu=array(
	array('label'=>'List StatusLancamento', 'url'=>array('index')),
	array('label'=>'Create StatusLancamento', 'url'=>array('create')),
	array('label'=>'Update StatusLancamento', 'url'=>array('update', 'id'=>$model->idstatus_lancamento)),
	array('label'=>'Delete StatusLancamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idstatus_lancamento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StatusLancamento', 'url'=>array('admin')),
);
?>

<h1>View StatusLancamento #<?php echo $model->idstatus_lancamento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idstatus_lancamento',
		'dsc_status_lancamento',
	),
)); ?>
