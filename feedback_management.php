<link rel="stylesheet" href="css/bootstrap.css">
<div id="top">
        <form name="frm" method="post" action="">
        <h1>Feedback</h1>
        <table id="tablefeedback" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><strong>No.</strong></th>
                    <th><strong>Username</strong></th>
                    <th><strong>email</strong></th>
                    <th><strong>content</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
             </thead>

			<tbody>
            <script language="javascript">
            function deleteConfirm(){
                if(confirm("Are you sure to delete!")){
                    return true;
                }
                else{
                    return false;
                }
            }
            </script>
            <?php
            include_once("connection.php");
            if(isset($_GET["function"])=="del"){
                if(isset($_GET['id'])){
                    $id=$_GET["id"];

                    mysqli_query($conn,"DELETE FROM feedback WHERE Feed_ID='$id'");
                    
                }
            } 
            ?>
            <?php
            include_once("connection.php");
            $No=1;
            $result =mysqli_query($conn,"Select * from feedback");
            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
            ?>
			<tr>
              <td class="cotCheckBox"><?php echo $No;?></td>
              <td><?php echo $row["Username"]; ?></td>
              <td><?php echo $row["email"]; ?></td>
              <td><?php echo $row["content"]; ?></td>

              <td style='text-align:center'>
              <a href="?page=feedback_management&&function=del&&id=<?php echo $row['Feed_ID'];?>" onclick="return deleteConfirm()">
              <img src='images/delete.png' border='0' /></td>
            </tr>
            <?php
                $No++;
                }
            ?>
			</tbody>
        </table>  
        
        
        <!--Nút Thêm mới , xóa tất cả-->
        <div class="row" style="background-color:#FFF"><!--Nút chức nang-->
            <div class="col-md-12">
            	
            </div>
        </div><!--Nút chức nang-->
 </form>
 </div>

   