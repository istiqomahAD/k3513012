<!DOCTYPE html>
<head>

<!-- Meta Tags -->
<title>Tugas FOSS</title>   

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="../../../asset/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="../../../asset/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="../../../asset/css/supersized.css" rel="stylesheet">
<link href="../../../asset/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="../../../asset/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="../../../asset/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="../../../asset/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="../../../asset/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="../../../asset/css/responsive.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="../../asset/js/modernizr.js"></script>

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End Analytics -->

</head>
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <nav id="menu">
        	<ul id="menu-nav">
            	<li><a href="../../../index.php" class="external">Home</a></li>
                <li><?php echo anchor('movie/tambah',"Add Movie");?></li>
                <li><?php echo anchor('movie/proses_tampil',"Tampil Movie");?></li>
                <li><?php echo anchor('movie/proses_cetak',"Cetak List");?></li>
            </ul>
        </nav>
        
    </div>
</header>
<body>
	<header>
		<h1></h1>
	</header>
<center>
<div>
	<h3><font size='13' face='Tahoma'>Edit Film Baru </font></h3>
	<?php echo form_open('movie/proses_update/'.$id) ?>
	<table>
	<tr>
	<td width="70px">Judul</td>
	<td>:</td>
	<td><input type="text" name="judul" value="<?php echo $judul; ?>" size="30" /></td>
	</tr>
	<tr>
	<td width="70px">Genre</td>
	<td>:</td>
	<td>
		<?php 
		$genre_data = array('Action','Comedy','Horror','Romance','Mystery');
		foreach ($genre_data as $genre_list) {
			if ($genre == $genre_list) {
				echo '<input type="checkbox" name="genre" value="'.$genre_list.'" class="form-control" checked>'.$genre_list.'<br>';
			}else echo '<input type="checkbox" name="genre" value="'.$genre_list.'" class="form-control">'.$genre_list.'<br>';
		}
		?>
	</td>
	</tr>
	<tr>
	<td>Tahun</td>
	<td>:</td>
	<td><input type="text" name="tahun" value="<?php echo $tahun; ?>" size="10" /></td>
	</tr>
	<tr>
	<td valign="top">Sinopsis</td>
	<td valign="top">:</td>
	<td><textarea name="sinopsis" cols="30" rows="5"><?php echo $sinopsis; ?></textarea></td>
	</tr>
	<tr>
	<td>Director</td>
	<td>:</td>
	<td><input type="text" name="director" value="<?php echo $director; ?>" size="30" /></td>
	</tr>
<tr>
<td></td>
<td></td>
<td>
<?php echo form_submit('tombol',' Simpan ') ?>
</td>
</tr>
</table>
</div>
</center>
<footer>
<p>Movie Database</p>
</footer>
</body>
</html>