<!DOCTYPE html>
<html>
<head>
	<title>husnul</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">
	
	
	<link href="assets2/common-css/ionicons.css" rel="stylesheet">
	
	
	<link rel="stylesheet" href="assets2/common-css/jquery.classycountdown.css" />
		
	<link href="assets2/07-comming-soon/css/styles.css" rel="stylesheet">
	
	<link href="assets2/07-comming-soon/css/responsive.css" rel="stylesheet">
</head>

<div class="main-area center-text" style="background-image:url(assets2/images/countdown-6-1600x900.jpg);" > 
<center>
<h2> Daftar Kategori Film </h2>
</center>

<a href="kategori/tambah"> + Tambah Data</a>
		
	<div class="display-table">
		<div class="display-table-cell">

<center><table border=1>
  <tr>
  <th>ID</th>
  <th>Nama Kategori</th>
  <th>Slug</th>
  <th>Tanggal Input Data</th>
  <th>Opsi</th>
  </tr>
  @foreach($kategori as $kategori)
    <tr>
      <td>{{$kategori->id}}</td>
      <td>{{$kategori->nama_kategory}}</td>
      <td>{{$kategori->slug}}</td>
      <td>{{$kategori->taggal_input_data}}</td>
      <td><a href="">Lihat</a> | <a href="">Edit</a> | <a href="">Hapus</a></td>
    </tr>
  @endforeach
</table></center>

			<div class="email-input-area">
					<form method="post">
						<input class="email-input" name="email" type="text" placeholder="Order your movies"/>
						<button class="submit-btn" name="submit" type="submit"><b>Order US</b></button>
					</form>
				</div><!-- email-input-area -->
				
				<div id="normal-countdown" data-date="2018/01/01"></div>
	<ul class="social-btn">
					
					<li><a href="https://www.facebook.com/husnulk20"><i class="ion-social-facebook"></i></a></li>
					<li><a href="https://plus.google.com/u/0/108168795903580060026"><i class="ion-social-googleplus"></i></a></li>
					<li><a href="https://www.instagram.com/kus_hk/"><i class="ion-social-instagram-outline"></i></a></li>
					
				</ul>
				<br></br><br></br><br></br></br></br></br></br></br></br>
			</div><!-- display-table -->
		</div><!-- display-table-cell -->
	</div><!-- main-area -->
	
	
	<!-- SCIPTS -->
	
	<script src="{{asset('assets2/common-js/jquery-3.1.1.min.js')}}"></script>
	
	<script src="{{asset('assets2/common-js/jquery.countdown.min.js')}}"></script>
	
	<script src="{{asset('assets2/common-js/scripts.js')}}"></script>
</body>
</html>