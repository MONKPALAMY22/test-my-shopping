<?php 
    session_start();
    $bill_id = $_SESSION['bill_id'];
    require 'header.php';
    $sql = "SELECT SUM(total) FROM bill_detail WHERE bill_id = $bill_id";
    $rs = MYSQLI_QUERY($con,$sql);
    $row = MYSQLI_FETCH_ARRAY($rs);
    // echo $row['SUM(total)'];
?>
    <form action="confirm_pc.php" method="POST">
    <input type="hidden" name="total" id="" value="<?php echo $row['SUM(total)'] ?>">
    <div class="container">
    
        <h3 class="mt-3">Confirm order : <?php echo $bill_id?></h3>
        <h5>Youe information</h5>

        <div class="mb-3 mt-3">
            <label for="n" class="form-label">your name:</label>
            <input type="text" name="name" id="n" class="form-control"   placeholder="Enter your name">
        </div>

        <div class="mb-3 mt-3">
            <label for="ln" class="form-label">Last name:</label>
            <input type="text" class="form-control" name="lname" id="ln"  placeholder="Enter your lastname">
        </div>

        <div class="mb-3 mt-3">
            <label for="ph" class="form-label">Phone:</label>
            <input type="text" class="form-control" name="phone" id="ph"  placeholder="Enter your phone">
        </div>

        <div class="mb-3 mt-3">
            <label for="tt" class="form-label">Total:</label>
            <input type="text" require value="<?php echo $row['SUM(total)']?>" class="form-control" name="total" id="tt"  placeholder="Enter your total">
        </div>

        <div class="mb-3 mt-3">
            <label for="st" class="form-label">Status:</label>
            <input type="text" class="form-control" name="status" id="st"  placeholder="Enter your status">
        </div>

        <div class="mb-3">
            <label for="lo" class="form-label">Location:</label>
            <textarea name="location" class="form-control" id="lo" cols="30" rows="5" placeholder="Enter your location"></textarea>
        </div>

         <button class="btn btn-primary">Save</button>

    </div>

<?php require 'footer.php' ?>

