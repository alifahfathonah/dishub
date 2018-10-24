<?php

/**
 * This is the model class for table "trayekakdp".
 *
 * The followings are the available columns in table 'trayekakdp':
 * @property string $id
 * @property string $nama
 * @property string $awal_id
 * @property string $akhir_id
 * @property string $gruptrayekakdp_id
 * @property double $jarak
 * @property double $tambah
 * @property string $jnslayantrayek_id
 * @property string $ket
 * @property string $namafile
 */
class Trayekakdp extends CActiveRecord
{
	public $tmpnamafile="";
	public $tarifdasar=0;
	public $tarifbawah=0;
	public $tarifatas=0;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Trayekakdp the static model class
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
		return 'trayekakdp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id,nama,gruptrayekakdp_id', 'required'),
			array('id','unique'),
			array('jarak, tambah', 'numerical'),
			array('id', 'length', 'max'=>8),
			array('nama', 'length', 'max'=>200),
			array('awal_id, akhir_id', 'length', 'max'=>3),
			array('gruptrayekakdp_id', 'length', 'max'=>6),
			array('jnslayantrayek_id', 'length', 'max'=>2),
			array('ket', 'length', 'max'=>100),
			array('namafile', 'file', 'types'=>'jpg','allowEmpty'=>true,
			      'maxSize'=>15000000,
				  'tooLarge'=>'Ukuran file tidak boleh melebihi 15 Mb. Upload file dengan ukuran yang lebih kecil.'),

			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama, awal_id, akhir_id, gruptrayekakdp_id, jarak, tambah, jnslayantrayek_id, ket, namafile', 'safe', 'on'=>'search'),
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
			'awal_id' => 'Terminal Awal',
			'akhir_id' => 'Terminal Akhir',
			'gruptrayekakdp_id' => 'Grup Trayek AKDP',
			'jarak' => 'Jarak',
			'tambah' => 'Tambah',
			'jnslayantrayek_id' => 'Jns Layanan Trayek',
			'ket' => 'Keterangan',
			'namafile' => 'Nama File Peta',
			'taridasar' => 'Tarif Dasar Rp.',
			'taribawah' => 'Tarif Bawah Rp.',
			'tariatas' => 'Tarif Atas Rp.',
		);
	}

	public function beforeSave() 
	{  if ($this->isNewRecord)
          {  
			 
		  }
	    
	   $this->nama = strtoupper($this->nama);	
       
       return parent::beforeSave();
    }
	
	
	public function getTarifdasar ($id)
    {   $thn = (int) date("Y");
        $tarif=Tarifangkutan::model()->findByAttributes(array('jnstrayek_id'=>$id,'tahun'=>$thn));
		//TRAYEK.TRAYEK_JARAK * 110 + 60 + TRAYEK_TAMBAH
		$tarifdasar = $this->jarak*$tarif->tarifdasar+60+$this->tambah;
 		return $tarifdasar;
    }
	
	public function getTarifbawah ($id)
    {   $thn = (int) date("Y");
        $tarif=Tarifangkutan::model()->findByAttributes(array('jnstrayek_id'=>$id,'tahun'=>$thn));
		//TRAYEK.TRAYEK_JARAK * 110 + 60 + TRAYEK_TAMBAH
		$tarifdasar = $this->jarak*$tarif->tarifbawah+60+$this->tambah;
 		return $tarifdasar;
    }
	
	public function getTarifatas ($id)
    {   $thn = (int) date("Y");
        $tarif=Tarifangkutan::model()->findByAttributes(array('jnstrayek_id'=>$id,'tahun'=>$thn));
		//TRAYEK.TRAYEK_JARAK * 110 + 60 + TRAYEK_TAMBAH
		$tarifdasar = $this->jarak*$tarif->tarifatas+60+$this->tambah;
 		return $tarifdasar;
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
		$criteria->compare('awal_id',$this->awal_id,true);
		$criteria->compare('akhir_id',$this->akhir_id,true);
		$criteria->compare('gruptrayekakdp_id',$this->gruptrayekakdp_id,true);
		$criteria->compare('jarak',$this->jarak);
		$criteria->compare('tambah',$this->tambah);
		$criteria->compare('jnslayantrayek_id',$this->jnslayantrayek_id,true);
		$criteria->compare('ket',$this->ket,true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}