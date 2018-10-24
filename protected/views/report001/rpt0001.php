<?php
    $stdir = Yii::app()->basePath.'/extensions/';
	define('FPDF_FONTPATH',$stdir.'fpdf/font/');
	require($stdir.'fpdf/fpdf.php');
	ob_clean();
	$pdf=new FPDF('p','mm','A4');
    $title='LAPORAN DATA ARMADA PER PERUSAHAAN OTOBUS (PO)';
    $pdf->SetTitle($title);

	

	$header = array('No','Kode Trayek','Trayek','Nama PO','Jumlah Armada');
	$w=array(8,20,40,90,30);
	
	 
	$armada = Yii::app()->db->createCommand()
                ->select('a.trayek_id,a.po_id, count(a.nopolisi) as jumlah')
                ->from('bus a')
                ->join('trayek b', 'a.trayek_id=b.id')
                ->where('b.jnstrayek_id=1')
				->group('a.trayek_id,a.po_id')
				->order('a.trayek_id,a.po_id')
                ->queryAll();
	$jmlbus = 0;
	$trayek_id='';
	
	foreach ($armada as $ar)
	     {
		    $sttrayek = $ar["trayek_id"];
			if ( strcmp($trayek_id,$sttrayek)==!0)
			   { 
			       
				   if ($trayek_id=="")
				      { 
					      
                          $pdf->AddPage();
						  $pdf->SetFont('Arial','B',10);
				//$pdf->Cell(30);
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
	                      $pdf->Cell(180,8,'LAPORAN DATA ARMADA PER PERUSAHAAN OTOBUS (PO) ',0,0,'C');
	                      $pdf->Ln(); 
					      $pdf->SetFont('Arial','B',8);
	                      for($i=0;$i<count($header);$i++)
                               $pdf->Cell($w[$i],5,$header[$i],1,0,'C');
                            $pdf->Ln();
				      	  } 
                    else
                        {	
                          $pdf->SetFont('Arial','B',8);
					      $pdf->Cell($w[0],8,'',1,0,'R');
		                  $pdf->Cell($w[1]+$w[2]+$w[3],8,'JUMLAH BUS',1,0,'R');
		                  $pdf->Cell($w[4],8,$jmlbus,1,0,'R'); 	
                          
					      $pdf->Ln();						
					    }
                    
					$trayek_id= $sttrayek;
                    $namatrayek=Trayek::model()->findbyPk($ar["trayek_id"])->nama;
                    $pdf->SetFont('Arial','B',8);
					$pdf->Cell($w[0],8,'',1,0,'R');
		            $pdf->Cell($w[1],8,$sttrayek,1,0,'L');
		            $pdf->Cell($w[2]+$w[3]+$w[4],8,$namatrayek,1,0,'L'); 	
                    $jmlbus = 0;
					$nourut = 0;
					$pdf->Ln();  					
			   }
			
            $namapo =Po::model()->findbyPk($ar["po_id"])->nama; 					
			$pdf->SetFont('Arial','B',6);
		    /*$pdf->Cell($w[0],8,'',1,0,'R');
		    $pdf->Cell($w[1],8,$sttrayek,1,0,'L');
		    $pdf->Cell($w[2],8,$namatrayek,1,0,'L');
		    $pdf->Cell($w[3],8,$namapo,1,0,'L');
		    $pdf->Cell($w[4],8,$ar["jumlah"],1,0,'R');*/
		    $nourut = $nourut+1;
			$pdf->Cell($w[0],8,$nourut,1,0,'R');
			$pdf->Cell($w[1]+$w[2],8,'',1,0,'R');
			$pdf->Cell($w[3],8,$namapo,1,0,'L');
		    $pdf->Cell($w[4],8,$ar["jumlah"],1,0,'R'); 
		    $jmlbus = $jmlbus+$ar["jumlah"];
		   $pdf->Ln();   
		 }
		 
	
	$mydate = date("Ymdhns").'.pdf';
	$pdf->Output('LPR0001_'.$mydate,'D');
	
?>	