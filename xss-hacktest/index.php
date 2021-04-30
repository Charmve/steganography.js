\\XSS反射演示
<form action="" method="get">
    <input type="text" name="xss"/>
    <input type="submit" value="test"/>
</form>
<?php
$xss = @$_GET['xss'];
if($xss!==null){
    echo $xss;
}
?>

<script>
<?php
    if(!empty($alarmList)){ ?>
        //这里的src指向声音文件
        $("#music").html('<embed id = "soundControl1"  src = "./style/baojing.mp3"  mastersound hidden = "true"  loop ="true"  autostart = "true"></embed>');
    <?php }else{ ?>
        $("#music").html("");
?>
</script>
<div id="music"></div>
