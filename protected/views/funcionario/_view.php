<?php
/* @var $this FuncionarioController */
/* @var $data Funcionario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_funcionario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_funcionario), array('view', 'id'=>$data->id_funcionario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcondominio')); ?>:</b>
	<?php echo CHtml::encode($data->idcondominio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_funcionario')); ?>:</b>
	<?php echo CHtml::encode($data->nome_funcionario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endereco_funcionario')); ?>:</b>
	<?php echo CHtml::encode($data->endereco_funcionario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bairro_funcionario')); ?>:</b>
	<?php echo CHtml::encode($data->bairro_funcionario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cidade_funcionario')); ?>:</b>
	<?php echo CHtml::encode($data->cidade_funcionario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identidade')); ?>:</b>
	<?php echo CHtml::encode($data->identidade); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cpf')); ?>:</b>
	<?php echo CHtml::encode($data->cpf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_nascimento')); ?>:</b>
	<?php echo CHtml::encode($data->data_nascimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('senha')); ?>:</b>
	<?php echo CHtml::encode($data->senha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('funcao')); ?>:</b>
	<?php echo CHtml::encode($data->funcao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
	<?php echo CHtml::encode($data->foto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_cadastro')); ?>:</b>
	<?php echo CHtml::encode($data->data_cadastro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horario_entrada')); ?>:</b>
	<?php echo CHtml::encode($data->horario_entrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horario_saida')); ?>:</b>
	<?php echo CHtml::encode($data->horario_saida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone_cel')); ?>:</b>
	<?php echo CHtml::encode($data->telefone_cel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone_fix')); ?>:</b>
	<?php echo CHtml::encode($data->telefone_fix); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ramal')); ?>:</b>
	<?php echo CHtml::encode($data->ramal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_condominio')); ?>:</b>
	<?php echo CHtml::encode($data->nome_condominio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endereco_condominio')); ?>:</b>
	<?php echo CHtml::encode($data->endereco_condominio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bairro_condominio')); ?>:</b>
	<?php echo CHtml::encode($data->bairro_condominio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cidade_condominio')); ?>:</b>
	<?php echo CHtml::encode($data->cidade_condominio); ?>
	<br />

	*/ ?>

</div>