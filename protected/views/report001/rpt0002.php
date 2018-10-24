<?php
    $stdir = Yii::app()->basePath.'/extensions/';
	define('FPDF_FONTPATH',$stdir.'fpdf/font/');
	require($stdir.'fpdf/fpdf.php');
	ob_clean();
	$pdf=new FPDF('l','mm','A4');
    $title='LAPORAN DATA ANGKUTAN';
    $pdf->SetTitle($title);

	

	
     $header = array('No','No Polisi','Merek','Tahun','No. Chasis', 'No. Mesin','No. Lambung','Kapasitas','Barang','Trayek','Jns Angk.');
	$w=array(8,16,25,10,30,30,20,17,13,90,20);
	
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',10);
	$stdir = Yii::app()->basePath;

	$stfilename = $stdir.'/../images/jatim.jpg';
    if (file_exists($stfilename))
	     {  $pdf->Image($stfilename,13,8,16,19,'jpg');
		 }
						
	$stfilename = $stdir.'/../images/dishub.jpg';
	if (file_exists($stfilename))
	     {
	        $pdf->Image($stfilename,260,9,18,18,'jpg');
		 }
	
	$pdf->Cell(270,5,'PEMERINTAH PROVINSI JAWA TIMUR ',0,0,'C');
	$pdf->Ln(); 
	$pdf->Cell(270,5,'DINAS PERHUBUNGAN DAN LALU LINTAS JALAN ',0,0,'C');
	$pdf->Ln(); 
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(270,8,'LAPORAN DATA ARMADA PER PERUSAHAAN OTOBUS (PO) ',0,0,'C');
	$pdf->Ln(); 
	$pdf->SetFont('Arial','B',8);
	for($i=0;$i<count($header);$i++)
      $pdf->Cell($w[$i],10,$header[$i],1,0,'C');
    $pdf->Ln(); 
	 
	
	$armada = Yii::app()->db->createCommand()
                ->select('*')
                ->from('bus a')
                ->join('trayek b', 'a.trayek_id=b.id')
                ->where('b.jnstrayek_id=1')
				->order('a.po_id,a.trayek_id,a.nopolisi')
                ->queryAll();
	$jmlbus = 0;
	$po_id='';
	
	
	$nourut = 0;
	
	foreach ($armada as $bus)
        {
		    $stpo = $bus["po_id"];
			if ( strcmp($po_id,$stpo)==!0)
			   {
			        
					$po_id= $stpo;
                    $namapo=Po::model()->findbyPk($po_id)->nama;
                    $pdf->SetFont('Arial','B',8);
				    $pdf->Cell($w[0],8,'',1,0,'R');
		            $pdf->Cell($w[1]+$w[2]+$w[3]+$w[4]+$w[5]+$w[6]+$w[7]+$w[8]+$w[9]+$w[10],8,$namapo,1,0,'L');
		            
                    $jmlbus = 0;
					$nourut = 0;
					$pdf->Ln(); 				   
			   }
			$nourut = $nourut+1;
			$pdf->SetFont('Arial','B',6);
			$pdf->Cell($w[0],8,$nourut,1,0,'R');
			$pdf->Cell($w[1],8,$bus["nopolisi"],1,0,'L');
			$pdf->Cell($w[2],8,$bus["merk"],1,0,'L');
			$pdf->Cell($w[3],8,$bus["thnbuat"],1,0,'C');
			$pdf->Cell($w[4],8,$bus["nochasis"],1,0,'L');
			$pdf->Cell($w[5],8,$bus["nomesin"],1,0,'L');
			$pdf->Cell($w[6],8,$bus["nolambung"],1,0,'L');
			$pdf->Cell($w[7],8,$bus["duduk"],1,0,'R');
			$pdf->Cell($w[8],8,$bus["barang"],1,0,'R');
			$pdf->Cell($w[9],8,Trayek::model()->findbyPk($bus["trayek_id"])->nama,1,0,'L');
			$pdf->Cell($w[10],8,Jnsangkutan::model()->findbyPk($bus["jnsangkutan_id"])->nama,1,0,'C');
			$pdf->Ln(); 
        }	
	$mydate = date("Ymdhns").'.pdf';
	$pdf->Output('LPR0002_'.$mydate,'D');
	
?>	