<?php
/* @var $this MensagensController */
/* @var $model Mensagens */

$this->breadcrumbs=array(
	'Mensagens'=>array('index'),
	$model->idmensagens=>array('view','id'=>$model->idmensagens),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mensagens', 'url'=>array('index')),
	array('label'=>'Create Mensagens', 'url'=>array('create')),
	array('label'=>'View Mensagens', 'url'=>array('view', 'id'=>$model->idmensagens)),
	array('label'=>'Manage Mensagens', 'url'=>array('admin')),
);
?>

<h1>Update Mensagens <?php echo $model->idmensagens; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>