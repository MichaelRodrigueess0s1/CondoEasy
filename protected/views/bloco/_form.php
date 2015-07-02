<?php
/* @var $this BlocoController */
/* @var $model Bloco */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bloco-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idbloco'); ?>
		<?php echo $form->textField($model,'idbloco'); ?>
		<?php echo $form->error($model,'idbloco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idcondominio'); ?>
		<?php echo $form->textField($model,'idcondominio'); ?>
		<?php echo $form->error($model,'idcondominio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dscPredio'); ?>
		<?php echo $form->textField($model,'dscPredio',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dscPredio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->