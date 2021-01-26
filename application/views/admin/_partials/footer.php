<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto ">
            <span>Copyright &copy; G-dunk</span>
          </div>
        </div>
      </footer>
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_partials/modal.php") ?>
 <!-- Bootstrap core JavaScript-->
 <script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->

 
  <!-- Core plugin JavaScript-->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/custom.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
 
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/datatables/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/datatables/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/datatables-demo.js"></script>

	
  <script>
	initSample();
</script>
<script>


	/* Tanpa Rupiah */
	var tanpa_rupiah = document.getElementById('tanpa-rupiah');
	tanpa_rupiah.addEventListener('keyup', function(e)
	{
		tanpa_rupiah.value = formatRupiah(this.value);
	});
	
	/* Dengan Rupiah */
	var dengan_rupiah = document.getElementById('rupiah');
	dengan_rupiah.addEventListener('keyup', function(e)
	{
		dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
	});
	
	/* Fungsi */
	function formatRupiah(angka, prefix)
	{
		var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split	= number_string.split(','),
			sisa 	= split[0].length % 3,
			rupiah 	= split[0].substr(0, sisa),
			ribuan 	= split[0].substr(sisa).match(/\d{3}/gi);
			
		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}
		
		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}
</script>
