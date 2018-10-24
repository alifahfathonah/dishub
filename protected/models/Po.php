<?php

/**
 * This is the model class for table "po".
 *
 * The followings are the available columns in table 'po':
 * @property string $id
 * @property string $nama
 * @property string $alamat
 * @property integer $provinsi_id
 * @property integer $kabupaten_id
 * @property string $telp
 * @property string $tglberdiri
 * @property string $namapemilik
 * @property string $nowni
 * @property string $kotawni
 * @property string $nogantinama
 * @property string $kotagantinama
 * @property integer $bbh_id
 * @property string $nonotaris
 * @property string $namanotaris
 * @property string $tglakhir
 * @property string $nosk
 * @property string $tglsk
 * @property string $tglkps
 */
class Po extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Po the static model class
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
		return 'po';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id,nama,provinsi_id,kabupaten_id,bbh_id,namapemilik', 'required'),
			array('id', 'unique'),
			array('provinsi_id, kabupaten_id, bbh_id', 'numerical', 'integerOnly'=>true),
			array('id', 'length', 'max'=>4),
			array('nama, alamat, telp, namapemilik, nowni, kotawni, nogantinama, kotagantinama, nonotaris, namanotaris, nosk', 'length', 'max'=>50),
			array('tglberdiri, tglakhir, tglsk, tglkps', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama, alamat, provinsi_id, kabupaten_id, telp, tglberdiri, namapemilik, nowni, kotawni, nogantinama, kotagantinama, bbh_id, nonotaris, namanotaris, tglakhir, nosk, tglsk, tglkps', 'safe', 'on'=>'search'),
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

	public function beforeSave() 
	{  $this->nama = strtoupper($this->nama);	     	   
       $this->alamat = strtoupper($this->alamat);
	   $this->namapemilik = strtoupper($this->namapemilik);
	   $this->kotagantinama = strtoupper($this->kotagantinama);
	   return parent::beforeSave();
    }
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'provinsi_id' => 'Provinsi',
			'kabupaten_id' => 'Kabupaten',
			'telp' => 'No. Telepon',
			'tglberdiri' => 'Tgl Berdiri',
			'namapemilik' => 'Nama Pemilik',
			'nowni' => 'No WNI',
			'kotawni' => 'Kota WNI',
			'nogantinama' => 'No Ganti Nama',
			'kotagantinama' => 'Kota Ganti Nama',
			'bbh_id' => 'Bentuk Badan Usaha',
			'nonotaris' => 'No. Notaris',
			'namanotaris' => 'Nama Notaris',
			'tglakhir' => 'Tgl Akhir',
			'nosk' => 'No. SK',
			'tglsk' => 'Tgl SK',
			'tglkps' => 'Tgl KPS',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('provinsi_id',$this->provinsi_id);
		$criteria->compare('kabupaten_id',$this->kabupaten_id);
		$criteria->compare('telp',$this->telp,true);
		$criteria->compare('tglberdiri',$this->tglberdiri,true);
		$criteria->compare('namapemilik',$this->namapemilik,true);
		$criteria->compare('nowni',$this->nowni,true);
		$criteria->compare('kotawni',$this->kotawni,true);
		$criteria->compare('nogantinama',$this->nogantinama,true);
		$criteria->compare('kotagantinama',$this->kotagantinama,true);
		$criteria->compare('bbh_id',$this->bbh_id);
		$criteria->compare('nonotaris',$this->nonotaris,true);
		$criteria->compare('namanotaris',$this->namanotaris,true);
		$criteria->compare('tglakhir',$this->tglakhir,true);
		$criteria->compare('nosk',$this->nosk,true);
		$criteria->compare('tglsk',$this->tglsk,true);
		$criteria->compare('tglkps',$this->tglkps,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}