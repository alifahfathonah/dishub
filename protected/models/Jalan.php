<?php

/**
 * This is the model class for table "jalan".
 *
 * The followings are the available columns in table 'jalan':
 * @property string $id
 * @property string $nama
 * @property string $jalanruas_id
 * @property string $subruas
 * @property double $panjang
 * @property double $lebar
 * @property string $kab_id
 * @property string $tipejalan_id
 * @property double $jalur
 * @property double $lajur
 * @property double $median
 * @property double $hambatan
 * @property double $kapasitas
 * @property double $palawal
 * @property double $palakhir
 * @property double $bpjkab_id
 * @property double $fungsijalan_id
 * @property string $jalankelas
 * @property double $alinyemen_id
 * @property double $jnsjalan_id
 */
class Jalan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Jalan the static model class
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
		return 'jalan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('panjang, lebar, jalur, lajur, median, hambatan, kapasitas, palawal, palakhir, bpjkab_id, fungsijalan_id, alinyemen_id, jnsjalan_id', 'numerical'),
			array('id', 'length', 'max'=>8),
			array('nama', 'length', 'max'=>100),
			array('jalanruas_id', 'length', 'max'=>3),
			array('subruas, jalankelas', 'length', 'max'=>10),
			array('kab_id', 'length', 'max'=>4),
			array('tipejalan_id', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama, jalanruas_id, subruas, panjang, lebar, kab_id, tipejalan_id, jalur, lajur, median, hambatan, kapasitas, palawal, palakhir, bpjkab_id, fungsijalan_id, jalankelas, alinyemen_id, jnsjalan_id', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'nama' => 'Nama',
			'jalanruas_id' => 'Jalanruas',
			'subruas' => 'Subruas',
			'panjang' => 'Panjang',
			'lebar' => 'Lebar',
			'kab_id' => 'Kab',
			'tipejalan_id' => 'Tipejalan',
			'jalur' => 'Jalur',
			'lajur' => 'Lajur',
			'median' => 'Median',
			'hambatan' => 'Hambatan',
			'kapasitas' => 'Kapasitas',
			'palawal' => 'Palawal',
			'palakhir' => 'Palakhir',
			'bpjkab_id' => 'Bpjkab',
			'fungsijalan_id' => 'Fungsijalan',
			'jalankelas' => 'Jalankelas',
			'alinyemen_id' => 'Alinyemen',
			'jnsjalan_id' => 'Jnsjalan',
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
		$criteria->compare('jalanruas_id',$this->jalanruas_id,true);
		$criteria->compare('subruas',$this->subruas,true);
		$criteria->compare('panjang',$this->panjang);
		$criteria->compare('lebar',$this->lebar);
		$criteria->compare('kab_id',$this->kab_id,true);
		$criteria->compare('tipejalan_id',$this->tipejalan_id,true);
		$criteria->compare('jalur',$this->jalur);
		$criteria->compare('lajur',$this->lajur);
		$criteria->compare('median',$this->median);
		$criteria->compare('hambatan',$this->hambatan);
		$criteria->compare('kapasitas',$this->kapasitas);
		$criteria->compare('palawal',$this->palawal);
		$criteria->compare('palakhir',$this->palakhir);
		$criteria->compare('bpjkab_id',$this->bpjkab_id);
		$criteria->compare('fungsijalan_id',$this->fungsijalan_id);
		$criteria->compare('jalankelas',$this->jalankelas,true);
		$criteria->compare('alinyemen_id',$this->alinyemen_id);
		$criteria->compare('jnsjalan_id',$this->jnsjalan_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}