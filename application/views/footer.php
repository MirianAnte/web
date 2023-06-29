<?php if ($this->session->flashdata("confirmacion")): ?>
  <script type="text/javascript">
	toastr.success("<?php echo $this->session->flashdata("confirmacion")?>");
  </script>
  <?php $this->session->set_flashdata("confirmacion","") ?>
<?php endif; ?>

<?php if ($this->session->flashdata("bienvenida")): ?>
  <script type="text/javascript">
	toastr.info("<?php echo $this->session->flashdata("bienvenida")?>");
  </script>
  <?php $this->session->set_flashdata("bienvenida","") ?>
<?php endif; ?>

<?php if ($this->session->flashdata("error")): ?>
  <script type="text/javascript">
	toastr.error("<?php echo $this->session->flashdata("error")?>");
  </script>
  <?php $this->session->set_flashdata("error","") ?>
<?php endif; ?>

<!-- crear clase de obligatorio -->
<style media="screen">
  .obligatorio{
    color:red;
    background-color:white;
    border-radius: 20px;
    font-size: 15px;
    padding-left: 5px;
    padding-right: 5px;
  }
  .error{
    color:red;
    font-weight:bold;
  }
  input.error{
    border: 2px solid red;
  }
</style>

<!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020<br>

                Distributed By <a href="https://www.themewagon.com"target="_blank">ThemeWagon</a>

              </span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url('plantilla/assets/vendors/js/vendor.bundle.base.js'); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url('plantilla/assets/vendors/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('plantilla/assets/vendors/progressbar.js/progressbar.min.js'); ?>"></script>
    <script src="<?php echo base_url('plantilla/assets/vendors/jvectormap/jquery-jvectormap.min.js'); ?>"></script>
    <script src="<?php echo base_url('plantilla/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
    <script src="<?php echo base_url('plantilla/assets/vendors/owl-carousel-2/owl.carousel.min.js'); ?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url('plantilla/assets/js/off-canvas.js'); ?>"></script>
    <script src="<?php echo base_url('plantilla/assets/js/hoverable-collapse.js'); ?>"></script>
    <script src="<?php echo base_url('plantilla/assets/js/misc.js'); ?>"></script>
    <script src="<?php echo base_url('plantilla/assets/js/settings.js'); ?>"></script>
    <script src="<?php echo base_url('plantilla/assets/js/todolist.js');?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url('plantilla/assets/js/dashboard.js'); ?>"></script>
    <!-- End custom js for this page -->

  </body>
</html>
