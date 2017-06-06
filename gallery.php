<?php 

include("INCLUDES/config.php");

$query = "SELECT * FROM imageGallery ";

$result = mysqli_query($con,$query);

$datas = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>

<?php include("INCLUDES/header.php"); ?>
<div id="mobile-menu" class="l-hidden m-hidden s-hidden-x12">
	<div id="fade"></div>
	<div id="menu-content">
		<ul class="x10">
    		<li class="x12" id="close-menu"><button onclick="hideMenu(); return false;">Close</button></li>
    		<li class="x12"><a href="index.php">Home</a></li>
    		<li class="x12"><a href="aboutus.php">About</a></li>
    		<li class="x12"><a href="gallery.php">Gallery</a></li>
    		<li class="x12"><a href="contactus.php">Contact</a></li>
    		<li class="x12"><a href="">Order online</a></li>
		</ul>
		<div id="social-media" class="x12">
			<ul>							
				<li class="x4 social-icon"><a href=""><img src="IMAGES/instagram.png" alt="" height="20px"></a></li>
				<li class="x4 social-icon"><a href=""><img src="IMAGES/twitter.png" alt="" height="20px"></a></li>
				<li class="x4 social-icon"><a href=""><img src="IMAGES/facebook.png" alt="" height="20px"></a></li>
			</ul>
		</div> 
	</div>
	
</div>
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