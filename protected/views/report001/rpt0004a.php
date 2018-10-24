<?php
/* **/
    $stdir = Yii::app()->basePath.'/extensions/';
	define('FPDF_FONTPATH',$stdir.'fpdf/font/');
	require($stdir.'fpdf/fpdf.php');
	ob_clean();
	$pdf=new FPDF('p','mm','A4');
    $title='LAPORAN DATA BUS DARI PO PER TRAYEK ';
    $pdf->SetTitle($title);

	
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
	        $pdf->Image($stfilename,175,9,18,18,'jpg');
		 }		
	
	$pdf->Cell(180,5,'PEMERINTAH PROVINSI JAWA TIMUR ',0,0,'C');
	$pdf->Ln(); 
	$pdf->Cell(180,5,'DINAS PERHUBUNGAN DAN LALU LINTAS JALAN ',0,0,'C');
	$pdf->Ln(); 
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(180,8,'LAPORAN DATA BUS DARI PO PER TRAYEK ',0,0,'C');
	$pdf->Ln();  
	$pdf->Ln();  
	
	
	/**/
	
	 
	$trayeks = Yii::app()->db->createCommand()
                ->select('a.id,a.nama')
                ->from('trayek a')
                ->where('a.gruptrayek_id="'.$gruptrayek_id.'" and jnstrayek_id=1')
				->order('a.id')
                ->queryAll();
	
	/* 	**/
	$pdf->SetFont('Arial','B',9);
	$pdf->Cell(18,4,'TRAYEK : ',0,0,'L');
	$pdf->SetFont('Arial','',8);
	foreach ($trayeks as $trayek)
        {  $pdf->Cell(20,4,$trayek["id"],0,0,'L');
		   $pdf->Cell(400,4,$trayek["nama"],0,0,'L');
		   $pdf->Ln(); $pdf->Cell(18,4,'',0,0,'L');
		   
        }		
	$pdf->Ln();
	$buses = Yii::app()->db->createCommand()
                ->select('a.trayek_id,a.po_id, a.nopolisi,a.nostuk,a.duduk, b.gruptrayek_id, b.jnslayantrayek_id')
                ->from('bus a')
				->join('trayek b', 'a.trayek_id=b.id')
                ->where('b.gruptrayek_id="'.$gruptrayek_id.'" and jnstrayek_id=1')
				->order('a.po_id,a.trayek_id,a.nostuk')
                ->queryAll();
    $header = array('No','Nama Perusahaan (PO)','Trayek','No','No. Polisi','No. STUK','Kapasitas','Jns Layanan');
	$w=array(8,62,20,8,16,43,14,17);
	for($i=0;$i<count($header);$i++)
                     $pdf->Cell($w[$i],5,$header[$i],1,0,'C');
    $pdf->Ln();
	$pdf->SetFont('Arial','',7);
    $nourut = 0;
	$jml =0;
	$po_id='';
	$trayek_id='';
	$nourutbus=0;
	$jmlbus =0;
	foreach ($buses as $bus)
        {  
		   
		   
		   if ( strcmp($po_id,$bus["po_id"])==!0)
		      { 
			      $nourutbus=$nourutbus+1;
				  $pdf->Cell($w[0],8,$nourutbus,1,0,'R');
		          $pdf->Cell($w[1],8,Po::model()->findByPk($bus["po_id"])->nama,1,0,'L');
				  $po_id=$bus["po_id"];
				  $trayek_id = '';
			      $nourut = 0;	  
		      }
           else
		      {   $pdf->Cell($w[0],8,'',1,0,'R');
		          $pdf->Cell($w[1],8,'',1,0,'L');
              }
  			  
		   if ( strcmp($trayek_id,$bus["trayek_id"])==!0)
		      {
		         $pdf->Cell($w[2],8,$bus["trayek_id"],1,0,'L');
				 $trayek_id = $bus["trayek_id"];
			  }
           else
 		      {
		         $pdf->Cell($w[2],8,'',1,0,'L');
			  }
			  
		   $nourut = $nourut+1;
		   $pdf->Cell($w[3],8,$nourut,1,0,'R');
		   $pdf->Cell($w[4],8,$bus["nopolisi"],1,0,'L');
		   $pdf->Cell($w[5],8,$bus["nostuk"],1,0,'L');
		   $pdf->Cell($w[6],8,$bus["duduk"],1,0,'R');
		   $pdf->Cell($w[7],8,Jnslayantrayek::model()->findByPk($bus["jnslayantrayek_id"])->nama,1,0,'L');
		   $pdf->Ln();
		   $jml=$jml+$bus["duduk"];
		   $jmlbus =$jmlbus+1;
        }	     	
	$pdf->SetFont('Arial','B',7);
	$pdf->Cell($w[0]+$w[1]+$w[2],8,'Jumlah BUS',0,0,'R');
	$pdf->Cell($w[3],8,$jmlbus,0,0,'R');
	$pdf->Cell($w[4]+$w[5],8,'Jumlah',0,0,'R');
	$pdf->Cell($w[6],8,$jml,0,0,'R');
	$pdf->Cell($w[7],8,'Orang',0,0,'L');
	$pdf->Ln();
	$mydate = date("Ymdhns").'.pdf';
	$pdf->Output('LPR0004_'.$mydate,'D');
	/* **/
?>	