<?php
/* @var $this VagaController */
/* @var $model Vaga */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vaga-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idvaga'); ?>
		<?php echo $form->textField($model,'idvaga'); ?>
		<?php echo $form->error($model,'idvaga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idapartamento'); ?>
		<?php echo $form->textField($model,'idapartamento'); ?>
		<?php echo $form->error($model,'idapartamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dscVaga'); ?>
		<?php echo $form->textField($model,'dscVaga',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'dscVaga'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->