<?php
    include 'function/koneksi.php';


?>



<?php
include "view/header.php";

?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include "view/sidebar.php"
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
                            <h6 class="m-0 font-weight-bold text-primary">Data USER</h6>
                            <a href="adduser.php" class="bi bi-plus btn btn-success" >Tambah user</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>username</th>
                                            <th>Nama</th>
                                            <th>Pilihan</th>
                                     
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $sql = "SELECT * FROM admin1 WHERE level = '1'";
                                    $result = $mysqli -> query($sql);
                                    $total = 0;
                                    $no = 0;
                                    while ($row = $result -> fetch_array(MYSQLI_ASSOC)){
                                        $id_user = $row['id'];
                                        $nama = $row['nama'];
                                        $user = $row['username'];

                                        $no++;
                                        
                                       
                                        
                                    ?>
                                        <tr>
                                            <td><?php echo $no  ?></td>
                                            <td><?php echo $user  ?></td>
                                            <td><?php echo $nama  ?></td>
                                            <td>
                                            <a href='function/hapususer.php?id=<?php echo $id_user ?>' class='btn btn-danger btn-circle btn-sm'>
                                            <i class='fas fa-trash'></i>
                                             </a>
                                            
                                            <a href='formedituser.php?id=<?php echo $id_user?>' class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                         
                                            <th>username</th>
                                            <th>Nama</th>
                                            <th>Pilihan</th>
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
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php
include "view/footer.php";
?>