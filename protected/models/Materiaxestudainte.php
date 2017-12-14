<?php

/**
 * This is the model class for table "materiaxestudainte".
 *
 * The followings are the available columns in table 'materiaxestudainte':
 * @property integer $id
 * @property string $cod_estudiante
 * @property integer $cod_materia
 * @property string $fecha_matricula
 *
 * The followings are the available model relations:
 * @property Estudiante $codEstudiante
 * @property Materia $codMateria
 * @property Nota[] $notas
 */
class Materiaxestudainte extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'materiaxestudainte';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('id', 'required'),
			array('id, cod_materia', 'numerical', 'integerOnly'=>true),
			array('cod_estudiante', 'length', 'max'=>12),
			array('fecha_matricula', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cod_estudiante, cod_materia, fecha_matricula', 'safe', 'on'=>'search'),
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
			'codEstudiante' => array(self::BELONGS_TO, 'Estudiante', 'cod_estudiante'),
			'codMateria' => array(self::BELONGS_TO, 'Materia', 'cod_materia'),
			'notas' => array(self::HAS_MANY, 'Nota', 'cod_mxe'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'cod_estudiante' => 'Codigo Estudiante',
			'cod_materia' => 'Materia',
			'fecha_matricula' => 'Fecha Matricula',
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
	public function search($idc)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('cod_estudiante',$idc,true);
		$criteria->compare('cod_materia',$this->cod_materia);
		$criteria->compare('fecha_matricula',$this->fecha_matricula,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Materiaxestudainte the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
