<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_funcionario'); ?>
		<?php echo $form->textField($model,'id_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcondominio'); ?>
		<?php echo $form->textField($model,'idcondominio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_funcionario'); ?>
		<?php echo $form->textField($model,'nome_funcionario',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'endereco_funcionario'); ?>
		<?php echo $form->textField($model,'endereco_funcionario',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bairro_funcionario'); ?>
		<?php echo $form->textField($model,'bairro_funcionario',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cidade_funcionario'); ?>
		<?php echo $form->textField($model,'cidade_funcionario',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'identidade'); ?>
		<?php echo $form->textField($model,'identidade',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpf'); ?>
		<?php echo $form->textField($model,'cpf',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_nascimento'); ?>
		<?php echo $form->textField($model,'data_nascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'senha'); ?>
		<?php echo $form->textField($model,'senha',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'funcao'); ?>
		<?php echo $form->textField($model,'funcao',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'foto'); ?>
		<?php echo $form->textField($model,'foto',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_cadastro'); ?>
		<?php echo $form->textField($model,'data_cadastro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horario_entrada'); ?>
		<?php echo $form->textField($model,'horario_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horario_saida'); ?>
		<?php echo $form->textField($model,'horario_saida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefone_cel'); ?>
		<?php echo $form->textField($model,'telefone_cel',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefone_fix'); ?>
		<?php echo $form->textField($model,'telefone_fix',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ramal'); ?>
		<?php echo $form->textField($model,'ramal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_condominio'); ?>
		<?php echo $form->textField($model,'nome_condominio',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'endereco_condominio'); ?>
		<?php echo $form->textField($model,'endereco_condominio',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bairro_condominio'); ?>
		<?php echo $form->textField($model,'bairro_condominio',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cidade_condominio'); ?>
		<?php echo $form->textField($model,'cidade_condominio',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->