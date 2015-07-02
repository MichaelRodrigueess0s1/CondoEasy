<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $idUsuario
 * @property string $login
 * @property string $senha
 * @property string $nome
 * @property string $email
 * @property string $cpf
 * @property string $contato1
 * @property string $contato2
 * @property string $dtCadastro
 * @property integer $idapartamento
 * @property integer $idtipo_usuario
 * @property string $foto
 *
 * The followings are the available model relations:
 * @property Lancamento[] $lancamentos
 * @property Mensagens[] $mensagens
 * @property Apartamento $idapartamento0
 * @property TipoUsuario $idtipoUsuario
 * @property Veiculo[] $veiculos
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idUsuario, login, senha, nome, email, dtCadastro, idapartamento, idtipo_usuario', 'required'),
			array('idUsuario, idapartamento, idtipo_usuario', 'numerical', 'integerOnly'=>true),
			array('login, senha', 'length', 'max'=>45),
			array('nome, email', 'length', 'max'=>100),
			array('cpf', 'length', 'max'=>12),
			array('contato1, contato2', 'length', 'max'=>15),
			array('foto', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idUsuario, login, senha, nome, email, cpf, contato1, contato2, dtCadastro, idapartamento, idtipo_usuario, foto', 'safe', 'on'=>'search'),
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
			'lancamentos' => array(self::HAS_MANY, 'Lancamento', 'idUsuario'),
			'mensagens' => array(self::HAS_MANY, 'Mensagens', 'Usuario_idUsuario'),
			'idapartamento0' => array(self::BELONGS_TO, 'Apartamento', 'idapartamento'),
			'idtipoUsuario' => array(self::BELONGS_TO, 'TipoUsuario', 'idtipo_usuario'),
			'veiculos' => array(self::HAS_MANY, 'Veiculo', 'Usuario_idUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUsuario' => 'Id Usuario',
			'login' => 'Login',
			'senha' => 'Senha',
			'nome' => 'Nome',
			'email' => 'Email',
			'cpf' => 'Cpf',
			'contato1' => 'Contato1',
			'contato2' => 'Contato2',
			'dtCadastro' => 'Dt Cadastro',
			'idapartamento' => 'Idapartamento',
			'idtipo_usuario' => 'Idtipo Usuario',
			'foto' => 'Foto',
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

		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('senha',$this->senha,true);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('contato1',$this->contato1,true);
		$criteria->compare('contato2',$this->contato2,true);
		$criteria->compare('dtCadastro',$this->dtCadastro,true);
		$criteria->compare('idapartamento',$this->idapartamento);
		$criteria->compare('idtipo_usuario',$this->idtipo_usuario);
		$criteria->compare('foto',$this->foto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
