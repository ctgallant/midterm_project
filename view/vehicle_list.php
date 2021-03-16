<html>
<head>
<?php include '../view/header.php'; ?>
<head>
<body>
    <form method="post">
            Sort Vehicle By:  
            <select Vehicle Name='NEW'>  
            <option value="">View All Makes</option>  
            <?php 
                mysql_connect ("localhost","root","");  
                mysql_select_db ("zippyusedautos");  
                $select="vehicles";  
                if (isset ($select)&&$select!=""){  
                $select=$_POST ['NEW'];  
            }  
            ?>  
            <?php  
                $list=mysql_query("SELECT make FROM `makes`");  
            while($row_list=mysql_fetch_assoc($list)){  
                ?>  
                    <option value="<? echo $row_list['make']; ?>"<? if($row_list['make']==$select){ echo "selected"; } ?>>  
                                         <?echo $row_list['make'];?>  
                    </option>
            <select Vehicle Name='NEW'>  
            <option value="">View All Types</option>  
            <?php 
                mysql_connect ("localhost","root","");  
                mysql_select_db ("zippyusedautos");  
                $select="vehicles";  
                if (isset ($select)&&$select!=""){  
                $select=$_POST ['NEW'];  
            }  
            ?>      
            <?php  
                $list=mysql_query("SELECT type FROM `types`");  
            while($row_list=mysql_fetch_assoc($list)){  
                ?>  
                    <option value="<? echo $row_list['type']; ?>"<? if($row_list['type']==$select){ echo "selected"; } ?>>  
                                         <?echo $row_list['type'];?>  
                    </option> 
                    <select Vehicle Name='NEW'>  
            <option value="">View All Classes</option>  
            <?php 
                mysql_connect ("localhost","root","");  
                mysql_select_db ("zippyusedautos");  
                $select="vehicles";  
                if (isset ($select)&&$select!=""){  
                $select=$_POST ['NEW'];  
            }  
            ?>   
            <?php  
                $list=mysql_query("SELECT class FROM `classes`");  
            while($row_list=mysql_fetch_assoc($list)){  
                ?>  
                    <option value="<? echo $row_list['class']; ?>"<? if($row_list['class']==$select){ echo "selected"; } ?>>  
                                         <?echo $row_list['class'];?>  
                    </option>  
                <?  
                }  
                ?>  
            </select>  
            <input type="submit" name="Submit" value="Select" />  
        </form> 
    <?php 
    $sql= "SELECT * FROM `vehicles` WHERE 1"
    ?>
</body>

</html>



 