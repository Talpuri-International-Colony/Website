<html>
<head>
<title>Image Gallery
</title>
<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
<script src="jquery.fancybox.min.js"></script>
<link href="jquery.fancybox.min.css" rel="stylesheet">
<style>
body{
	margin:0;
	padding:0;
	background:#ccc;
}
.thumbnails{
	width:30%;
	float:left;
	margin:10px;
	background:#fff;
	padding :20px;
	box-sizing:border-box;

}
main{
	width:80%;
	margin:0px auto;
}
.thumbnails img{
	width:100%;
	height:auto;


}
</style>
</head>
<body>
<main>
<h1>
Image Gallery
</h1>
<?php
$dir=glob('images/Gallery/{*.jpg,*.png}',GLOB_BRACE);
foreach($dir as $key => $value)
{
	?>
	<div class="thumbnails">


	<a href="<?php echo $value;?>" data-fancybox="images" data-caption="My caption">
	<img src="<?php echo $value;?>" alt ="<?php echo $value;?>">
</a>
	
	</div>
	<?php
}
?>
</h1>
</main>
</html>