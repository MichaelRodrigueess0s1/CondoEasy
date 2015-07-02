<?php
/* @var $this LancamentoController */
/* @var $data Lancamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idlancamentos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idlancamentos), array('view', 'id'=>$data->idlancamentos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_lancamento')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_lancamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dsc_lancamento')); ?>:</b>
	<?php echo CHtml::encode($data->dsc_lancamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idstatus_lancamento')); ?>:</b>
	<?php echo CHtml::encode($data->idstatus_lancamento); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('idbloco')); ?>:</b>
	<?php echo CHtml::encode($data->idbloco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />

	*/ ?>

</div>