<?php

/**
 * This is the model class for table "lancamento".
 *
 * The followings are the available columns in table 'lancamento':
 * @property integer $idlancamentos
 * @property integer $tipo_lancamento
 * @property double $valor
 * @property string $dsc_lancamento
 * @property string $data
 * @property integer $status
 * @property integer $idstatus_lancamento
 * @property integer $idbloco
 * @property integer $idUsuario
 *
 * The followings are the available model relations:
 * @property Usuario $idUsuario0
 * @property Bloco $idbloco0
 * @property StatusLancamento $idstatusLancamento
 */
class Lancamento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lancamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idlancamentos, tipo_lancamento, valor, dsc_lancamento, data, status, idstatus_lancamento, idbloco, idUsuario', 'required'),
			array('idlancamentos, tipo_lancamento, status, idstatus_lancamento, idbloco, idUsuario', 'numerical', 'integerOnly'=>true),
			array('valor', 'numerical'),
			array('dsc_lancamento', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idlancamentos, tipo_lancamento, valor, dsc_lancamento, data, status, idstatus_lancamento, idbloco, idUsuario', 'safe', 'on'=>'search'),
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
			'idUsuario0' => array(self::BELONGS_TO, 'Usuario', 'idUsuario'),
			'idbloco0' => array(self::BELONGS_TO, 'Bloco', 'idbloco'),
			'idstatusLancamento' => array(self::BELONGS_TO, 'StatusLancamento', 'idstatus_lancamento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idlancamentos' => 'Idlancamentos',
			'tipo_lancamento' => 'Tipo Lancamento',
			'valor' => 'Valor',
			'dsc_lancamento' => 'Dsc Lancamento',
			'data' => 'Data',
			'status' => 'Status',
			'idstatus_lancamento' => 'Idstatus Lancamento',
			'idbloco' => 'Idbloco',
			'idUsuario' => 'Id Usuario',
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

		$criteria->compare('idlancamentos',$this->idlancamentos);
		$criteria->compare('tipo_lancamento',$this->tipo_lancamento);
		$criteria->compare('valor',$this->valor);
		$criteria->compare('dsc_lancamento',$this->dsc_lancamento,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('idstatus_lancamento',$this->idstatus_lancamento);
		$criteria->compare('idbloco',$this->idbloco);
		$criteria->compare('idUsuario',$this->idUsuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Lancamento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
