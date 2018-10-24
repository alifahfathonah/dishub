<?php

/**
 * This is the model class for table "pengguna".
 *
 * The followings are the available columns in table 'pengguna':
 * @property integer $id
 * @property string $nama
 * @property string $namalengkap
 * @property string $sandi
 * @property integer $tipepengguna_id
 * @property integer $status_id
 */
class Pengguna extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pengguna the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pengguna';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, namalengkap, sandi', 'required'),
			array('nama', 'unique'),
			array('tipepengguna_id, status_id', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>10),
			array('namalengkap', 'length', 'max'=>100),
			array('sandi', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama, namalengkap, sandi, tipepengguna_id, status_id', 'safe', 'on'=>'search'),
		);
	}

	public function beforeSave() 
	{  $this->nama = strtoupper($this->nama);	     	   
       $this->namalengkap = strtoupper($this->namalengkap);
	   $this->sandi = md5($this->sandi);

	   return parent::beforeSave();
    }
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tipepengguna'=>array(self::BELONGS_TO, 'Tipepengguna', 'tipepengguna_id','joinType'=>'JOIN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama' => 'Nama Login',
			'namalengkap' => 'Nama Lengkap',
			'sandi' => 'Sandi',
			'tipepengguna_id' => 'Tipe Pengguna',
			'status_id' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('namalengkap',$this->namalengkap,true);
		$criteria->compare('sandi',$this->sandi,true);
		$criteria->compare('tipepengguna_id',$this->tipepengguna_id);
		$criteria->compare('status_id',$this->status_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}