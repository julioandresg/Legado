<?php

/**
 * This is the model class for table "banda".
 *
 * The followings are the available columns in table 'banda':
 * @property integer $id_banda
 * @property string $nombre
 * @property string $representante
 * @property integer $telefono
 * @property string $correo
 * @property string $genero
 * @property string $website
 * @property string $fanpage
 * @property string $instagram
 * @property string $youtube
 * @property string $eventos
 * @property string $historia
 * @property string $spotify
 * @property string $itunes
 * @property string $soundcloud
 *
 * The followings are the available model relations:
 * @property DetalleBanda[] $detalleBandas
 * @property Disco[] $discos
 * @property RegistroHorario[] $registroHorarios
 */
class Banda extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'banda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, representante, telefono, correo, genero, website, fanpage, instagram, youtube, eventos, historia, spotify, itunes, soundcloud', 'required'),
			array('telefono', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>30),
			array('representante, correo, genero', 'length', 'max'=>50),
			array('website, instagram, youtube', 'length', 'max'=>200),
			array('fanpage', 'length', 'max'=>2100),
			array('eventos', 'length', 'max'=>500),
			array('historia', 'length', 'max'=>1000),
			array('spotify, itunes, soundcloud', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_banda, nombre, representante, telefono, correo, genero, website, fanpage, instagram, youtube, eventos, historia, spotify, itunes, soundcloud', 'safe', 'on'=>'search'),
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
			'detalleBandas' => array(self::HAS_MANY, 'DetalleBanda', 'id_banda'),
			'discos' => array(self::HAS_MANY, 'Disco', 'id_banda'),
			'registroHorarios' => array(self::HAS_MANY, 'RegistroHorario', 'id_banda'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_banda' => 'Id Banda',
			'nombre' => 'Nombre',
			'representante' => 'Representante',
			'telefono' => 'Telefono',
			'correo' => 'Correo',
			'genero' => 'Genero',
			'website' => 'Website',
			'fanpage' => 'Fanpage',
			'instagram' => 'Instagram',
			'youtube' => 'Youtube',
			'eventos' => 'Eventos',
			'historia' => 'Historia',
			'spotify' => 'Spotify',
			'itunes' => 'Itunes',
			'soundcloud' => 'Soundcloud',
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

		$criteria->compare('id_banda',$this->id_banda);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('representante',$this->representante,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('fanpage',$this->fanpage,true);
		$criteria->compare('instagram',$this->instagram,true);
		$criteria->compare('youtube',$this->youtube,true);
		$criteria->compare('eventos',$this->eventos,true);
		$criteria->compare('historia',$this->historia,true);
		$criteria->compare('spotify',$this->spotify,true);
		$criteria->compare('itunes',$this->itunes,true);
		$criteria->compare('soundcloud',$this->soundcloud,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Banda the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
