<?php
/* @var $this QuadroAvisoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Quadro Avisos',
);

$this->menu=array(
	array('label'=>'Create QuadroAviso', 'url'=>array('create')),
	array('label'=>'Manage QuadroAviso', 'url'=>array('admin')),
);
?>

<h1>Quadro Avisos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
