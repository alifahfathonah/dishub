<?php

/**
 * This is the model class for table "mpukpsdaftar".
 *
 * The followings are the available columns in table 'mpukpsdaftar':
 * @property integer $id
 * @property string $nokps
 * @property string $mb_srtkps1
 * @property string $mb_srtkps2
 * @property string $kodedk
 * @property string $nosrtp2t
 * @property string $nama
 * @property string $npwp
 * @property string $noinduk
 * @property string $alamat
 * @property string $kodewil
 * @property string $jenisijinp2t
 * @property string $kodetra
 * @property string $jumlahken
 * @property string $sifatpel
 * @property string $mb_srtp2t1
 * @property string $mb_srtp2t2
 * @property string $tglterbitp2t
 * @property string $ketp2t
 * @property string $nosrtpit
 * @property string $tglditetapkanpit
 * @property string $nopol
 * @property string $nouji
 * @property string $mb_uji1
 * @property string $mb_uji2
 * @property string $merk
 * @property string $thnken
 * @property string $kaporg
 * @property string $kapbrg
 * @property string $idpjbtprop
 * @property string $nokwi
 * @property string $retribusi
 * @property string $pelunasan
 * @property string $tglentry
 * @property string $kodeuser
 * @property string $statusdata
 * @property string $statuscetak
 * @property string $NAMATRA
 * @property string $NAMAWIL
 */
class Mpukpsdaftar extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Mpukpsdaftar the static model class
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
		return 'mpukpsdaftar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'numerical', 'integerOnly'=>true),
			array('nokps', 'length', 'max'=>11),
			array('kodedk, kodewil, idpjbtprop', 'length', 'max'=>2),
			array('nosrtp2t, npwp, noinduk, nosrtpit', 'length', 'max'=>25),
			array('nama', 'length', 'max'=>50),
			array('alamat, jenisijinp2t, ketp2t, NAMATRA', 'length', 'max'=>100),
			array('kodetra', 'length', 'max'=>6),
			array('jumlahken, kaporg', 'length', 'max'=>3),
			array('sifatpel', 'length', 'max'=>20),
			array('nopol, nouji, merk, nokwi, retribusi, pelunasan, NAMAWIL', 'length', 'max'=>15),
			array('thnken, kapbrg', 'length', 'max'=>4),
			array('kodeuser', 'length', 'max'=>5),
			array('statusdata, statuscetak', 'length', 'max'=>1),
			array('mb_srtkps1, mb_srtkps2, mb_srtp2t1, mb_srtp2t2, tglterbitp2t, tglditetapkanpit, mb_uji1, mb_uji2, tglentry', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nokps, mb_srtkps1, mb_srtkps2, kodedk, nosrtp2t, nama, npwp, noinduk, alamat, kodewil, jenisijinp2t, kodetra, jumlahken, sifatpel, mb_srtp2t1, mb_srtp2t2, tglterbitp2t, ketp2t, nosrtpit, tglditetapkanpit, nopol, nouji, mb_uji1, mb_uji2, merk, thnken, kaporg, kapbrg, idpjbtprop, nokwi, retribusi, pelunasan, tglentry, kodeuser, statusdata, statuscetak, NAMATRA, NAMAWIL', 'safe', 'on'=>'search'),
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
			'nokps' => 'Nokps',
			'mb_srtkps1' => 'Mb Srtkps1',
			'mb_srtkps2' => 'Mb Srtkps2',
			'kodedk' => 'Kodedk',
			'nosrtp2t' => 'Nosrtp2t',
			'nama' => 'Nama',
			'npwp' => 'Npwp',
			'noinduk' => 'Noinduk',
			'alamat' => 'Alamat',
			'kodewil' => 'Kodewil',
			'jenisijinp2t' => 'Jenisijinp2t',
			'kodetra' => 'Kodetra',
			'jumlahken' => 'Jumlahken',
			'sifatpel' => 'Sifatpel',
			'mb_srtp2t1' => 'Mb Srtp2t1',
			'mb_srtp2t2' => 'Mb Srtp2t2',
			'tglterbitp2t' => 'Tglterbitp2t',
			'ketp2t' => 'Ketp2t',
			'nosrtpit' => 'Nosrtpit',
			'tglditetapkanpit' => 'Tglditetapkanpit',
			'nopol' => 'Nopol',
			'nouji' => 'Nouji',
			'mb_uji1' => 'Mb Uji1',
			'mb_uji2' => 'Mb Uji2',
			'merk' => 'Merk',
			'thnken' => 'Thnken',
			'kaporg' => 'Kaporg',
			'kapbrg' => 'Kapbrg',
			'idpjbtprop' => 'Idpjbtprop',
			'nokwi' => 'Nokwi',
			'retribusi' => 'Retribusi',
			'pelunasan' => 'Pelunasan',
			'tglentry' => 'Tglentry',
			'kodeuser' => 'Kodeuser',
			'statusdata' => 'Statusdata',
			'statuscetak' => 'Statuscetak',
			'NAMATRA' => 'Namatra',
			'NAMAWIL' => 'Namawil',
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
		$criteria->compare('nokps',$this->nokps,true);
		$criteria->compare('mb_srtkps1',$this->mb_srtkps1,true);
		$criteria->compare('mb_srtkps2',$this->mb_srtkps2,true);
		$criteria->compare('kodedk',$this->kodedk,true);
		$criteria->compare('nosrtp2t',$this->nosrtp2t,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('npwp',$this->npwp,true);
		$criteria->compare('noinduk',$this->noinduk,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('kodewil',$this->kodewil,true);
		$criteria->compare('jenisijinp2t',$this->jenisijinp2t,true);
		$criteria->compare('kodetra',$this->kodetra,true);
		$criteria->compare('jumlahken',$this->jumlahken,true);
		$criteria->compare('sifatpel',$this->sifatpel,true);
		$criteria->compare('mb_srtp2t1',$this->mb_srtp2t1,true);
		$criteria->compare('mb_srtp2t2',$this->mb_srtp2t2,true);
		$criteria->compare('tglterbitp2t',$this->tglterbitp2t,true);
		$criteria->compare('ketp2t',$this->ketp2t,true);
		$criteria->compare('nosrtpit',$this->nosrtpit,true);
		$criteria->compare('tglditetapkanpit',$this->tglditetapkanpit,true);
		$criteria->compare('nopol',$this->nopol,true);
		$criteria->compare('nouji',$this->nouji,true);
		$criteria->compare('mb_uji1',$this->mb_uji1,true);
		$criteria->compare('mb_uji2',$this->mb_uji2,true);
		$criteria->compare('merk',$this->merk,true);
		$criteria->compare('thnken',$this->thnken,true);
		$criteria->compare('kaporg',$this->kaporg,true);
		$criteria->compare('kapbrg',$this->kapbrg,true);
		$criteria->compare('idpjbtprop',$this->idpjbtprop,true);
		$criteria->compare('nokwi',$this->nokwi,true);
		$criteria->compare('retribusi',$this->retribusi,true);
		$criteria->compare('pelunasan',$this->pelunasan,true);
		$criteria->compare('tglentry',$this->tglentry,true);
		$criteria->compare('kodeuser',$this->kodeuser,true);
		$criteria->compare('statusdata',$this->statusdata,true);
		$criteria->compare('statuscetak',$this->statuscetak,true);
		$criteria->compare('NAMATRA',$this->NAMATRA,true);
		$criteria->compare('NAMAWIL',$this->NAMAWIL,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}