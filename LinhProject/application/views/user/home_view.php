<!DOCTYPE html>
<html>
<title>Ẩm thực và cuộc sống</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>
<!-- url image-->
<?php $url_image ="http://localhost/LinhProject/images/" ?>
<!-- hien thi danh muc -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:20%;min-width:200px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Home</a>
    <?php foreach ($category as $item){?>
     <a href="#<?=$item->name_category?>" onclick="w3_close()" class="w3-bar-item w3-button"><?=$item->name_category?></a>
    <?php } ?>
</nav>
<!-- Top menu -->
<div class="w3-top" style="background-color: #FFFAF0 ">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto;">
    <div class="w3-button w3-padding-16 w3-left"  style="background-color: #FFFAF0 "onclick="w3_open()">☰</div>
    <div class="w3-right w3-padding-16" style="background-color: #FFFAF0 "><a href="<?php $base_url?>/LinhProject/login" style="background-color: #FFFAF0 "><h5 style="color: blue">Login</h5></a></div>
    <div class="w3-center w3-padding-16" style="color:red;background-color: #FFFAF0 ">FOOD</div>
  </div>
</div>
  
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- hien thi post theo danh muc-->
  <?php foreach ($category as $cate){?><!--Foreach danh muc -->
  <h3  id="<?php echo $cate->name_category ?>" style="color: #B22222"><p style="border-bottom: 2px solid #FF6A6A; font-weight: bold;"><?php echo $cate->name_category ?></p></h3>
  <div class="w3-row-padding w3-padding-16 w3-center">
    <?php foreach ($postsdt as $i => $item) {
        if($cate->id_category==$item->id_category){
     ?>  <!--Foreach bai viet -->
    <div class="w3-quarter">
      <!-- a href chuyen sang user/post/id-->
      <a href="http://localhost/LinhProject/post/<?=$item->id_post ?>" style="text-decoration: none">
        <img src="<?php echo $url_image.$item->image ?>" alt="<?$item->image ?>" style="width:100%">
        <h3 style="font-weight:bold;"><?=$item->title?></h3>
        <p><?=$item->content ?></p>
      </a>
    </div>
    <?php 
      }
      } ?>    
  </div>  
  <?php } ?>
  <!-- Phan trang -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <hr id="about">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <h3>About Me, The Food Man</h3><br>
    <img src="http://localhost/LinhProject/images/chef.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
    <div class="w3-padding-32">
      <h4><b>I am Who I Am!</b></h4>
      <h6><i>With Passion For Real, Good Food</i></h6>
      <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    </div>
  </div>
  <hr>
  
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <p>Powered by   &#64Linhmập</p>
    </div>
  
    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="http://localhost/LinhProject//images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Lorem</span><br>
          <span>Sed mattis nunc</span>
        </li>
        <li class="w3-padding-16">
          <img src="http://localhost/LinhProject//images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Ipsum</span><br>
          <span>Praes tinci sed</span>
        </li> 
      </ul>
    </div>

    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dinner</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Salmon</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">France</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Drinks</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Flavors</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cuisine</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Chicken</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dressing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fried</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fish</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Duck</span>
      </p>
    </div>
  </footer>

<!-- End page content -->
</div>

<script>
// Script mở và đóng menu
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>