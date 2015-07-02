<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'funcionario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idcondominio'); ?>
		<?php echo $form->textField($model,'idcondominio'); ?>
		<?php echo $form->error($model,'idcondominio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_funcionario'); ?>
		<?php echo $form->textField($model,'nome_funcionario',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nome_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endereco_funcionario'); ?>
		<?php echo $form->textField($model,'endereco_funcionario',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'endereco_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bairro_funcionario'); ?>
		<?php echo $form->textField($model,'bairro_funcionario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'bairro_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cidade_funcionario'); ?>
		<?php echo $form->textField($model,'cidade_funcionario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cidade_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identidade'); ?>
		<?php echo $form->textField($model,'identidade',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'identidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpf'); ?>
		<?php echo $form->textField($model,'cpf',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_nascimento'); ?>
		<?php echo $form->textField($model,'data_nascimento'); ?>
		<?php echo $form->error($model,'data_nascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'senha'); ?>
		<?php echo $form->textField($model,'senha',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'senha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'funcao'); ?>
		<?php echo $form->textField($model,'funcao',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'funcao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php echo $form->textField($model,'foto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_cadastro'); ?>
		<?php echo $form->textField($model,'data_cadastro'); ?>
		<?php echo $form->error($model,'data_cadastro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horario_entrada'); ?>
		<?php echo $form->textField($model,'horario_entrada'); ?>
		<?php echo $form->error($model,'horario_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horario_saida'); ?>
		<?php echo $form->textField($model,'horario_saida'); ?>
		<?php echo $form->error($model,'horario_saida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone_cel'); ?>
		<?php echo $form->textField($model,'telefone_cel',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'telefone_cel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone_fix'); ?>
		<?php echo $form->textField($model,'telefone_fix',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'telefone_fix'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ramal'); ?>
		<?php echo $form->textField($model,'ramal'); ?>
		<?php echo $form->error($model,'ramal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_condominio'); ?>
		<?php echo $form->textField($model,'nome_condominio',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nome_condominio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endereco_condominio'); ?>
		<?php echo $form->textField($model,'endereco_condominio',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'endereco_condominio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bairro_condominio'); ?>
		<?php echo $form->textField($model,'bairro_condominio',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'bairro_condominio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cidade_condominio'); ?>
		<?php echo $form->textField($model,'cidade_condominio',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cidade_condominio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->