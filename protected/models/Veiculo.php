<?php

/**
 * This is the model class for table "veiculo".
 *
 * The followings are the available columns in table 'veiculo':
 * @property integer $idveiculo
 * @property string $placa
 * @property string $modelo
 * @property string $marca
 * @property string $fabricante
 * @property integer $tipo_veiculo_idtipo_veiculo
 * @property integer $Usuario_idUsuario
 *
 * The followings are the available model relations:
 * @property Usuario $usuarioIdUsuario
 * @property TipoVeiculo $tipoVeiculoIdtipoVeiculo
 */
class Veiculo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'veiculo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('placa, modelo, marca, fabricante, tipo_veiculo_idtipo_veiculo, Usuario_idUsuario', 'required'),
			array('idveiculo, tipo_veiculo_idtipo_veiculo, Usuario_idUsuario', 'numerical', 'integerOnly'=>true),
			array('placa', 'length', 'max'=>8),
			array('modelo, marca, fabricante', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idveiculo, placa, modelo, marca, fabricante, tipo_veiculo_idtipo_veiculo, Usuario_idUsuario', 'safe', 'on'=>'search'),
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
			'usuarioIdUsuario' => array(self::BELONGS_TO, 'Usuario', 'Usuario_idUsuario'),
			'tipoVeiculoIdtipoVeiculo' => array(self::BELONGS_TO, 'TipoVeiculo', 'tipo_veiculo_idtipo_veiculo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idveiculo' => 'Idveiculo',
			'placa' => 'Placa',
			'modelo' => 'Modelo',
			'marca' => 'Marca',
			'fabricante' => 'Fabricante',
			'tipo_veiculo_idtipo_veiculo' => 'Tipo Veiculo Idtipo Veiculo',
			'Usuario_idUsuario' => 'Usuario Id Usuario',
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

		$criteria->compare('idveiculo',$this->idveiculo);
		$criteria->compare('placa',$this->placa,true);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('marca',$this->marca,true);
		$criteria->compare('fabricante',$this->fabricante,true);
		$criteria->compare('tipo_veiculo_idtipo_veiculo',$this->tipo_veiculo_idtipo_veiculo);
		$criteria->compare('Usuario_idUsuario',$this->Usuario_idUsuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Veiculo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
