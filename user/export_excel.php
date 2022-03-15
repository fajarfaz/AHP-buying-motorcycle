<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=data-sepeda-motor.xls");
 
// Tambahkan table
include "../proses/koneksi.php";

?>
<table border="1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>no</th>
                                              
                                                <th>merek</th>
                                                <th>harga</th>
                                                <th>kapasitas</th>
                                                <th>bahan bakar</th>
                                                <th>model</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                        <?php 
                function rupiah($angka){
                    $hasil_rupiah = "Rp " . number_format($angka);
                    return $hasil_rupiah;
                }
                $no = 0 ;
                        @$property = $_POST['property'];
                        $qu=mysqli_query($conn,"SELECT * FROM tb_sepeda ORDER BY id_sepeda $property ");
                        while($has=mysqli_fetch_row($qu)){
                $no = $no+1;
                $rp =rupiah($has[2]);
                                ?>
                                          
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td><?php echo $no ;?></td>
                                               
                                                <td>
                                                    <span class="block-email"><?php echo $has[1] ;?></span>
                                                </td>
                                                <td ><?php echo $rp ;?>.00</td>
                                               <td ><?php echo $has[3] ;?></td>
                                               <td ><?php echo $has[4] ;?> Km/ Liter</td>
                                               <td ><?php echo $has[5] ;?></td>
                                              
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>