<?php
/* @var $this TipoVeiculoController */
/* @var $model TipoVeiculo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idtipo_veiculo'); ?>
		<?php echo $form->textField($model,'idtipo_veiculo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dscTipo'); ?>
		<?php echo $form->textField($model,'dscTipo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->