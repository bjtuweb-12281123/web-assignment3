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
             echo   "<script>alert('��½�ɹ�');</script>";
            
          
            }  
            else 
            {  
                echo "<script>alert('������ע��');</script>"; 
                history.go(-1); 
            }  
        
    
   
?>  