<?php
/* @var $this VeiculoController */
/* @var $model Veiculo */

$this->breadcrumbs=array(
	'Veiculos'=>array('index'),
	$model->placa,
);

$this->menu=array(
	array('label'=>'List Veiculo', 'url'=>array('index')),
	array('label'=>'Create Veiculo', 'url'=>array('create')),
	array('label'=>'Update Veiculo', 'url'=>array('update', 'id'=>$model->placa)),
	array('label'=>'Delete Veiculo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->placa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Veiculo', 'url'=>array('admin')),
);
?>

<h1>View Veiculo #<?php echo $model->placa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idveiculo',
		'placa',
		'modelo',
		'marca',
		'fabricante',
		'tipo_veiculo_idtipo_veiculo',
		'Usuario_idUsuario',
	),
)); ?>
