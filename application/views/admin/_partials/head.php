
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="ecommerce, toko online, lamongan, toko lamongan, jual beli">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logoold.png">
  <meta name="author" content="">
  <?php
if ($this->session->userdata('status') !== TRUE){
  redirect(base_url('Login_Page'));
}
?>
  <title><?= $title ?></title>
 
  <!-- Custom fonts for this template-->
  <link type="text/css" href="<?php echo base_url() ?>assets/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  
  <link type="text/css" href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet"> 
  <link type="text/css" href="<?php echo base_url() ?>assets/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">   
<!-- CKeditor -->
<script src="<?= base_url() ?>assets/ckeditor/ckeditor.js" rel="stylesheet" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/ckeditor/samples/js/sample.js" rel="stylesheet" type="text/javascript"></script>
