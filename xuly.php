<?php
//Khai báo sử dụng session
session_start();
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
//Xử lý đăng nhập
if (isset($_POST['dangnhap']))
{
//Kết nối tới database
include('connect.php');
  
//Lấy dữ liệu nhập vào
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
  
//Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
if (!$username || !$password) {
echo "<H4><font color=red>Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.</H4>";
exit;
}
  
// // mã hóa pasword
// $password = md5($password);
  
//Kiểm tra tên đăng nhập có tồn tại không
$query = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");

if (mysqli_num_rows($query) == 0) {
echo "<H4><font color=red>Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại!</h4>";
exit;
}
  
//Lấy mật khẩu trong database ra
$row = mysqli_fetch_array($query);
  
//So sánh 2 mật khẩu có trùng khớp hay không
if ($password != $row['password']) {
echo "<H4><font color=red>Mật khẩu không đúng. Vui lòng nhập lại!</h4>";
exit;
}
  
// //Lưu tên đăng nhập
$_SESSION['username'] = $username;
echo '<script language="javascript">; window.location="main.php";</script>';
die();
}
if(isset($_POST['dangky'])){
    //Kết nối tới database
    include('connect.php');
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if (empty($username)) {
    array_push($errors, "Username is required"); 
    }
    // Thực thi câu truy vấn
    $result = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");
    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
    if (mysqli_num_rows($result) > 0)
    {
    echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';
    
    // Dừng chương trình
    die ();
    }
    else {
    $sql = "INSERT INTO user (name, username, password) VALUES ('$name','$username','$password')";
        echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="index.php";</script>';
    
    if (mysqli_query($con, $sql)){
        echo "Tên đầy đủ: ".$_POST['name']."<br/>";
        echo "Tên đăng nhập: ".$_POST['username']."<br/>";
        echo "Mật khẩu: " .$_POST['password']."<br/>";
    }
    else {
        echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
    }
    }
    }
?>