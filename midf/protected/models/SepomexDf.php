<?php

/**
 * This is the model class for table "sepomex_df".
 *
 * The followings are the available columns in table 'sepomex_df':
 * @property string $CP
 * @property string $Asentamiento
 * @property string $TipoAsentamiento
 * @property string $Municipio
 * @property string $Estado
 * @property string $Ciudad
 * @property string $d_CP
 * @property string $c_estado
 * @property string $c_oficina
 * @property string $c_CP
 * @property string $c_tipo_asenta
 * @property string $c_mnpio
 * @property string $id_asenta_cpcons
 * @property string $Tipo
 * @property string $c_cve_ciudad
 */
class SepomexDf extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sepomex_df';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CP, Asentamiento, TipoAsentamiento, Municipio, Estado, Ciudad, d_CP, c_estado, c_oficina, c_CP, c_tipo_asenta, c_mnpio, id_asenta_cpcons, Tipo, c_cve_ciudad', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CP, Asentamiento, TipoAsentamiento, Municipio, Estado, Ciudad, d_CP, c_estado, c_oficina, c_CP, c_tipo_asenta, c_mnpio, id_asenta_cpcons, Tipo, c_cve_ciudad', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CP' => 'Cp',
			'Asentamiento' => 'Asentamiento',
			'TipoAsentamiento' => 'Tipo Asentamiento',
			'Municipio' => 'Municipio',
			'Estado' => 'Estado',
			'Ciudad' => 'Ciudad',
			'd_CP' => 'D Cp',
			'c_estado' => 'C Estado',
			'c_oficina' => 'C Oficina',
			'c_CP' => 'C Cp',
			'c_tipo_asenta' => 'C Tipo Asenta',
			'c_mnpio' => 'C Mnpio',
			'id_asenta_cpcons' => 'Id Asenta Cpcons',
			'Tipo' => 'Tipo',
			'c_cve_ciudad' => 'C Cve Ciudad',
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

		$criteria->compare('CP',$this->CP,true);
		$criteria->compare('Asentamiento',$this->Asentamiento,true);
		$criteria->compare('TipoAsentamiento',$this->TipoAsentamiento,true);
		$criteria->compare('Municipio',$this->Municipio,true);
		$criteria->compare('Estado',$this->Estado,true);
		$criteria->compare('Ciudad',$this->Ciudad,true);
		$criteria->compare('d_CP',$this->d_CP,true);
		$criteria->compare('c_estado',$this->c_estado,true);
		$criteria->compare('c_oficina',$this->c_oficina,true);
		$criteria->compare('c_CP',$this->c_CP,true);
		$criteria->compare('c_tipo_asenta',$this->c_tipo_asenta,true);
		$criteria->compare('c_mnpio',$this->c_mnpio,true);
		$criteria->compare('id_asenta_cpcons',$this->id_asenta_cpcons,true);
		$criteria->compare('Tipo',$this->Tipo,true);
		$criteria->compare('c_cve_ciudad',$this->c_cve_ciudad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SepomexDf the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
