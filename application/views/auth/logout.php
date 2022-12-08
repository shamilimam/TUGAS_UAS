<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Untuk Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Silahkan Tekan Logout Jika Anda Ingin keluar dari halaman ini</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url() . "auth/login" ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() . "assets/auth/vendor/jquery/jquery.min.js" ?>"></script>
    <script src="<?php echo base_url() ."assets/auth/vendor/bootstrap/js/bootstrap.bundle.min.js" ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() . "assets/auth/vendor/jquery-easing/jquery.easing.min.js" ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() . "assets/auth/js/sb-admin-2.min.js" ?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url() . "assets/auth/vendor/chart.js/Chart.min.js" ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() . "assets/auth/js/demo/chart-area-demo.js" ?>"></script>
    <script src="<?php echo base_url() . "assets/auth/js/demo/chart-pie-demo.js" ?>"></script>

</body>

</html>