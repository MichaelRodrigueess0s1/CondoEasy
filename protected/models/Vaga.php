<?php

/**
 * This is the model class for table "vaga".
 *
 * The followings are the available columns in table 'vaga':
 * @property integer $idvaga
 * @property integer $idapartamento
 * @property string $dscVaga
 *
 * The followings are the available model relations:
 * @property Apartamento $idapartamento0
 */
class Vaga extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vaga';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idvaga, idapartamento, dscVaga', 'required'),
			array('idvaga, idapartamento', 'numerical', 'integerOnly'=>true),
			array('dscVaga', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idvaga, idapartamento, dscVaga', 'safe', 'on'=>'search'),
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
			'idapartamento0' => array(self::BELONGS_TO, 'Apartamento', 'idapartamento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idvaga' => 'Idvaga',
			'idapartamento' => 'Idapartamento',
			'dscVaga' => 'Dsc Vaga',
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

		$criteria->compare('idvaga',$this->idvaga);
		$criteria->compare('idapartamento',$this->idapartamento);
		$criteria->compare('dscVaga',$this->dscVaga,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vaga the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
