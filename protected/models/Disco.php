<?php

/**
 * This is the model class for table "disco".
 *
 * The followings are the available columns in table 'disco':
 * @property integer $id_disco
 * @property integer $id_banda
 * @property string $nombre
 * @property string $portada
 * @property string $contraportada
 * @property string $enlace_descarga
 *
 * The followings are the available model relations:
 * @property Canciones[] $canciones
 * @property Banda $idBanda
 */
class Disco extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'disco';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_banda, nombre, portada, contraportada, enlace_descarga', 'required'),
			array('id_banda', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>50),
			array('enlace_descarga', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_disco, id_banda, nombre, portada, contraportada, enlace_descarga', 'safe', 'on'=>'search'),
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
			'canciones' => array(self::HAS_MANY, 'Canciones', 'id_disco'),
			'idBanda' => array(self::BELONGS_TO, 'Banda', 'id_banda'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_disco' => 'Id Disco',
			'id_banda' => 'Id Banda',
			'nombre' => 'Nombre',
			'portada' => 'Portada',
			'contraportada' => 'Contraportada',
			'enlace_descarga' => 'Enlace Descarga',
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

		$criteria->compare('id_disco',$this->id_disco);
		$criteria->compare('id_banda',$this->id_banda);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('portada',$this->portada,true);
		$criteria->compare('contraportada',$this->contraportada,true);
		$criteria->compare('enlace_descarga',$this->enlace_descarga,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Disco the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
