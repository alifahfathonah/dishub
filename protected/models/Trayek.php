<?php

/**
 * This is the model class for table "trayek".
 *
 * The followings are the available columns in table 'trayek':
 * @property string $id
 * @property string $nama
 * @property string $awal_id
 * @property string $akhir_id
 * @property string $gruptrayek_id
 * @property double $jarak
 * @property double $tambah
 * @property integer $jnslayantrayek_id
 * @property string $ket
 * @property string $namafile
 * @property integer $jnstrayek_id
 */
class Trayek extends CActiveRecord
{
	public $tmpnamafile="";
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Trayek the static model class
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
		return 'trayek';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id,nama,gruptrayek_id', 'required'),
			array('id','unique'),
			array('jnslayantrayek_id, jnstrayek_id', 'numerical', 'integerOnly'=>true),
			array('jarak, tambah,tarifbawah,tarifatas', 'numerical'),
			array('id', 'length', 'max'=>12),
			array('nama', 'length', 'max'=>200),
			array('awal_id, akhir_id', 'length', 'max'=>100),
			array('gruptrayek_id', 'length', 'max'=>12),
			array('ket', 'length', 'max'=>100),
			array('namafile', 'length', 'max'=>255),
			array('namafile', 'file', 'types'=>'jpg','allowEmpty'=>true,
			      'maxSize'=>15000000,
				  'tooLarge'=>'Ukuran file tidak boleh melebihi 15 Mb. Upload file dengan ukuran yang lebih kecil.'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama, awal_id, akhir_id, gruptrayek_id, jarak, tambah, jnslayantrayek_id, ket, namafile, jnstrayek_id', 'safe', 'on'=>'search'),
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
       
       return parent::beforeSave();
    }
	
	
	public function getTarif ($id1,$id2)
    {   $thn = (int) date("Y");
        $tarif=Tarifangkutan::model()->findByAttributes(array('jnstrayek_id'=>$id1,'tahun'=>$thn));
		
		/*if ($id2=="1")
		    {
		       $tarifret = $this->jarak*$tarif->tarifdasar+60+$this->tambah;
			}
		else if ($id2=="2")
		    {
		       $tarifret = $this->jarak*$tarif->tarifbawah+60+$this->tambah;
			}
        else if ($id2=="3")
		    {
		       $tarifret = $this->jarak*$tarif->tarifatas+60+$this->tambah;
			}				
 		return $tarifret; */
    }
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama' => 'Nama Trayek',
			'awal_id' => 'Terminal  Awal',
			'akhir_id' => 'Terminal  Akhir',
			'gruptrayek_id' => 'Grup Trayek',
			'jarak' => 'Jarak',
			'tambah' => 'Tambah',
			'jnslayantrayek_id' => 'Jns Layan Trayek',
			'ket' => 'Keterangan',
			'namafile' => 'Nama File',
			'jnstrayek_id' => 'Jns Trayek',
			'tarifbawah' => 'Tarif Bawah',
			'tarifatas' => 'Tarif Atas',
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
		$criteria->compare('awal_id',$this->awal_id,true);
		$criteria->compare('akhir_id',$this->akhir_id,true);
		$criteria->compare('gruptrayek_id',$this->gruptrayek_id,true);
		$criteria->compare('jarak',$this->jarak);
		$criteria->compare('tambah',$this->tambah);
		$criteria->compare('jnslayantrayek_id',$this->jnslayantrayek_id);
		$criteria->compare('ket',$this->ket,true);
		$criteria->compare('namafile',$this->namafile,true);
		$criteria->compare('jnstrayek_id',$this->jnstrayek_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	public function search01()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('awal_id',$this->awal_id,true);
		$criteria->compare('akhir_id',$this->akhir_id,true);
		$criteria->compare('gruptrayek_id',$this->gruptrayek_id,true);
		$criteria->compare('jarak',$this->jarak);
		$criteria->compare('tambah',$this->tambah);
		$criteria->compare('jnslayantrayek_id',$this->jnslayantrayek_id);
		$criteria->compare('ket',$this->ket,true);
		$criteria->compare('namafile',$this->namafile,true);
		$criteria->compare('jnstrayek_id',$this->jnstrayek_id);
		$criteria->addSearchCondition('jnstrayek_id',1,false);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
                  'pageSize'=>20                 
			    ),
		));
	}
	
	public function search02()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('awal_id',$this->awal_id,true);
		$criteria->compare('akhir_id',$this->akhir_id,true);
		$criteria->compare('gruptrayek_id',$this->gruptrayek_id,true);
		$criteria->compare('jarak',$this->jarak);
		$criteria->compare('tambah',$this->tambah);
		$criteria->compare('jnslayantrayek_id',$this->jnslayantrayek_id);
		$criteria->compare('ket',$this->ket,true);
		$criteria->compare('namafile',$this->namafile,true);
		$criteria->compare('jnstrayek_id',$this->jnstrayek_id);
		$criteria->addSearchCondition('jnstrayek_id',2,false);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
                  'pageSize'=>20                 
			    ),
		));
	}
	
	
	public function search03()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('awal_id',$this->awal_id,true);
		$criteria->compare('akhir_id',$this->akhir_id,true);
		$criteria->compare('gruptrayek_id',$this->gruptrayek_id,true);
		$criteria->compare('jarak',$this->jarak);
		$criteria->compare('tambah',$this->tambah);
		$criteria->compare('jnslayantrayek_id',$this->jnslayantrayek_id);
		$criteria->compare('ket',$this->ket,true);
		$criteria->compare('namafile',$this->namafile,true);
		$criteria->compare('jnstrayek_id',$this->jnstrayek_id);
		$criteria->addSearchCondition('jnstrayek_id',3,false);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
                  'pageSize'=>20                 
			    ),
		));
	}
}