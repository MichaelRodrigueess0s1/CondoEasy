<?php

/**
 * This is the model class for table "bloco".
 *
 * The followings are the available columns in table 'bloco':
 * @property integer $idbloco
 * @property integer $idcondominio
 * @property string $dscPredio
 *
 * The followings are the available model relations:
 * @property Apartamento[] $apartamentos
 * @property Condominio $idcondominio0
 * @property Lancamento[] $lancamentos
 */
class Bloco extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bloco';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idcondominio, dscPredio', 'required'),
			array('idbloco, idcondominio', 'numerical', 'integerOnly'=>true),
			array('dscPredio', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idbloco, idcondominio, dscPredio', 'safe', 'on'=>'search'),
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
			'apartamentos' => array(self::HAS_MANY, 'Apartamento', 'idbloco'),
			'idcondominio0' => array(self::BELONGS_TO, 'Condominio', 'idcondominio'),
			'lancamentos' => array(self::HAS_MANY, 'Lancamento', 'idbloco'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idbloco' => 'Idbloco',
			'idcondominio' => 'Idcondominio',
			'dscPredio' => 'Dsc Predio',
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

		$criteria->compare('idbloco',$this->idbloco);
		$criteria->compare('idcondominio',$this->idcondominio);
		$criteria->compare('dscPredio',$this->dscPredio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bloco the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
