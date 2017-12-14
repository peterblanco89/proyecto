<?php

/**
 * This is the model class for table "estudiante".
 *
 * The followings are the available columns in table 'estudiante':
 * @property string $id_carnet
 * @property string $documento
 * @property string $Tipo_doc
 * @property string $nombre
 * @property string $apellido
 * @property string $sexo
 *
 * The followings are the available model relations:
 * @property Materiaxestudainte[] $materiaxestudaintes
 */
class Estudiante extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'estudiante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_carnet, documento, Tipo_doc, nombre, apellido, sexo', 'required'),
			array('id_carnet', 'length', 'max'=>12),
			array('documento', 'length', 'max'=>15),
			array('Tipo_doc', 'length', 'max'=>10),
			array('nombre, nombre_completo', 'length', 'max'=>20),
			array('apellido', 'length', 'max'=>45),
			array('sexo', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_carnet, documento, Tipo_doc, nombre, apellido, sexo', 'safe', 'on'=>'search'),
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
			'materiaxestudaintes' => array(self::HAS_MANY, 'Materiaxestudainte', 'cod_estudiante'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_carnet' => 'Carnet No',
			'documento' => 'Documento',
			'Tipo_doc' => 'Tipo Documento',
			'nombre' => 'Nombres',
			'apellido' => 'Apellidos',
			'sexo' => 'Sexo',
			'nombre_completo'=>'Nombre Completo',
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

		$criteria->compare('id_carnet',$this->id_carnet,true);
		$criteria->compare('documento',$this->documento,true);
		$criteria->compare('Tipo_doc',$this->Tipo_doc,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('nombre_completo',$this->sexo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Estudiante the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
