<?php 
session_start();
require 'header.php'; 

?>

<?php

      $bill_id = MYSQLI_REAL_ESCAPE_STRING($con,$_GET['bill_id']);
      $pro_id = MYSQLI_REAL_ESCAPE_STRING($con,$_GET['pro_id']);
      $sql = "SELECT * FROM products JOIN bill_detail ON products.pro_id = bill_detail.pro_id WHERE bill_id = $bill_id AND bill_detail.pro_id= $pro_id";
      
      $rs = MYSQLI_QUERY($con,$sql);
      $row = MYSQLI_FETCH_ARRAY($rs);

?>

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img-border">
                    <img class="img-fluid" src="img/<?php echo $row['pro_img'] ?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="display-6 mb-3">
                        <span class="text-primary">ລາຄາ <span id="price"><?php echo $row['pro_price'] ?></span> KIP
                    </h1>
                    <h4 class="mb-3">ຊື່ສິນຄ້າ <?php echo $row['pro_name'] ?></h4>
                    <h5 class="mb-3">ຈຳນວນ</h5>
                    <div class="form-group">
                    <input id="qty"type="number" class="mb-3" min="1" max="1000000000"value="<?php echo $row['pro_qty']?>" step="1" />
                    </div>
                    <a class="btn btn-primary add" href="#">ບັນທຶກ</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?php require 'footer.php' ?>

<script>
         $(document).ready(function(){
               $(".add").click(function(){
                   var pro_id = <?php echo $pro_id ?>;
                   var bill_id = <?php echo $bill_id ?>;
                   var price = document.getElementById("price").innerHTML;
                   var qty = document.getElementById("qty").value;
                   var data = "pro_id=" + pro_id + "&bill_id=" + bill_id +"&price=" + price + "&qty=" + qty;
                  //alert(data);
                  
                  $.ajax({
                type : "POST",
                url : "edit_pc.php",
                data : data,
                success:function(result){
                 // alert(result)
                 Swal.fire({
                 title: 'ທ່ານແນ້ໃຈບໍທີ່ຈະປ່ຽນແປງຂໍ້ມູນ?',
                 showDenyButton: true,
                 confirmButtonText: 'ແນ້ໃຈ',
                 }).then((result) => {
                 if (result.isConfirmed) {
                 Swal.fire('ສຳເລັດ!', '', 'success')
                 window.location.href = '#';
                 } else if (result.isDenied) {
                 Swal.fire('Changes are not saved', '', 'info')
                 }
                 })
               }})
              })
               })
     </script>