<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artemis</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="css/main.css">

</head>
<body>
<div id="main"><!--phần bao toàn bộ khung website-->
<div><!--phần header-->
 <div id="title"><!--phần logo, tìm kiếm, giỏ hàng-->
  <ul>
        <li class="shop"><a>Artemis</a></li>
        <li class="search">
          <input type="text" class="searchTerm" placeholder="Type">
          <button type="submit" class="searchButton">
            <a class="find"><i class="fa fa-search"></i></a>
          </button>
        </li>
        <li class="cart"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
  </ul>
 </div><!--end phần logo, tiềm kiếm, giỏ hàng-->

 <hr></hr>

 <div><!--phần menutop-->
  <ul id="banner">
    <div class="dropdown"><a href="main.php"><i class="fa fa-home"></i>Trang Chủ</a></div>
     <div class="dropdown">
       <div class="dropbtn">Nam</div>
        <div class="dropdown-content">
         <a href="aonam.php">Áo</a>
         <a href="quannam.php">Quần</a>
        </div>
      </div>
    <div class="dropdown">
      <div class="dropbtn">Nữ</div>
        <div class="dropdown-content">
          <a href="aonu.php">Áo</a>
          <a href="quannu.php">Quần</a>
        </div>
    </div>
    <div class="dropdown">
      <div class="dropbtn"><a><i class="fa fa-user"></i></a></div>
        <div class="dropdown-content">
          <a href="user.php">Người dùng</a>
          <a href="index.php">Đăng xuất</a>
      </div>
    </div>
  </ul>
 </div><!--end phần menutop-->
</div><!--end phần header-->

 <div id="maincontent"><!--phần bao của content-->
    <div id="content">
        <div class="dinhdang"><!--phần định dạng chung cho content và right-->
            <h2>Quần nam</h2>
            <div id="noidung"><!--định dạng cho nội dung website-->
            <li class="zoom"><a href="#"><img src="img/quannam1.jpg"><span>Quần nam đen thui<br>(200.000đ)</span> </a></li>
            <li class="zoom"><a href="#"><img src="img/quannam2.jpg"><span>Quần nam đen thui<br>(200.000đ)</span> </a></li>
            <li class="zoom"><a href="#"><img src="img/quannam3.jpg"><span>Quần nam đen thui<br>(200.000đ)</span> </a></li>
            
            <li class="zoom"><a href="#"><img src="img/quannam4.jpg"><span>Quần nam xanh lè<br>(200.000đ)</span> </a></li>
            <li class="zoom"><a href="#"><img src="img/quannam5.jpg"><span>Quần nam xanh lè<br>(200.000đ)</span> </a></li>
            <li class="zoom"><a href="#"><img src="img/quannam6.jpg"><span>Quần nam xanh lề<br>(200.000đ)</span> </a></li>
            </div><!--end định dạng cho nội dung website-->
        </div><!--end phần định dạng chung cho content và right-->
    </div>
 </div><!--end phần bao content-->

 <div id="right"><!--phần menu bên phải của website-->
    <div class="dinhdang"><!--phần định dạng cho content và right-->
    <h2>Khuyến mãi</h2>
        <div id="menuright">      
           <li class="zoom"><a href="#"><img src="img/kmquannam1.jpg"><span>Quần nam thấy dơ dơ<br>(200.000đ)</span> </a></li> 
           <li class="zoom"><a href="#"><img src="img/kmquannam2.jpeg"><span>Quần nam màu cứt bò<br>(200.000đ)</span> </a></li> 
        </div>
    </div><!--end phần định dạng cho content và right-->
 </div><!--end phần menu bên phải của website-->

 <div id="footer"><!--phần cuối trang-->
 <hr></hr>
    <div class="dropdown"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></div>
    <div class="dropdown"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></div>
    <div class="dropdown"><a href="https://www.facebook.com/"><i class="fa fa-snapchat"></i></a></div>
    <p><strong>Gmail:</strong> tnhanh5@gmail.com</p>
    <P><strong>Phone number:</strong> 0869889453<p>
 </div><!--end phần cuối trang-->
</div><!--end bao toàn bộ khung website-->
</body>
</html>