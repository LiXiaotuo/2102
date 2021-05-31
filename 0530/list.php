<?php
// 链接数据库
$link = new mysqli('localhost','root','root','php2102');

// 查询的sql语句
$sql = "select * from goods";

// 执行
$res = mysqli_query($link,$sql);

// 处理结果集
$arr = mysqli_fetch_all($res);
// echo "<pre>";print_r($arr);echo "</pre>";//测试

?>

<table border="1">
    <tr>
        <td>ID</td>
        <td>姓名</td>
        <td>年龄</td>
        <td>住址</td>
    </tr>
    <?php foreach($arr as $k=>$v){ ?>
    <tr>
        <td><?php echo $v['0'];?></td>
        <td><?php echo $v['1'];?></td>
        <td><?php 
            if($v['2']<18){
                echo "未成年";
            }else{
                echo "成年";}
            ;?>
        </td>
        <td><?php echo $v['3'];?></td>
    </tr>
<?php }?>

</table>