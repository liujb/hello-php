<?php
    $query = "DELETE FROM user WHERE name='liujb';";//#号代表单引号，使用单引号才是正确的
    $result = mysql_query($query);
           
    if(!$result){
        echo "Error!";
    }else{
        echo "Success!";
        mysql_close($conn);//关闭数据库连接
    }
?>