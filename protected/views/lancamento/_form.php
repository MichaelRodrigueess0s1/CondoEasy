<?php
/* @var $this LancamentoController */
/* @var $model Lancamento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lancamento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idlancamentos'); ?>
		<?php echo $form->textField($model,'idlancamentos'); ?>
		<?php echo $form->error($model,'idlancamentos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_lancamento'); ?>
		<?php echo $form->textField($model,'tipo_lancamento'); ?>
		<?php echo $form->error($model,'tipo_lancamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model,'valor'); ?>
		<?php echo $form->error($model,'valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dsc_lancamento'); ?>
		<?php echo $form->textField($model,'dsc_lancamento',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dsc_lancamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idstatus_lancamento'); ?>
		<?php echo $form->textField($model,'idstatus_lancamento'); ?>
		<?php echo $form->error($model,'idstatus_lancamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idbloco'); ?>
		<?php echo $form->textField($model,'idbloco'); ?>
		<?php echo $form->error($model,'idbloco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
		<?php echo $form->error($model,'idUsuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->