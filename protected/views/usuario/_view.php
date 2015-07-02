<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idUsuario), array('view', 'id'=>$data->idUsuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login')); ?>:</b>
	<?php echo CHtml::encode($data->login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('senha')); ?>:</b>
	<?php echo CHtml::encode($data->senha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpf')); ?>:</b>
	<?php echo CHtml::encode($data->cpf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contato1')); ?>:</b>
	<?php echo CHtml::encode($data->contato1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('contato2')); ?>:</b>
	<?php echo CHtml::encode($data->contato2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dtCadastro')); ?>:</b>
	<?php echo CHtml::encode($data->dtCadastro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idapartamento')); ?>:</b>
	<?php echo CHtml::encode($data->idapartamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtipo_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->idtipo_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
	<?php echo CHtml::encode($data->foto); ?>
	<br />

	*/ ?>

</div>