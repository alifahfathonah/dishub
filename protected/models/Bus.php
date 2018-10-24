<?php

/**
 * This is the model class for table "bus".
 *
 * The followings are the available columns in table 'bus':
 * @property string $nopolisi
 * @property string $po_id
 * @property string $nokps
 * @property string $nostuk
 * @property string $tgluji
 * @property string $merk
 * @property string $tipe
 * @property string $thnbuat
 * @property string $nochasis
 * @property string $nomesin
 * @property string $nolambung
 * @property integer $duduk
 * @property double $barang
 * @property string $trayek_id
 * @property string $spk
 * @property string $cetak
 * @property string $tglkps
 * @property string $status
 * @property string $jnsangkutan_id
 * @property string $tglupdate
 * @property string $kps
 */
class Bus extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bus the static model class
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
		return 'bus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nopolisi,merk,po_id,trayek_id', 'required'),
			array('nopolisi', 'unique'),
			array('duduk', 'numerical', 'integerOnly'=>true),
			array('barang', 'numerical','integerOnly'=>true),
			array('nopolisi', 'length', 'max'=>10),
			array('po_id, thnbuat', 'length', 'max'=>4),
			array('nokps', 'length', 'max'=>16),
			array('nostuk', 'length', 'max'=>13),
			array('merk', 'length', 'max'=>25),
			array('tipe, trayek_id', 'length', 'max'=>12),
			array('nochasis, nomesin', 'length', 'max'=>30),
			array('nolambung', 'length', 'max'=>5),
			array('spk, cetak, status, jnsangkutan_id, kps', 'length', 'max'=>1),
			array('tgluji, tglkps, tglupdate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nopolisi, po_id, nokps, nostuk, tgluji, merk, tipe, thnbuat, nochasis, nomesin, nolambung, duduk, barang, trayek_id, spk, cetak, tglkps, status, jnsangkutan_id, tglupdate, kps', 'safe', 'on'=>'search'),
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
		   'trayek'=>array(self::BELONGS_TO, 'Trayek','trayek_id','joinType'=>'LEFT JOIN',),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nopolisi' => 'No Polisi',
			'po_id' => 'PO',
			'nokps' => 'No KPS',
			'nostuk' => 'No Stuk',
			'tgluji' => 'Tgl Uji',
			'merk' => 'Merk',
			'tipe' => 'Tipe',
			'thnbuat' => 'Thn Pembuatan',
			'nochasis' => 'No Chasis',
			'nomesin' => 'No Mesin',
			'nolambung' => 'No Lambung',
			'duduk' => 'Jumlah Duduk',
			'barang' => 'Barang',
			'trayek_id' => 'Trayek',
			'spk' => 'SPK',
			'cetak' => 'Cetak',
			'tglkps' => 'Tgl KPS',
			'status' => 'Status',
			'jnsangkutan_id' => 'Jns Angkutan',
			'tglupdate' => 'Tgl Update',
			'kps' => 'KPS',
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

		$criteria->compare('nopolisi',$this->nopolisi,true);
		$criteria->compare('po_id',$this->po_id,true);
		$criteria->compare('nokps',$this->nokps,true);
		$criteria->compare('nostuk',$this->nostuk,true);
		$criteria->compare('tgluji',$this->tgluji,true);
		$criteria->compare('merk',$this->merk,true);
		$criteria->compare('tipe',$this->tipe,true);
		$criteria->compare('thnbuat',$this->thnbuat,true);
		$criteria->compare('nochasis',$this->nochasis,true);
		$criteria->compare('nomesin',$this->nomesin,true);
		$criteria->compare('nolambung',$this->nolambung,true);
		$criteria->compare('duduk',$this->duduk);
		$criteria->compare('barang',$this->barang);
		$criteria->compare('trayek_id',$this->trayek_id,true);
		$criteria->compare('spk',$this->spk,true);
		$criteria->compare('cetak',$this->cetak,true);
		$criteria->compare('tglkps',$this->tglkps,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('jnsangkutan_id',$this->jnsangkutan_id,true);
		$criteria->compare('tglupdate',$this->tglupdate,true);
		$criteria->compare('kps',$this->kps,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
                  'pageSize'=>30                 
			    ),
		));
	}
	
	public function search01()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('nopolisi',$this->nopolisi,true);
		$criteria->compare('po_id',$this->po_id,true);
		$criteria->compare('nokps',$this->nokps,true);
		$criteria->compare('nostuk',$this->nostuk,true);
		$criteria->compare('tgluji',$this->tgluji,true);
		$criteria->compare('merk',$this->merk,true);
		$criteria->compare('tipe',$this->tipe,true);
		$criteria->compare('thnbuat',$this->thnbuat,true);
		$criteria->compare('nochasis',$this->nochasis,true);
		$criteria->compare('nomesin',$this->nomesin,true);
		$criteria->compare('nolambung',$this->nolambung,true);
		$criteria->compare('duduk',$this->duduk);
		$criteria->compare('barang',$this->barang);
		$criteria->compare('trayek_id',$this->trayek_id,true);
		$criteria->compare('spk',$this->spk,true);
		$criteria->compare('cetak',$this->cetak,true);
		$criteria->compare('tglkps',$this->tglkps,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('jnsangkutan_id',$this->jnsangkutan_id,true);
		$criteria->compare('tglupdate',$this->tglupdate,true);
		$criteria->compare('kps',$this->kps,true);
		 $criteria->addSearchCondition('`trayek`.`jnstrayek_id`',1,false);
		$criteria->with=array('trayek');
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
                  'pageSize'=>30                 
			    ),
		));
	}
	
	public function search02()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('nopolisi',$this->nopolisi,true);
		$criteria->compare('po_id',$this->po_id,true);
		$criteria->compare('nokps',$this->nokps,true);
		$criteria->compare('nostuk',$this->nostuk,true);
		$criteria->compare('tgluji',$this->tgluji,true);
		$criteria->compare('merk',$this->merk,true);
		$criteria->compare('tipe',$this->tipe,true);
		$criteria->compare('thnbuat',$this->thnbuat,true);
		$criteria->compare('nochasis',$this->nochasis,true);
		$criteria->compare('nomesin',$this->nomesin,true);
		$criteria->compare('nolambung',$this->nolambung,true);
		$criteria->compare('duduk',$this->duduk);
		$criteria->compare('barang',$this->barang);
		$criteria->compare('trayek_id',$this->trayek_id,true);
		$criteria->compare('spk',$this->spk,true);
		$criteria->compare('cetak',$this->cetak,true);
		$criteria->compare('tglkps',$this->tglkps,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('jnsangkutan_id',$this->jnsangkutan_id,true);
		$criteria->compare('tglupdate',$this->tglupdate,true);
		$criteria->compare('kps',$this->kps,true);
		 $criteria->addSearchCondition('`trayek`.`jnstrayek_id`',2,false);
		$criteria->with=array('trayek');
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
                  'pageSize'=>30                 
			    ),
		));
	}
}