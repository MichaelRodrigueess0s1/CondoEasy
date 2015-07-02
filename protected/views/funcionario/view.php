<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	$model->id_funcionario,
);

$this->menu=array(
	array('label'=>'List Funcionario', 'url'=>array('index')),
	array('label'=>'Create Funcionario', 'url'=>array('create')),
	array('label'=>'Update Funcionario', 'url'=>array('update', 'id'=>$model->id_funcionario)),
	array('label'=>'Delete Funcionario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_funcionario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Funcionario', 'url'=>array('admin')),
);
?>

<h1>View Funcionario #<?php echo $model->id_funcionario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_funcionario',
		'idcondominio',
		'nome_funcionario',
		'endereco_funcionario',
		'bairro_funcionario',
		'cidade_funcionario',
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
	),
)); ?>
