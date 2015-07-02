<?php

/**
 * This is the model class for table "apartamento".
 *
 * The followings are the available columns in table 'apartamento':
 * @property integer $idapartamento
 * @property string $numero
 * @property integer $idbloco
 *
 * The followings are the available model relations:
 * @property Bloco $idbloco0
 * @property Usuario[] $usuarios
 * @property Vaga[] $vagas
 */
class Apartamento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'apartamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idapartamento, numero, idbloco', 'required'),
			array('idapartamento, idbloco', 'numerical', 'integerOnly'=>true),
			array('numero', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idapartamento, numero, idbloco', 'safe', 'on'=>'search'),
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
			'idbloco0' => array(self::BELONGS_TO, 'Bloco', 'idbloco'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'idapartamento'),
			'vagas' => array(self::HAS_MANY, 'Vaga', 'idapartamento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idapartamento' => 'Idapartamento',
			'numero' => 'Numero',
			'idbloco' => 'Idbloco',
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

		$criteria->compare('idapartamento',$this->idapartamento);
		$criteria->compare('numero',$this->numero,true);
		$criteria->compare('idbloco',$this->idbloco);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Apartamento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
