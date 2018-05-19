<!DOCTYPE html>
<html>
<title>Ẩm thực và cuộc sống</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: 'Roboto Slab', serif;}
.w3-bar-block .w3-bar-item {padding:15px}
</style>
<body  style=" background-color: #efefef">

<!-- Sidebar (hidden by default) onclick="w3_close()"-->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:block ;z-index:2;width:10%;min-width:250px;  background-color: #FFFAFA" id="mySidebar">
  <a href="<?php $base_url ?>/LinhProject/home" onclick="w3_close()"
  class="w3-bar-item w3-button"><h5>Trang chủ</h5></a>
  <a href="<?php $base_url ?>/LinhProject/listuser"  class="w3-bar-item w3-button"><h5>Quản lý người dùng</h5></a>
  <a href="<?php $base_url ?>/LinhProject/category"  class="w3-bar-item w3-button"><h5>Quản lý danh mục</h5></a>
  <a href="#food" class="w3-bar-item w3-button"  style="background: #CD8162"><h5>Quản lý bài viết</h5></a>
  <a href="<?php $base_url ?>/LinhProject/postting"  class="w3-bar-item w3-button"><h5>Thêm bài viết</h5></a>
  <a href="#about"  class="w3-bar-item w3-button"><h5>Cài đặt</h5></a>
</nav>
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1400px;margin:auto; background:url('<?php $base_url ?>/LinhProject/images/food.jpg');">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()"> </div>
    <div class="w3-right w3-padding-16"><a href="<?php $base_url ?>/LinhProject/admin/logout">Logout</a></div>
    <div class="w3-center w3-padding-16" style="color:#FFFFE0"><h1>FOOD</h1></div>
  </div>
</div>
  
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px; margin-left: 250px ; margin-right:  10px ; ">
  <h4> Danh sách bài viết: </h4>
  <div style="  margin-left: 750px ;">
    <form>
      <input type="text" name="seach" value="Nhập vào dữ liệu cần tìm">
      <button>Tìm kiếm</button>
    </form>
  </div>
  <!-- table hien thi user lay tu DB -->
  <table class="table table-bordered table-hover table-list", border="1px solid #ddd" >
            <thead>
                <tr>                    
                    <th class="w50">STT</th>
                    <th>Danh mục</th>
                    <th>Title</th>
                    <th>Ngày đăng</th>
                    <th>Ảnh</th>
                    <th>Xem trước</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listpost as  $i =>$item) { 
                	?>                    
                <tr>
                    <td><input type="text" value="<?=$i+1?>" class="id"></td>    
                    <td><input type="text" value="<?=$item->name_category?>" class="name_category"></td>
                    <td><input type="text" value="<?=$item->title?>" class="title"></td>
                    <td><input type="text" value="<?=date("d-m-y")?>" class="date"></td>
                    <td><input type="text" value="<?=$item->image?>" class="image"></td>
                    <td>
                    	<a href="http://localhost/LinhProject/post/<?=$item->id_post ?>" style="text-decoration: none">
                    	<input type="image" alt="Xem trước" id="image" src="http://localhost/LinhProject/images/icon/promotion.png" style="width:35%">  
                    	</a>
                    </td>
                </tr>
                <?php } ?>
                 
            </tbody>
        </table>
        
</div>

<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";

}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
<style type="text/css">
 
  table{
      padding: 0;
      border: none;
      border-collapse: collapse;
      border: 1px solid #ddd;
  }
  table td {
      padding: 0;
      border: none;
      border-collapse: collapse;
  }
  table th {
  background-color: #FFFAFA;
  }
</style>
