<?php
/* @var $this TipoVeiculoController */
/* @var $data TipoVeiculo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtipo_veiculo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtipo_veiculo), array('view', 'id'=>$data->idtipo_veiculo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dscTipo')); ?>:</b>
	<?php echo CHtml::encode($data->dscTipo); ?>
	<br />


</div>