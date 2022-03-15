<?php 

	include_once('connection.php');

	$num_per_page=05;


	if(isset($_GET["page"]))
	{
		$page=$_GET["page"];
	}
	else
	{
		$page=1;
	}

	$start_from=($page-1)*05;

	$sql="select * from employees limit $start_from,$num_per_page";
	$rs_result=mysql_query($sql);


?>

<!DOCTYP html>
<html>
    <head>
        <title> Pagination in PHP</title>
    </head>
<body>
    
    <table align="center" border="1px">
        <tr>
            <th> Employee ID </th>
            <th> Employee Name </th>
            <th> Employee Email </th>
            <th> Employee Salary </th>
        </tr>
        
        <?php 
        
        while($rows=mysql_fetch_array($rs_result))
        {
        ?>
        
        <tr>
            <td><?php echo $rows['Employee_ID'];?></td>
            <td><?php echo $rows['Name'];?></td>
            <td><?php echo $rows['Email'];?></td>
            <td><?php echo $rows['Salary'];?></td>
        </tr>  
        
        <?php     
        }
                
        ?>    
    </table>
    
    <?php 
    
    
    $sql="select * from employees";
    $rs_result=mysql_query($sql);
    $total_records=mysql_num_rows($rs_result);
    $total_pages=ceil($total_records/$num_per_page);
    
    for($i=1;$i<=$total_pages;$i++)
    {
        echo "<a href='index.php?page=".$i."'>".$i."</a>" ;
    }
    
    ?>
    

    
</body>
</html>



<?php 

    require_once('config.php');

    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = 1;
    }

    $num_per_page = 02;
    $start_from = ($page-1)*02;
    
    $query = "select * from pagination limit $start_from,$num_per_page";
    $result = mysqli_query($con,$query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Pagination in Php With Next and Previous</title>
</head>
<body>
        <table class="table table-striped">
            <tr>
                <td> User ID </td>
                <td> User Name </td>
                <td> User Email </td>
            </tr>
            <tr>
                <?php 
                    while($row=mysqli_fetch_assoc($result))
                    {
                ?>
                    <td> <?php echo $row['ID'] ?> </td>
                    <td> <?php echo $row['UserName'] ?> </td>
                    <td> <?php echo $row['Email'] ?> </td>
                   
            </tr>
         <?php 
                }
                ?>
        </table>

        <?php 
        
                $pr_query = "select * from pagination ";
                $pr_result = mysqli_query($con,$pr_query);
                $total_record = mysqli_num_rows($pr_result );
                
                $total_page = ceil($total_record/$num_per_page);

                if($page>1)
                {
                    echo "<a href='index.php?page=".($page-1)."' class='btn btn-danger'>Previous</a>";
                }

                
                for($i=1;$i<$total_page;$i++)
                {
                    echo "<a href='index.php?page=".$i."' class='btn btn-primary'>$i</a>";
                }

                if($i>$page)
                {
                    echo "<a href='index.php?page=".($page+1)."' class='btn btn-danger'>Next</a>";
                }
        
        ?>

        
</body>
</html>