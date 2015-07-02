<?php
/* @var $this StatusLancamentoController */
/* @var $data StatusLancamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idstatus_lancamento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idstatus_lancamento), array('view', 'id'=>$data->idstatus_lancamento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dsc_status_lancamento')); ?>:</b>
	<?php echo CHtml::encode($data->dsc_status_lancamento); ?>
	<br />


</div>