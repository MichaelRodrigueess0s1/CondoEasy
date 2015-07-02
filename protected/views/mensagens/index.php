<?php
/* @var $this MensagensController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mensagens',
);

$this->menu=array(
	array('label'=>'Create Mensagens', 'url'=>array('create')),
	array('label'=>'Manage Mensagens', 'url'=>array('admin')),
);
?>

<h1>Mensagens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
