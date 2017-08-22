<form method="post">
输入姓名：<input type="text" name="name"><br>
<input type="submit" value="查询" id="input">
</form>

<?php
header("Content-Type: text/html;charset=utf-8"); 
error_reporting( E_ALL&~E_NOTICE );
include('connect.php');//链接数据库
	//向数据库插入表单传来的值的sql
    $name=$_POST['name'];
    $sql="select * from students where 姓名='$name'";
    mysqli_query($link,'set names utf8');
    $result=mysqli_query($link,$sql);//执行sql
    // 输出数据
    while($row = mysqli_fetch_array($result)) {
        echo "学号: " . $row['学号']. "<br/>" ;
        echo "姓名: " . $row['姓名']. "<br/> " ;
        echo "性别: " . $row['性别']. "<br>";
        echo "出生日期: " . $row['出生日期']. "<br>";
        //echo "身份证号: " . $row['身份证号']. "<br>";
        echo "院系: " . $row['院系']. "<br>";
        echo "专业: " . $row['专业']. "<br>";
        echo "年级: " . $row['年级']. "<br>";
        echo "班级: " . $row['班级']. "<br>";
        echo "政治面貌: " . $row['政治面貌']. "<br>";
        echo "学制: " . $row['学制']. "<br>";
        echo"<br/>";
/*
print_r($row);
echo "<br/>";echo "<br/>";
echo $row[0];echo "<br/>";
echo $row[1];echo "<br/>";
echo $row[2];echo "<br/>";
echo $row[3];echo "<br/>";
echo $row[4];echo "<br/>";
*/
        }
    /*
	echo "<table border='1'>
<tr>
<th>学号</th>
<th>姓名</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['学号'] . "</td>";
  echo "<td>" . $row['姓名'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
*/
    mysqli_close($link);//关闭数据库
?>