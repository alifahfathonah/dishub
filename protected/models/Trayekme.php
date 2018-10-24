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
 * @property string $tarifbawah
 * @property string $tarifatas
 * @property integer $kab_id
 */
class Trayekme extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Trayekme the static model class
	 */
	public $dari;
	public $tujuan;
	
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
			array('dari,tujuan', 'required'),
			array('jnslayantrayek_id, jnstrayek_id, kab_id', 'numerical', 'integerOnly'=>true),
			array('jarak, tambah', 'numerical'),
			array('id, gruptrayek_id', 'length', 'max'=>12),
			array('nama', 'length', 'max'=>200),
			array('awal_id, akhir_id, ket', 'length', 'max'=>100),
			array('namafile', 'length', 'max'=>255),
			array('tarifbawah, tarifatas', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('dari,tujuan', 'safe', 'on'=>'search'),
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
			'nama' => 'Nama Trayek',
			'awal_id' => 'Awal',
			'akhir_id' => 'Akhir',
			'gruptrayek_id' => 'Grup Trayek',
			'jarak' => 'Jarak',
			'tambah' => 'Tambah',
			'jnslayantrayek_id' => 'Jns Layan Trayek',
			'ket' => 'Keterangan',
			'namafile' => 'Nama File',
			'jnstrayek_id' => 'Jns Trayek',
			'tarifbawah' => 'Tarif Bawah',
			'tarifatas' => 'Tarif Atas',
			'kab_id' => 'Kabupaten',
			'dari' => 'Dari ',
			'tujuan' => 'Tujuan Ke',
			
		);
	}

	
	
	public function getTarif ($id1,$id2)
    {   $thn = (int) date("Y");
        $tarif=Tarifangkutan::model()->findByAttributes(array('jnstrayek_id'=>$id1,'tahun'=>$thn));
		
		/*if ($id1=="1")
		    {
		
				if ($id2=="1")
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
			}
        else 
            {
			    if ($id2=="1")
				   { 
				       $tarifret = 0;
				   }
				else if ($id2=="2")
				   {   $tarifret = $this->tarifbawah;
				   }
				else if ($id2=="3")
				   {   $tarifret = $this->tarifatas;
				   }
               				   
            }	*/	
        $tarifret=0; 			
 		return $tarifret;
    }
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
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
		$criteria->compare('tarifbawah',$this->tarifbawah,true);
		$criteria->compare('tarifatas',$this->tarifatas,true);
		$criteria->compare('kab_id',$this->kab_id);
		$criteria->compare('dari',$this->dari);
		$criteria->compare('tujuan',$this->tujuan);
		
       	return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.
        
		$criteria=new CDbCriteria;
        if (($this->dari=='') && ($this->tujuan==''))
		   { 
		     $criteria->addCondition('1=2', 'AND'); 
			}
        else 
		   { 
		     $criteria->addCondition('nama like "'.$this->dari.'%"', 'AND');
		      $criteria->addCondition('nama like "%'.$this->tujuan.'%"', 'AND');
           } 		   
		//$criteria->compare('dari',$this->dari);
		//$criteria->compare('tujuan',$this->tujuan);
		
       	return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
                  'pageSize'=>10                 
			    ),
		));
	}
	
}