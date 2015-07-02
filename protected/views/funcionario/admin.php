<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Funcionario', 'url'=>array('index')),
	array('label'=>'Create Funcionario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#funcionario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Funcionarios</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'funcionario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_funcionario',
		'idcondominio',
		'nome_funcionario',
		'endereco_funcionario',
		'bairro_funcionario',
		'cidade_funcionario',
		/*
		'identidade',
		'cpf',
		'data_nascimento',
		'senha',
		'funcao',
		'foto',
		'data_cadastro',
		'horario_entrada',
		'horario_saida',
		'email',
		'telefone_cel',
		'telefone_fix',
		'ramal',
		'nome_condominio',
		'endereco_condominio',
		'bairro_condominio',
		'cidade_condominio',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
