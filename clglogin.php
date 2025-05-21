<?php
   $link=7;
   include('assets/includes/header.php');?>  
<section>
   <center> <h1>REGISTER YOUR COLLEGE</h1></center>
    <div>
    <center><form  action ="admin/Assets/process/clgdetail.php" method="POST">
    <div class="mb-3">
    <label style=""> college ID</label>
    <input type="number" class="form-control" autocomplete="off" name="clg_id" style="width:50%;" >
    </div>
    <div class="mb-3">
    <label style=""> college Name</label>
    <input type="text" class="form-control" autocomplete="off" name="clg_name"style="width:50%; " >
    </div>
    <div class="mb-3">
    <label style=""> University Name:</label>
    <input type="text" class="form-control" autocomplete="off" name="university_name"style="width:50%; " >
    </div>
    <div class="mb-3">
    <label style="">Games:</label>
    <input type="text" class="form-control" autocomplete="off" name="games"style="width:50%;">
    </div>
    <div class="row">
  <div class="col">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>
    </form></center>
</div>
</section>
<?php include('assets/includes/footer.php');?>