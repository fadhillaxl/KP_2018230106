<?php
    include 'function/koneksi.php';
    include "function/cek.php";

?>



<?php
include "view/header.php";

?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include "view/sidebar-user.php"
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include "view/navbar.php";
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Barang</th>
                                            <th>Name</th>
                                            <th>QC Control</th>
                                     
                                            <th>Stok</th>
                                            <th>Start date</th>
                                            <th>Edit</th>
                                            <th>Harga Satuan</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $sql = "SELECT * FROM barang";
                                    $result = $mysqli -> query($sql);
                                    $total = 0;
                                    $no = 0;
                                    while ($row = $result -> fetch_array(MYSQLI_ASSOC)){
                                        $namab = $row['nama_barang'];
                                        $jml = $row['jumlah_barang'];
                                        $date = $row['tgl_msk'];   
                                        $hrg = $row["hrg_stn"];
                                        $qc = $row["qc_prog"];
                                        $id_brg = $row["id_barang"];
                                        $jml1 = $jml * $hrg;
                                        $no++;
                                        
                                        $total += $jml1;
                                        
                                    ?>
                                        <tr>
                                            <td><?php echo $no  ?></td>
                                            <td><?php echo $id_brg  ?></td>
                                            <td><?php echo $namab  ?></td>
                                            <td align="center" >
                                            <a class="btn <?php
                                            if($qc == "PENDING"){
                                                echo "btn-warning"; 
                                            }else if($qc == "ACCEPTED"){
                                                echo "btn-success";
                                            }else if($qc == "REJECT"){
                                                echo "btn-danger";
                                            }
                                            ?> btn-sm">
                                            <i class="fas <?php
                                            if($qc == "PENDING"){
                                                echo "fa-exclamation-circle"; 
                                            }else if($qc == "ACCEPTED"){
                                                echo "fa-check";
                                            }else if($qc == "REJECT"){
                                                echo "fa-exclamation-triangle";
                                            }
                                            ?> "></i>
                                            </a>
                                            </td>
                                            <td><?php echo $jml ?></td>
                                            <td><?php echo $date ?></td>
                                            <td>
                                            <a href='../function/delete.php?id=<?php echo $id_brg ?>' class='btn btn-danger btn-circle btn-sm'>
                                            <i class='fas fa-trash'></i>
                                             </a>
                                            
                                            <a href='../editform.php?id=<?php echo $id_brg?>' class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                            </td>
                                            <td>Rp.<?php echo number_format($hrg)  ?></td>
                                            <td>Rp.<?php echo number_format($jml1) ?></td>
                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                            <th>ID Barang</th>
                                            <th>Name</th>
                                            <th>QC Control</th>
                                            
                                            <th>Stok</th>
                                            <th>Start date</th>
                                            <th>Edit</th>
                                            <th>Harga Satuan</th>
                                            <th>Rp.<?php echo number_format($total)  ?></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php
include "view/footer.php";
?>