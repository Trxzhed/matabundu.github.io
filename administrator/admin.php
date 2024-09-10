
<?php
session_start();
if(empty($_SESSION['sesi'])){
	echo"<meta http-equiv='refresh' content='0; url=login.php'>";
} else{
	//tampilan home
	?>
	<title>Halaman Administrator</title>
		<link rel="stylesheet" href="../asset/style.css" type="text/css" />
		<script src="../asset/ckeditor/ckeditor.js"></script>
		<link rel="stylesheet" href="../asset/JQuery/jquery-ui.css" type="text/css"/>
		<script src="../asset/JQuery/jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="../asset/JQuery/jquery-ui.js" type="text/javascript"></script>
		<link rel="stylesheet" media="all" type="text/css" href="../asset/JQuery/jquery-ui-timepicker-addon.css" />
		<script type="text/javascript" src="../asset/JQuery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../asset/JQuery/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="../asset/JQuery/jquery-ui-sliderAccess.js"></script>

<!--datepicker-->
		<script>
	 $(function() {
		 $( "#datepicker" ).datepicker({
	 dateFormat: 'yy-mm-dd'
	 });
	 });
	 </script>
<!--timepicker-->
	 <script>
  $(document).ready(function() {
  $("#waktu").timepicker(
    {
     timeFormat: 'HH:mm:ss',
     stepHour: 2,
	stepMinute: 10,
	stepSecond: 10
     })
	 });
  </script>
	</head>
	<body>
	<center><img src="../images/adminn.png" width="980">
		<table align="center" class="admtab" border="1" width="980">

			<tr>
				<td align="center">
					<embed src="../images/jam.swf" height="40px" width="150px"></embed><br>
						<?php
						$array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
						$hr = $array_hr[date('N')];
						$tgl= date('j');
						$array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
						$bln = $array_bln[date('n')];
						$thn = date('Y');
						echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " ";
						?>
					</td>
					<td>
				</td>
			</tr>
			<tr>
				<td rowspan="2" width="21%" valign="top" >
					<?php include"menu/menu.php";?></td>
				</td>
			</tr>
			<tr>
				<td align="center" valign="top"><?php include"isi.php";?></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><p>Copyright &copy; 2024 by <a title="Andriyan | Munawir Fadli | Darma | Musran">Kelompok S || Kuliah Kerja Praktek STMIK BBK - </a><a href = 'http://www.uniku.ac.id' title="Website UNIKU">UNIKU</a> 2024"</p></td>
			</tr>
		</table>
		<!--<p>Copyright &copy; 2017 by <a title="Angga Sofani | Ekky Prio Hutomo | Muhamad Rovi | Uci Muhamad Sanusi">Kelompok 1 || Kerja Praktek FKOM - </a><a href = 'http://www.uniku.ac.id' title="Website UNIKU">UNIKU</a> 2017"</p>-->
		</center>
	<?php
}
?>
