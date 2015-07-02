<?php
/* @var $this StatusLancamentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Status Lancamentos',
);

$this->menu=array(
	array('label'=>'Create StatusLancamento', 'url'=>array('create')),
	array('label'=>'Manage StatusLancamento', 'url'=>array('admin')),
);
?>

<h1>Status Lancamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
