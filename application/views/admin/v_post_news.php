<!DOCTYPE html>
<html>
<head>
	<title>Post Berita</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
<body>
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h2>Portal Berita</h2><hr/>
			<form action="<?php echo base_url().'index.php/post_berita/simpan_post'?>" method="post" enctype="multipart/form-data">
	            <input type="text" name="judul" class="form-control" placeholder="Judul berita" required/><br/>
	            <textarea id="ckeditor" name="berita" class="form-control" required></textarea><br/>
	            <input type="file" name="filefoto" required><br>
				<button class="btn btn-primary btn-lg" type="submit">Post Berita</button>
			</form>
			
		</div>

	</div>

	<script src="<?php echo base_url().'assets/jquery/jquery-2.2.3.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
	<script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
	<script type="text/javascript">
	  $(function () {
	    CKEDITOR.replace('ckeditor');
	  });
	</script>

	<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-ui-1.11.4.custom/jquery-ui.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="<?=base_url()?>assets/js/metisMenu.min.js"></script>

	<!-- DataTables JavaScript -->
	<script src="<?=base_url()?>assets/js/jquery.dataTables.min.js"></script>
	<script src="<?=base_url()?>assets/js/dataTables.bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap-editable.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap-editable.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="<?=base_url()?>assets/js/sb-admin-2.js"></script>
</body>
</html>
