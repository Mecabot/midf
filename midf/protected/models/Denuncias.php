<?php

/**
 * This is the model class for table "denuncias".
 *
 * The followings are the available columns in table 'denuncias':
 * @property integer $id_denuncia
 * @property integer $num_folio
 * @property integer $fk_estatus
 * @property integer $fk_cat1
 * @property integer $fk_cat2
 * @property string $denuncia
 * @property string $descripcion
 * @property string $calle
 * @property string $entre_calle
 * @property string $y_calle
 * @property string $colonia
 * @property string $delegacion
 * @property string $codigo_postal
 * @property string $create_at
 * @property string $updated_at
 */
class Denuncias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'denuncias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('num_folio, fk_estatus, fk_cat1, fk_cat2, denuncia, descripcion, calle, entre_calle, y_calle, colonia, delegacion, codigo_postal, create_at', 'required'),
			array('num_folio, fk_estatus, fk_cat1, fk_cat2', 'numerical', 'integerOnly'=>true),
			array('denuncia, descripcion, calle, entre_calle, y_calle, colonia, delegacion, codigo_postal', 'length', 'max'=>255),
			array('updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_denuncia, num_folio, fk_estatus, fk_cat1, fk_cat2, denuncia, descripcion, calle, entre_calle, y_calle, colonia, delegacion, codigo_postal, create_at, updated_at', 'safe', 'on'=>'search'),
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
			'id_denuncia' => 'Id Denuncia',
			'num_folio' => 'Num Folio',
			'fk_estatus' => 'Fk Estatus',
			'fk_cat1' => 'Fk Cat1',
			'fk_cat2' => 'Fk Cat2',
			'denuncia' => 'Denuncia',
			'descripcion' => 'Descripcion',
			'calle' => 'Calle',
			'entre_calle' => 'Entre Calle',
			'y_calle' => 'Y Calle',
			'colonia' => 'Colonia',
			'delegacion' => 'Delegacion',
			'codigo_postal' => 'Codigo Postal',
			'create_at' => 'Create At',
			'updated_at' => 'Updated At',
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

		$criteria->compare('id_denuncia',$this->id_denuncia);
		$criteria->compare('num_folio',$this->num_folio);
		$criteria->compare('fk_estatus',$this->fk_estatus);
		$criteria->compare('fk_cat1',$this->fk_cat1);
		$criteria->compare('fk_cat2',$this->fk_cat2);
		$criteria->compare('denuncia',$this->denuncia,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('calle',$this->calle,true);
		$criteria->compare('entre_calle',$this->entre_calle,true);
		$criteria->compare('y_calle',$this->y_calle,true);
		$criteria->compare('colonia',$this->colonia,true);
		$criteria->compare('delegacion',$this->delegacion,true);
		$criteria->compare('codigo_postal',$this->codigo_postal,true);
		$criteria->compare('create_at',$this->create_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Denuncias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
