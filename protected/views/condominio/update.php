<?php
/* @var $this CondominioController */
/* @var $model Condominio */

$this->breadcrumbs=array(
	'Condominios'=>array('index'),
	$model->idcondominio=>array('view','id'=>$model->idcondominio),
	'Update',
);

$this->menu=array(
	array('label'=>'List Condominio', 'url'=>array('index')),
	array('label'=>'Create Condominio', 'url'=>array('create')),
	array('label'=>'View Condominio', 'url'=>array('view', 'id'=>$model->idcondominio)),
	array('label'=>'Manage Condominio', 'url'=>array('admin')),
);
?>

<h1>Update Condominio <?php echo $model->idcondominio; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>