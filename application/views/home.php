<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Intravel - Agency Travel</title>
<link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/jquery-ui-1.10.1.custom.min.css">
<link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/style.css">


</head>
<Body>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Intravel - Agency Travel Administrator</a>
    </div>

   

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Data Member</a></li>
        <li><a href="<?php echo base_url('inventory/tenda') ?>">Travel Package</a></li>
        <li><a href="<?php 	echo base_url('welcome/laporan') ?>">Laporan Transaksi Pemesanan</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
      	<li>
      		<a href="<?php echo base_url('clogin/logout')?>">
	      	<button class="btn btn-danger btn-xs">Log Out</button>
      		</a>
      	</li>
      </ul>
    </div>
  </div>
</nav>

<main>
	<div class="container">

 
<h1>Data Member</h1>
<button type="button" class="btn btn-primary hide_on_print" data-toggle="modal" data-target="#addData">Tambah Data</button>
<div style="max-width: 100%; overflow: auto; white-space: nowrap;">

<table class="table table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $x=1; ?>
		<?php foreach ($tampiluser as $data): ?>
		<tr>
			<th><?php echo $x; ?></th>
			<th><?php echo $data['nama'] ?></th>
			<th><?php echo $data['username'] ?></th>
		    <th><input type="password" name="password" class="form-control" id="inputPassword" value="<?php echo $data['password'] ?>"></th>
			<th><?php echo $data['email'] ?></th>
			<th><button class="btn btn-default btn-xs" data-toggle="modal" data-target="#editData<?php echo $data['id_user'] ?>">Detail</button><a href="<?php echo base_url('welcome/hapus/'.$data['id_user']) ?>"><button class="btn btn-danger btn-xs">Hapus</button></a></th>
		</tr>
		<?php $x++; ?>
		<?php endforeach; ?>
	</tbody>
	
</table>
</div>
<button class="btn btn-default btn-sm print"><span class="fa fa-print"></span> Print</button>


<div id="addData" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content Add Data-->
    <form action="<?php echo base_url('welcome/useradd') ?>" method="post">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Tambah Data Member</h4>
	      </div>
	      <div class="modal-body">
			<fieldset>
		    <div class="form-group">
		      <label for="inputNama" class="col-lg-2 control-label">Nama</label>
		      <div class="col-lg-10">
		        <input type="text" name="nama" class="form-control" id="inputNama" placeholder="Nama" required>
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputUsername" class="col-lg-2 control-label">Username</label>
		      <div class="col-lg-10">
		        <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Username" required>
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
		      <div class="col-lg-10">
		        <input type="text" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
		      <div class="col-lg-10">
		        <input type="Email" name="email" class="form-control" id="inputEmail" placeholder="Email" required>
		        <input type="hidden" name="status" value="1" class="form-control" id="status" >
		      </div>
		    </div>
			
		
		    </fieldset>
			
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
	        <button type="submit" name="btn" class="btn btn-primary btn-sm">
	        	<span class="fa fa-save"></span> Simpan
	        </button>
	      </div>
	    </div>
	</form>
  </div>
</div>

<?php foreach ($tampiluser as $data): ?>
<div id="editData<?php echo $data['id_user'];?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content Add Data-->
    <form action="<?php echo base_url('welcome/update') ?>" method="post">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Edit Data Member</h4>
	      </div>
	      <div class="modal-body">
			<fieldset>
		    <div class="form-group">
		      <label for="inputNama" class="col-lg-2 control-label">Nama</label>
		      <div class="col-lg-10">
		        <input type="text" name="nama" class="form-control" id="inputNama" value="<?php echo $data['nama'] ?>">
		        <input type="hidden" name="id" class="form-control" id="inputNama" value="<?php echo $data['id_user'] ?>">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputUsername" class="col-lg-2 control-label">Username</label>
		      <div class="col-lg-10">
		        <input type="text" name="username" class="form-control" id="inputUsername" value="<?php echo $data['username'] ?>">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
		      <div class="col-lg-10">
		        <input type="text" name="password" class="form-control" id="inputPassword" value="<?php echo $data['password'] ?>">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
		      <div class="col-lg-10">
		        <input type="Email" name="email" class="form-control" id="inputEmail" value="<?php echo $data['email'] ?>">
		        <input type="hidden" name="status" value="1" class="form-control" id="status" >
		      </div>
		    </div>
			
		
		    </fieldset>
			
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
	        <button type="submit" name="btn" class="btn btn-primary btn-sm">
	        	<span class="fa fa-save"></span> Simpan
	        </button>
	      </div>
	    </div>
	</form>
  </div>
</div>
<?php endforeach ?>




	</div>
</main>

<footer>
	<div class="container">
		<div class="copyright">
			&copy; 2016
		</div>
	</div>
</footer>

<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>js/jquery-1.10.2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="<?php echo base_url().'assets/'; ?>js/jquery.ui.core.min.js"></script>
<script src="<?php echo base_url().'assets/'; ?>js/jquery.ui.widget.min.js"></script>
<script src="<?php echo base_url().'assets/'; ?>js/jquery.ui.datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>js/modernizr.custom.28468.js"></script>
<script type="text/javascript">
$.fn.exists = function() { return this.length > 0; };
$(function(){



	$("select#inputMb").change(function(){
		var data = {"action" : "load"};
		data = $(this).serialize() + "&" + $.param(data);
		$.ajax({
			type : "POST",
			dataType : "json",
			url : "view/loadmember.php",
			data : data,
			success : function(data){
				//input auto value
				$(".tgl_pinjam").text(data["tgl_seo"]);
				$("#tgl_pinjam").val(data["tanggal"]);

				$("#jam_pinjam").val(data["jam"]);
				$("#jam_pinjam2").val(data["menit"]);
				$(".jam_pinjam").text(data["jam"]);
				$(".jam_pinjam2").text(data["menit"]);

				$("#jml_spd").val(data["jumlah"]);

				var time1 = $("#tgl_pinjam").val() + " " + $("#jam_pinjam").val() + ":" + $("#jam_pinjam2").val();
				var time2 = $("#tgl_kembali").val() + " " + $(".jam_kembali").text() + ":" + $(".jam_kembali2").text();

				var time_a = new Date(time1);
				var time_b = new Date(time2);
				var selisih = new Date(time_b - time_a);
				//penentuan harga
				var harga = Math.ceil(selisih / 1000 / 3600);
				var harga_out = harga * $("#tarif").val() * $("#jml_spd").val();

				$("#totharga").val(harga_out);

			}
		}).done(sel,atur_kembalian);

	});

	$("#bayar").keyup(atur_kembalian);



	if( $("form#form_kembali").exists()){
		var data = {"action" : "load"};
		$.ajax({
			type : "POST",
			dataType : "json",
			url : "view/loadtime.php",
			data : data,
			success : function(data){
				$(".jam_kembali").text(data["H"]);
				$(".jam_kembali2").text(data["i"]);
				$(".jk1").val(data["H"]);
				$(".jk2").val(data["i"]);
			}
		});
	}


	function atur_kembalian(){
		var x = $("#bayar").val();
		var tot = $("#totharga").val();
		var selisih = x - tot;
		$("#kembalian").val(selisih);
	}

	function sel(){
		$("#bayar").val($("#totharga").val());
		$("#bayar").focus().select();
	}

	function timeToSeconds(time) {
	    time = time.split(/:/);
	    return time[0] * 3600 + time[1] * 60;
	}


	$(function() {
		$( ".datepicker" ).datepicker();
	});

	$(".print").click(function(){
		window.print();
	});
});
</script>
</Body>
</html>