<?php
/* @var $this BlocoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Blocos',
);

$this->menu=array(
	array('label'=>'Create Bloco', 'url'=>array('create')),
	array('label'=>'Manage Bloco', 'url'=>array('admin')),
);
?>

<h1>Blocos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
