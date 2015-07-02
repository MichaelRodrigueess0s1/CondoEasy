<?php

/**
 * This is the model class for table "funcionario".
 *
 * The followings are the available columns in table 'funcionario':
 * @property integer $id_funcionario
 * @property integer $idcondominio
 * @property string $nome_funcionario
 * @property string $endereco_funcionario
 * @property string $bairro_funcionario
 * @property string $cidade_funcionario
 * @property string $identidade
 * @property string $cpf
 * @property string $data_nascimento
 * @property string $senha
 * @property string $funcao
 * @property string $foto
 * @property string $data_cadastro
 * @property string $horario_entrada
 * @property string $horario_saida
 * @property string $email
 * @property string $telefone_cel
 * @property string $telefone_fix
 * @property integer $ramal
 * @property string $nome_condominio
 * @property string $endereco_condominio
 * @property string $bairro_condominio
 * @property string $cidade_condominio
 *
 * The followings are the available model relations:
 * @property Condominio $idcondominio0
 */
class Funcionario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'funcionario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idcondominio, nome_funcionario, endereco_funcionario, bairro_funcionario, cidade_funcionario, identidade, cpf, data_nascimento, senha, funcao, foto, data_cadastro, horario_entrada, horario_saida, ramal, nome_condominio, endereco_condominio, bairro_condominio, cidade_condominio', 'required'),
			array('idcondominio, ramal', 'numerical', 'integerOnly'=>true),
			array('nome_funcionario, endereco_funcionario, foto, email, nome_condominio, endereco_condominio', 'length', 'max'=>255),
			array('bairro_funcionario, cidade_funcionario, funcao, bairro_condominio, cidade_condominio', 'length', 'max'=>100),
			array('identidade', 'length', 'max'=>12),
			array('cpf', 'length', 'max'=>15),
			array('senha', 'length', 'max'=>32),
			array('telefone_cel, telefone_fix', 'length', 'max'=>14),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_funcionario, idcondominio, nome_funcionario, endereco_funcionario, bairro_funcionario, cidade_funcionario, identidade, cpf, data_nascimento, senha, funcao, foto, data_cadastro, horario_entrada, horario_saida, email, telefone_cel, telefone_fix, ramal, nome_condominio, endereco_condominio, bairro_condominio, cidade_condominio', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idcondominio0' => array(self::BELONGS_TO, 'Condominio', 'idcondominio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_funcionario' => 'Id Funcionario',
			'idcondominio' => 'Idcondominio',
			'nome_funcionario' => 'Nome Funcionario',
			'endereco_funcionario' => 'Endereco Funcionario',
			'bairro_funcionario' => 'Bairro Funcionario',
			'cidade_funcionario' => 'Cidade Funcionario',
			'identidade' => 'Identidade',
			'cpf' => 'Cpf',
			'data_nascimento' => 'Data Nascimento',
			'senha' => 'Senha',
			'funcao' => 'Funcao',
			'foto' => 'Foto',
			'data_cadastro' => 'Data Cadastro',
			'horario_entrada' => 'Horario Entrada',
			'horario_saida' => 'Horario Saida',
			'email' => 'Email',
			'telefone_cel' => 'Telefone Cel',
			'telefone_fix' => 'Telefone Fix',
			'ramal' => 'Ramal',
			'nome_condominio' => 'Nome Condominio',
			'endereco_condominio' => 'Endereco Condominio',
			'bairro_condominio' => 'Bairro Condominio',
			'cidade_condominio' => 'Cidade Condominio',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_funcionario',$this->id_funcionario);
		$criteria->compare('idcondominio',$this->idcondominio);
		$criteria->compare('nome_funcionario',$this->nome_funcionario,true);
		$criteria->compare('endereco_funcionario',$this->endereco_funcionario,true);
		$criteria->compare('bairro_funcionario',$this->bairro_funcionario,true);
		$criteria->compare('cidade_funcionario',$this->cidade_funcionario,true);
		$criteria->compare('identidade',$this->identidade,true);
		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('data_nascimento',$this->data_nascimento,true);
		$criteria->compare('senha',$this->senha,true);
		$criteria->compare('funcao',$this->funcao,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('data_cadastro',$this->data_cadastro,true);
		$criteria->compare('horario_entrada',$this->horario_entrada,true);
		$criteria->compare('horario_saida',$this->horario_saida,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telefone_cel',$this->telefone_cel,true);
		$criteria->compare('telefone_fix',$this->telefone_fix,true);
		$criteria->compare('ramal',$this->ramal);
		$criteria->compare('nome_condominio',$this->nome_condominio,true);
		$criteria->compare('endereco_condominio',$this->endereco_condominio,true);
		$criteria->compare('bairro_condominio',$this->bairro_condominio,true);
		$criteria->compare('cidade_condominio',$this->cidade_condominio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Funcionario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
