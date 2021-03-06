<?php

/**
 * This is the model class for table "condominio".
 *
 * The followings are the available columns in table 'condominio':
 * @property integer $idcondominio
 * @property string $nome
 * @property string $razaoSocial
 * @property string $cnpj
 * @property string $rua
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 *
 * The followings are the available model relations:
 * @property Bloco[] $blocos
 * @property Funcionario[] $funcionarios
 */
class Condominio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'condominio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idcondominio, nome', 'required'),
			array('idcondominio', 'numerical', 'integerOnly'=>true),
			array('nome, razaoSocial, rua, bairro, cidade, estado', 'length', 'max'=>100),
			array('cnpj', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idcondominio, nome, razaoSocial, cnpj, rua, bairro, cidade, estado', 'safe', 'on'=>'search'),
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
			'blocos' => array(self::HAS_MANY, 'Bloco', 'idcondominio'),
			'funcionarios' => array(self::HAS_MANY, 'Funcionario', 'idcondominio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcondominio' => 'Idcondominio',
			'nome' => 'Nome',
			'razaoSocial' => 'Razao Social',
			'cnpj' => 'Cnpj',
			'rua' => 'Rua',
			'bairro' => 'Bairro',
			'cidade' => 'Cidade',
			'estado' => 'Estado',
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

		$criteria->compare('idcondominio',$this->idcondominio);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('razaoSocial',$this->razaoSocial,true);
		$criteria->compare('cnpj',$this->cnpj,true);
		$criteria->compare('rua',$this->rua,true);
		$criteria->compare('bairro',$this->bairro,true);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('estado',$this->estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Condominio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
