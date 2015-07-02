<?php
/* @var $this CondominioController */
/* @var $model Condominio */

$this->breadcrumbs=array(
	'Condominios'=>array('index'),
	$model->idcondominio,
);

$this->menu=array(
	array('label'=>'List Condominio', 'url'=>array('index')),
	array('label'=>'Create Condominio', 'url'=>array('create')),
	array('label'=>'Update Condominio', 'url'=>array('update', 'id'=>$model->idcondominio)),
	array('label'=>'Delete Condominio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcondominio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Condominio', 'url'=>array('admin')),
);
?>

<h1>View Condominio #<?php echo $model->idcondominio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcondominio',
		'nome',
		'razaoSocial',
		'cnpj',
		'rua',
		'bairro',
		'cidade',
		'estado',
	),
)); ?>
