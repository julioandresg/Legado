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
			array('nombre, apellido_paterno, apellido_materno, fecha_nacimiento, run, telefono, correo, especialidad1, especialidad2, user, pass, pass2', 'required'),
			array('telefono','numerical', 'integerOnly' => true,'min'=>200000000,'max'=>999999999),
			array('telefono','length','max'=>9),
			array('nombre', 'length', 'max'=>25),
			array('apellido_paterno, apellido_materno, user', 'length', 'max'=>15),
			array('run', 'length', 'max' => 12),
            array('run','unique','message'=>'Musico ya ha sido ingresado al sistema'),
			array('correo', 'email'),
			array('pass','compare','compareAttribute'=>'pass2','operator'=>'=','message'=>  Yii::t('es', 'Las Contraseñas deben ser iguales.')),
			array('especialidad1, especialidad2', 'length', 'max'=>20),
			array('pass, pass2', 'length', 'max'=>20, 'min'=>6),
            array('user','unique','message'=>'Usuario no disponible, por favor ingrese uno nuevo.'),
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
			'fecha_nacimiento' => 'Fecha de Nacimiento',
			'run' => 'Run',
			'imagen' => 'Imagen de Perfil',
			'telefono' => 'Telefono',
			'correo' => 'Correo',
			'especialidad1' => 'Especialidad1',
			'especialidad2' => 'Especialidad2',
			'user' => 'Usuario',
			'pass' => 'Contraseña',
			'pass2' => 'Repita su contraseña',
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
	public function validateRut($attribute, $params) {
        $data = explode('-', $this->run);
        $evaluate = strrev($data[0]);
        $multiply = 2;
        $store = 0;
        for ($i = 0; $i < strlen($evaluate); $i++) {
            $store += $evaluate[$i] * $multiply;
            $multiply++;
            if ($multiply > 7)
                $multiply = 2;
        }
        isset($data[1]) ? $verifyCode = strtolower($data[1]) : $verifyCode = '';
        $result = 11 - ($store % 11);
        if ($result == 10)
            $result = 'k';
        if ($result == 11)
            $result = 0;
        if ($verifyCode != $result)
            $this->addError('rut', 'Run inválido.');
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
}
