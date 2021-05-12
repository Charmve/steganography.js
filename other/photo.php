<?php
//允许跨域
header("Access-Control-Allow-Origin:*");
echo base64();
function base64()
{
    //接收 base64 数据
    $image = $_POST['imegse'];
    if (empty($image)) {
        return null;
    }
    //设置图片名称
    $imageName = date("His", time()) . "_" . rand(1111, 9999) . '.png';
    //判断是否有逗号 如果有就截取后半部分
    if (strstr($image, ",")) {
        $image = explode(',', $image);
        $image = $image[1];
    }
    //设置图片保存路径
    $path = "./" . getIp() . '/' . date("Ymd", time());
    //判断目录是否存在 不存在就创建
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
    }
    //图片路径
    $imageSrc = $path . "/" . $imageName;
    //生成文件夹和图片
    $r = file_put_contents($imageSrc, base64_decode($image));
    if (!$r) {
        return 0;
    } else {
        return 1;
    }
}
function getIp()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}