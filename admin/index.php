<?php 
    require 'check_admin.php';
    require 'header.php';
?>
    <center><h1 class="mt-5">ອໍເດີທັງໝົດ</h1></center>
    <div class="container mt-5">
            <table class="table">
                <thead>
                    <tr class="table">
                        <th>ອໍເດີໄອດີ</th>
                        <th>ວັນທີເດືອນປີ</th>
                        <th>ລາຍລະອຽດສິນຄ້າ</th>
                        <th>ລົບສິນຄ້າ</th>
                        <th>ຢືນຢັນການສົ່ງສິນຄ້າ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM bill WHERE status = 2";
                        $rs = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($rs)){
                    ?>
                    <tr>
                        <td><?php echo $row['bill_id']?></td>
                        <!-- <td><?php echo $row['bill_date']?></td> -->
                        <td><?php echo date("d-m-Y", strtotime($row["bill_date"]));?></td>
                        <td><a href="oder_detail.php?bill_id=<?php echo $row['bill_id']?>" class="btn btn-success">ເບີ່ງລາຍລະອຽດ</a></td>
                        <td><a href="delete.php?bill_id=<?php echo $row['bill_id']?>" class="btn btn-danger">ລົບ</a></td>
                        <td><a href="send.php?bill_id=<?php echo $row['bill_id']?>" class="btn btn-primary">ຢືນຢັນ</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>
<?php require 'footer.php' ?>