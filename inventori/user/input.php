<?php
include "function/cek.php";

include "function/koneksi.php";

?>



<?php
include "view/header.php";

?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include "view/sidebar-user.php"; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "view/navbar.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Input Data</h6>
                        </div>
                        <div class="table-responsive">
                        <form class="user" action="function/simpan.php" method="POST">
                                <table class="table " id="dataTable" width="100%" cellspacing="0">
                                <?php
                                    $sql = "SELECT * FROM barang";
                                    $result = $mysqli -> query($sql);
                                    while (($row = mysqli_fetch_array($result)) != null){
                                        $data[] = $row;
                                        }
                                        $cont = count($data);
                                        $kode = "BRG".$cont;
                                    ?> 
                                    <tr>
                                        <th>Kode Barang</th>
                                        <td>:</td>
                                        <td>
                                        <input type="text" readonly  class="form-control" placeholder="KODE Barang" name="kode" value="<?php echo $kode?>">
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                    <th>Nama Barang</th>
                                    <td>:</td>
                                    <td>
                                    <input type="text" class="form-control" placeholder="Nama Barang" name="namab" ">
                                    </td>
                                        
                                    </tr>
                                    <tr>
                                        <th>Quality Check Progres</th>
                                        <td>:</td>
                                        <td>
                                        <select class="custom-select" id="inputGroupSelect01"  name="qcprog">
                                        <option selected></option>
                                            <option value="PENDING">PENDING</option>
                                            <option value="ACCEPTED">ACCEPTED</option>
                                            <option value="REJECT">REJECT</option>
                                        </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Harga Barang</th>
                                        <td>:</td>
                                        <td>
                                        <input type="text" class="form-control" placeholder="Harga Barang" name="hargab" ">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>jumlah</th>
                                        <td>:</td>
                                        <td>
                                        <input type="number" class="form-control" placeholder="Jumlah Barang" name="jml" >
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Masuk</th>
                                        <td>:</td>
                                        <td>
                                        <input type="date" class="form-control" placeholder="Tanggal" name="tgl">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                        <button type="submit" class="btn btn-success btn-icon-split">
                                        
                                        <span class="text">Simpan</span>
                                        </button>
                                        </th>
                                    </tr>
                                    

                                </table>
                        </form>
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
                    <a class="btn btn-primary" href="function/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php
include "view/footer.php";
?>