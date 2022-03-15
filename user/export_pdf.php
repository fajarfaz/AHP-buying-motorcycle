<?php 
include "../proses/koneksi.php";
include "../fpdf/fpdf.php";

$pdf = new FPDF('P','mm','A4');//P atau L = orientasi kertas, mm = ukuran, A4 = jenis kertas
        
        $pdf->AddPage();
        $pdf->AliasNbPages();
         $pdf->SetTitle('Title');
        $pdf->SetFont('Arial','B',10);//Arial = jenis huruf, B = format huruf, 10 = ukuran
        //$pdf->Cell(40,10,'',1);//40 = panjang, 10 = tinggi, 1 = tingkat ketebalan garis
        $pdf->Cell(180,10,'Data Sepeda Motor',0,0,'C'); 
        $pdf->Ln(10);//Ln = pindah baris
        $pdf->Cell(10,10,'NO','1');
        $pdf->Cell(40,10,'Merek','1');
        $pdf->Cell(30,10,'Harga','1');
        $pdf->Cell(40,10,'Kapasitas','1');
        $pdf->Cell(40,10,'Bahan Bakar','1');
        $pdf->Cell(30,10,'Model','1');
      
        
                                                
        //pindah baris
        $pdf->Ln(10);
 
        $no = 1;
        $qu=mysqli_query($conn,"SELECT * FROM tb_sepeda  ");
       
 
        while($data = mysqli_fetch_array($qu)){
 
            $pdf->Cell(10,10, $no, 1);
            $pdf->Cell(40,10, $data["merek"],1);
            $pdf->Cell(30,10, $data["harga"],1);
            $pdf->Cell(40,10, $data["kapasitas"],1);
            $pdf->Cell(40,10, $data["bbm"],1);
            $pdf->Cell(30,10, $data["model"],1);
        
 
            $pdf->Ln(10);
            $no++;
 
        }
 
 
 
        //cetak

        $pdf->Output( );

?>