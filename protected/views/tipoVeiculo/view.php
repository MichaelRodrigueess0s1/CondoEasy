<?php
/* @var $this TipoVeiculoController */
/* @var $model TipoVeiculo */

$this->breadcrumbs=array(
	'Tipo Veiculos'=>array('index'),
	$model->idtipo_veiculo,
);

$this->menu=array(
	array('label'=>'List TipoVeiculo', 'url'=>array('index')),
	array('label'=>'Create TipoVeiculo', 'url'=>array('create')),
	array('label'=>'Update TipoVeiculo', 'url'=>array('update', 'id'=>$model->idtipo_veiculo)),
	array('label'=>'Delete TipoVeiculo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtipo_veiculo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoVeiculo', 'url'=>array('admin')),
);
?>

<h1>View TipoVeiculo #<?php echo $model->idtipo_veiculo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtipo_veiculo',
		'dscTipo',
	),
)); ?>
