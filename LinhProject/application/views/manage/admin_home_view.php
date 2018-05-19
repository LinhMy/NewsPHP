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
  <a href="<?php $base_url ?>/LinhProject/listuser"  class="w3-bar-item w3-button" style="background: #CD8162"><h5>Quản lý người dùng</h5></a>
  <a href="<?php $base_url ?>/LinhProject/category"  class="w3-bar-item w3-button"><h5>Quản lý danh mục</h5></a>
  <a href="<?php $base_url ?>/LinhProject/postlist" class="w3-bar-item w3-button"><h5>Quản lý bài viết</h5></a>
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
  <h4> Danh sách người dùng: </h4>
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
                    <th>Tên đăng nhập</th>
                    <th>Họ tên</th>
                    <th>Quê quán</th>
                    <th>Số điện thoại</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
              <!-- Hiểm thị danh sách user -->
                <?php foreach ($listuser as $i => $item) { ?>                    
                <tr>
                    <td><input type="text" value="<?=$i+1?>" class="id"></td>    
                    <td><input type="text" value="<?=$item->username?>" class="username"></td>
                    <td><input type="text" value="<?=$item->fullname?>" class="fullname"></td>
                    <td><input type="text" value="<?=$item->city?>" class="city"></td>
                    <td><input type="text" value="<?=$item->phone?>" class="phone"></td>  
                    <td>
                      <a href="http://localhost/LinhProject/updateuser/<?=$item->id_user ?>" style="text-decoration: none">
                      <input type="image" alt="Sửa" id="image" src="http://localhost/LinhProject/images/icon/writting-ballpen.png" style="width:35%"> 
                    </td>  
                    <td>
                      <a href="http://localhost/LinhProject/admin/home_admin/delete_user/<?=$item->id_user ?>" style="text-decoration: none">
                      <input type="image" alt="Sửa" id="image" src="http://localhost/LinhProject/images/icon/delete.png" style="width:35%"> 
                    </td> 

                </tr>
                <?php } ?>
                 
            </tbody>
        </table>
      <div>
        <a href="<?php $base_url?>/LinhProject/insertuser">Thêm</a>
      </div>
        
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
    margin: 50px 0px;
}
table td {
    padding: 0;
    border: none;
    border-collapse: collapse;
}
</style>
