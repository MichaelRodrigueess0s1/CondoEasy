<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
		<?php echo $form->error($model,'idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model,'login',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'senha'); ?>
		<?php echo $form->textField($model,'senha',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'senha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpf'); ?>
		<?php echo $form->textField($model,'cpf',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contato1'); ?>
		<?php echo $form->textField($model,'contato1',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'contato1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contato2'); ?>
		<?php echo $form->textField($model,'contato2',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'contato2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dtCadastro'); ?>
		<?php echo $form->textField($model,'dtCadastro'); ?>
		<?php echo $form->error($model,'dtCadastro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idapartamento'); ?>
		<?php echo $form->textField($model,'idapartamento'); ?>
		<?php echo $form->error($model,'idapartamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idtipo_usuario'); ?>
		<?php echo $form->textField($model,'idtipo_usuario'); ?>
		<?php echo $form->error($model,'idtipo_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php echo $form->textField($model,'foto'); ?>
		<?php echo $form->error($model,'foto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->