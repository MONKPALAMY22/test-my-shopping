<?php 
session_start();
require 'header.php'; 
?>

<?php 
$bill_id = $_SESSION['bill_id'];
$sql = "SELECT * FROM products JOIN bill_detail ON products.pro_id = bill_detail.pro_id WHERE bill_id = $bill_id";
$rs = mysqli_query($con,$sql);

?>
<div class="container mt-3">
  <h2> BILL ID: <?php echo $_SESSION['bill_id']?></h2>
<table class="table" border= "1">
    <thead>
        <tr class="table">
        <th><h5>ຊື່ສິນຄ້າ</h5></th>
        <th><h5>ຮູບພາບ</h5></th>
        <th><h5>ລາຄາ</h5></th>
        <th><h5>ຈຳນວນ</h5></th>
        <th><h5 style="width: 100px">ລາຄາລວມ</h5></th>
        <th><h5>ອັບເດດ</h5></th> 
        <th><h5>ລົບ</h5></th>
      </tr>
    </thead>
   
    <tbody class="">
      <tr>
        <?php while($row = mysqli_fetch_array($rs)) { ?>
        <td> <?php echo $row['pro_name'] ?></td>
        <td> <img src="img/<?php echo $row['pro_img']?> "style=" width: 20%; height: 20%;"  alt="" class="mb-3"></td>
        <td> <?php echo $row['pro_price'] ?></td>
        <td> <?php echo $row['pro_qty'] ?></td>
        <td> <?php echo $row['total'] ?></td>
        <td><a style="width: 100px;" href="edit.php?pro_id=<?php echo $row['pro_id']?>&&bill_id=<?php echo $bill_id ?>"class="btn btn-primary fa fa-edit"> ແກ້ໄຂ</a></td> 
        <td><a style="width: 100px;" href="delete.php?pro_id=<?php echo $row['pro_id']?>&&bill_id=<?php echo $bill_id ?>"class="btn btn-danger far fa-trash-alt"> ລົບ</a></td>  
      </tr>
      <?php } ?>
    </tbody>
</table>
<a href="confirm.php" class="btn btn-warning">Confirm</a>
</div>
<?php 
require 'footer.php';
?>