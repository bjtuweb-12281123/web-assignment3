<?php  
    
        $name = $_POST["name"];  
        $password = $_POST["password"];  
       
            mysql_connect("localhost:3306","root","");  
            mysql_select_db("xianghanlilian");  
           
            $sql = "select name,password from namepassword  where name = '$_POST[name]' and password = '$_POST[password]'";  
            $result = mysql_query($sql);  
            $num = mysql_num_rows($result);  
            if($num)  
            {  
             echo   "<script>alert('登陆成功');</script>";
            
          
            }  
            else 
            {  
                echo "<script>alert('请重新注册');</script>"; 
                history.go(-1); 
            }  
        
    
   
?>  