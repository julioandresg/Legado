<?php

/**
 * This is the model class for table "canciones".
 *
 * The followings are the available columns in table 'canciones':
 * @property integer $id_cancion
 * @property integer $id_disco
 * @property integer $numero_pista
 * @property string $nombre
 * @property string $cancion
 *
 * The followings are the available model relations:
 * @property Disco $idDisco
 */
class Canciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'canciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_disco, numero_pista, nombre, cancion', 'required'),
			array('id_disco, numero_pista', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cancion, id_disco, numero_pista, nombre, cancion', 'safe', 'on'=>'search'),
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
			'idDisco' => array(self::BELONGS_TO, 'Disco', 'id_disco'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cancion' => 'Id Cancion',
			'id_disco' => 'Id Disco',
			'numero_pista' => 'Numero Pista',
			'nombre' => 'Nombre',
			'cancion' => 'Cancion',
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

		$criteria->compare('id_cancion',$this->id_cancion);
		$criteria->compare('id_disco',$this->id_disco);
		$criteria->compare('numero_pista',$this->numero_pista);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('cancion',$this->cancion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Canciones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
