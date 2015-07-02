<?php

/**
 * This is the model class for table "quadro_aviso".
 *
 * The followings are the available columns in table 'quadro_aviso':
 * @property integer $idquadro_aviso
 * @property integer $mensagens_idmensagens
 *
 * The followings are the available model relations:
 * @property Mensagens $mensagensIdmensagens
 */
class QuadroAviso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'quadro_aviso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idquadro_aviso, mensagens_idmensagens', 'required'),
			array('idquadro_aviso, mensagens_idmensagens', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idquadro_aviso, mensagens_idmensagens', 'safe', 'on'=>'search'),
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
			'mensagensIdmensagens' => array(self::BELONGS_TO, 'Mensagens', 'mensagens_idmensagens'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idquadro_aviso' => 'Idquadro Aviso',
			'mensagens_idmensagens' => 'Mensagens Idmensagens',
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

		$criteria->compare('idquadro_aviso',$this->idquadro_aviso);
		$criteria->compare('mensagens_idmensagens',$this->mensagens_idmensagens);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return QuadroAviso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
