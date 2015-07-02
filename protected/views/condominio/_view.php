<?php
/* @var $this CondominioController */
/* @var $data Condominio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcondominio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcondominio), array('view', 'id'=>$data->idcondominio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razaoSocial')); ?>:</b>
	<?php echo CHtml::encode($data->razaoSocial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cnpj')); ?>:</b>
	<?php echo CHtml::encode($data->cnpj); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rua')); ?>:</b>
	<?php echo CHtml::encode($data->rua); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bairro')); ?>:</b>
	<?php echo CHtml::encode($data->bairro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cidade')); ?>:</b>
	<?php echo CHtml::encode($data->cidade); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	*/ ?>

</div>