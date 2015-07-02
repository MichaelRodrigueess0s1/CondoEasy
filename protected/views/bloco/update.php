<?php
/* @var $this BlocoController */
/* @var $model Bloco */

$this->breadcrumbs=array(
	'Blocos'=>array('index'),
	$model->idbloco=>array('view','id'=>$model->idbloco),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bloco', 'url'=>array('index')),
	array('label'=>'Create Bloco', 'url'=>array('create')),
	array('label'=>'View Bloco', 'url'=>array('view', 'id'=>$model->idbloco)),
	array('label'=>'Manage Bloco', 'url'=>array('admin')),
);
?>

<h1>Update Bloco <?php echo $model->idbloco; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>