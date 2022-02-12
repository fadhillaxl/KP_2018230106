<?php 
 
include "function/cek.php";

include "function/koneksi.php";

?>



<?php
include "view/header.php";



?>



    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php
        include "view/sidebar.php";
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="printpage.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Pembelian (Bulanan)</div>
                                                <?php
                                                $month = date("m");
                                                $kueri = mysqli_query($conn, "SELECT * FROM barang WHERE MONTH(tgl_msk) = $month");
                                                $total = 0;
                                                
                                                while (($row = mysqli_fetch_array($kueri)) != null){
                                                    
                                                    $stn = $row['hrg_stn'];
                                                    $stk = $row['jumlah_barang'];
                                                    $hasil = $stn * $stk;
                                                    $total += $hasil;
                                                }
                                                                                 
                                                
                                                

            
                                                
                                                ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.<?php echo number_format($total) ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Pembelian (Tahunan)</div>
                                                <?php
                                                $month = date("Y");
                                                $kueri = mysqli_query($conn, "SELECT * FROM barang WHERE YEAR(tgl_msk) = $month");
                                                
                                                
                                                $data = array ();
                                                $total = 0;
                                                
                                                while (($row = mysqli_fetch_array($kueri)) != null){
                                                    
                                                    $stn = $row['hrg_stn'];
                                                    $stk = $row['jumlah_barang'];
                                                    $hasil = $stn * $stk;
                                                    $total += $hasil;
                                                }
                                                                                 
                                                
                                                

            
                                                
                                                ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.<?php echo number_format($total) ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">ACCEPTED QC
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <?php
                                                    
                                                    
                                                    $sql = "SELECT * FROM hqc ";
                                                    $result = $mysqli -> query($sql);
                                                     
                                                         $total = 0;
                                                         while ($row = $result -> fetch_array(MYSQLI_ASSOC)){
                                                             $data = $row['terima'];
                                                             $total += $data;
                                                         }
                                                         
                                                    
                                                    ?>
                                                    
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $total ?></div>
                                                </div>
                                                <div class="col">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                REJECT QC</div>
                                                <?php
                                                $sql = "SELECT * FROM hqc ";
                                                $result = $mysqli -> query($sql);
                                                 
                                                     $total = 0;
                                                     while ($row = $result -> fetch_array(MYSQLI_ASSOC)){
                                                         $data = $row['tolak'];
                                                         $total += $data;
                                                     }
                                                
                                                ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                    
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-xl-12 col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Quality Check Barang</h6>
                                </div>
                                <div class="card-body">
                                    <?php include "function/dataqc.php"; ?>
                                    
                                    <h4 class="small font-weight-bold">SELESAI<span
                                            class="float-right"><?php echo round($totalc) ?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo round($totalc) ?>%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">PENDING <span
                                            class="float-right"><?php echo round($totalp) ?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo round($totalp) ?>%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    

                                </div>
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
                        <span>Copyright &copy; Your Website 2021</span>
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
                    <a class="btn btn-primary" href="function/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    
<?php
include "view/footer.php";
?>