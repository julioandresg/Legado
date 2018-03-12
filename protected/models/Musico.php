<?php

/**
 * This is the model class for table "musico".
 *
 * The followings are the available columns in table 'musico':
 * @property integer $id
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property string $fecha_nacimiento
 * @property string $run
 * @property string $imagen
 * @property integer $telefono
 * @property string $correo
 * @property string $especialidad1
 * @property string $especialidad2
 * @property string $user
 * @property string $pass
 * @property string $pass2
 *
 * The followings are the available model relations:
 * @property DetalleBanda[] $detalleBandas
 */
class Musico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'musico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido_paterno, apellido_materno, fecha_nacimiento, run, imagen, telefono, correo, especialidad1, especialidad2, user, pass, pass2', 'required'),
			array('telefono', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>25),
			array('apellido_paterno, apellido_materno, user', 'length', 'max'=>15),
			array('run', 'length', 'max'=>12),
			array('correo', 'length', 'max'=>30),
			array('especialidad1, especialidad2, pass, pass2', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, apellido_paterno, apellido_materno, fecha_nacimiento, run, imagen, telefono, correo, especialidad1, especialidad2, user, pass, pass2', 'safe', 'on'=>'search'),
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
			'detalleBandas' => array(self::HAS_MANY, 'DetalleBanda', 'id_musico'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'apellido_paterno' => 'Apellido Paterno',
			'apellido_materno' => 'Apellido Materno',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'run' => 'Run',
			'imagen' => 'Imagen',
			'telefono' => 'Telefono',
			'correo' => 'Correo',
			'especialidad1' => 'Especialidad1',
			'especialidad2' => 'Especialidad2',
			'user' => 'User',
			'pass' => 'Pass',
			'pass2' => 'Pass2',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido_paterno',$this->apellido_paterno,true);
		$criteria->compare('apellido_materno',$this->apellido_materno,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('run',$this->run,true);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('especialidad1',$this->especialidad1,true);
		$criteria->compare('especialidad2',$this->especialidad2,true);
		$criteria->compare('user',$this->user,true);
		$criteria->compare('pass',$this->pass,true);
		$criteria->compare('pass2',$this->pass2,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Musico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function getConcatened(){
		return $this->nombre.' '.$this->apellido_paterno.' '.$this->apellido_materno;
	}
}
