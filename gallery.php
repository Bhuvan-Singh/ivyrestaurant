<?php include("INCLUDES/header.php");

include("INCLUDES/config.php");

$query = "SELECT * FROM imageGallery ";

$result = mysqli_query($con,$query);

$datas = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>
<div class="conatiner l12 m12 s12 x12" id="main-wrapper">
	<?php include("INCLUDES/head-2.php");?>
	<div id="columns" class="l12 m12 s12 x12">
		<?php foreach($datas as $data) : ?>
				<figure>
					<img src="IMAGES/<?php echo $data["img_name"]?>" alt="<?php echo $data["img_name"]?>" align="middle" onclick="openLightBox();">
					<figcaption><?php echo $data["img_caption"]?></figcaption>	
				</figure>
		<?php endforeach;?>
	</div>
	

<?php include("INCLUDES/footer.php");?>

<div id="light-box-container" class="l12 m12 s12 x12">
	<div id="light-box" class="l11 m11 s11 x10">
		<figure>
			<img src="IMAGES/headerImage.jpg" alt="">
			<figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis diam erat, non consequat metus laoreet at.</figcaption>
		</figure>
		
		<div id="back-button" class="toggle-button">&#8619;</div>
		<div id="forward-button" class="toggle-button"> &#8620;</div>
		<div id="close-light-box" class="toggle-button" onclick="closeLightBox()";>&#9747;</div>
	</div>
</div>