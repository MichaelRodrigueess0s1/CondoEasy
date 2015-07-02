<?php
/* @var $this TipoVeiculoController */
/* @var $model TipoVeiculo */

$this->breadcrumbs=array(
	'Tipo Veiculos'=>array('index'),
	$model->idtipo_veiculo=>array('view','id'=>$model->idtipo_veiculo),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoVeiculo', 'url'=>array('index')),
	array('label'=>'Create TipoVeiculo', 'url'=>array('create')),
	array('label'=>'View TipoVeiculo', 'url'=>array('view', 'id'=>$model->idtipo_veiculo)),
	array('label'=>'Manage TipoVeiculo', 'url'=>array('admin')),
);
?>

<h1>Update TipoVeiculo <?php echo $model->idtipo_veiculo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>