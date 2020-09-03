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
        <li><a href="<?php echo base_url('welcome')	 ?>">Data Member</a></li>
        <li><a href="<?php echo base_url('inventory/tenda')?>">Travel Package</a></li>
        <li class="active"><a href="<?php 	echo base_url('welcome/laporan') ?>">Laporan Transaksi Pemesanan</a></li>
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

 
<h1>Data Laporan </h1>
<div style="max-width: 100%; overflow: auto; white-space: nowrap;">
<table class="table table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode</th>
			<th>Nama</th>
			<th>Tanggal Berangkat</th>
		</tr>
	</thead>
	<tbody><?php 	$x=1; ?>
        <?php foreach($tampilanlaporan as $data):?>
        	
		<tr>
			<th>	<?php 	echo $x; ?></th>
			<th><?php 	echo $data['kode_penjualan'] ?></th>
			<th><?php 	echo $data['nama_lengkap'] ?></th>
			<th><?php 	echo $data['tgl_berangkat'] ?></th>
			<th><a href="<?php 	echo base_url('welcome/detail_laporan/'.$data['kode_penjualan']) ?>"><button class="btn btn-default btn-xs">Detail</button></a></th>
		</tr>
		<?php 	$x++; ?>
	<?php 	endforeach; ?>
	</tbody>
	
</table>
</div>
<button class="btn btn-default btn-sm print"><span class="fa fa-print"></span> Print</button>

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
    function readURL(input) {
    $('#previewLoad').show();
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.image_preview').html('<img src="'+e.target.result+'" alt="'+reader.name+'" class="img-thumbnail" width="304" height="236"/>');
        }

        reader.readAsDataURL(input.files[0]);
        $('#previewLoad').hide();
    }
    }
    
    function reset(){
    $('#image').val("");
    $('#imagee').val("");
    $('#imageee').val("");
    $('#imageeee').val("");
    $('#imageeeee').val("");
    $('#imageeeeee').val("");
    $('.image_preview').html("");
    }
    </script>
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