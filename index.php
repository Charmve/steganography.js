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

