<?php
    require 'header.php';
    $bill_id = mysqli_real_escape_string($con,$_GET['bill_id']);
    //echo $bill_id;
?>  
    <center><h1 class="mt-5">ອໍເດີສ່ວນບຸກຄົນ</h1></center>
    <div class="container mt-3">
        <?php $sql = "SELECT * FROM bill WHERE bill_id = $bill_id";
            $rs = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($rs);
            $bill_id = $row['bill_id'];
            // echo $bill_id;
        ?>
    <h3>ຊື່ລູກຄ້າ : <?php echo $row['cus_name'] ?> </h3>
    <h3>ນາມສະກຸນ : <?php echo $row['cus_lname'] ?></h3>
    <h3>ເບີໂທ : <?php echo $row['phone'] ?></h3>
    <h3>ທີ່ຢູ່ : <?php echo $row['location'] ?></h3>
        <table class="table">
            <thead>
                <tr>
                    <th><h5>ຊື່ສິນຄ້າ</h5></th>
                    <th><h5>ຮູບພາບ</h5></th>
                    <th><h5>ລາຄາ</h5></th>
                    <th><h5>ຈຳນວນ</h5></th>
                    <th><h5 style="width: 100px">ລາຄາລວມ</h5></th>
                </tr>
            </thead>
        
            <tbody>
                <?php 
                    $sql = "SELECT * FROM products JOIN bill_detail ON products.pro_id = bill_detail.pro_id WHERE bill_id = $bill_id";
                    $rs = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($rs)) { ?>
                <tr>
                    <td> <?php echo $row['pro_name'] ?></td>
                    <td> <img src="img/<?php echo $row['pro_img']?> "style=" width: 20%; height: 20%;"  alt="" class="mb-3"></td>
                    <td> <?php echo $row['pro_price'] ?></td>
                    <td> <?php echo $row['pro_qty'] ?></td>
                    <td> <?php echo $row['total'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php require 'footer.php'?>