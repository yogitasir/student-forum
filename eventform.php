
<?php
   $link=7;
   include('assets/includes/header.php');?>  
   <section>
<div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="assets/images/Efficient running mechanics.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1 style="color:black;">Participant In Our Club</h1>
                  <p></p>
                </div>
              </div>
</section>
<section>
  <div style="background-color:black;">
  <center><h2 style="color:white;">Registration Form</h2></center>
    
    <div class="container my-5 container-fluid" style="border-style: solid; border-color: red;">
    <form  action ="admin/Assets/process/connect.php" method="POST">
    <div class="row">
      <div class ="col">
    <div class="mb-3">
    <label style="color:white;">ID</label>
    <input type="number" class="form-control" autocomplete="off" name="id"  >
    </div>
  <div class="mb-3">
    <label style="color:white;">First name</label>
    <input type="text" class="form-control" autocomplete="off"  name="fname">
</div>
<div class="mb-3">
    <label style="color:white;">Middle name</label>
    <input type="text" class="form-control" autocomplete="off"  name="mname">
  </div>
  <div class="mb-3">
    <label style="color:white;">Last name</label>
    <input type="text" class="form-control" autocomplete="off"  name="lname">
  </div>
  
  <div class="mb-3">
    <label style="color:white;">Event Name:</label>
    <input type="text" class="form-control"autocomplete="off"  name="event">
</div>
  
  <div class="mb-3 form-check">
    
    <label style="color:white;">Event Date</label>
<input type ="date" class="form-control" autocomplete="off"  name="edate" placeholder="If YOU know date">
</div>
<div class="mb-3 form-check">
    
    <label style="color:white;">Participants College Name:</label>
<input type ="text" class="form-control" autocomplete="off"  name="college" >
</div>
<div class="mb-3 form-check">
    <label style="color:white;">Participants Has Any HealthIssue:</label>
<input type ="text" class="form-control" autocomplete="off"  name="healthissue">
</div>
<div class="mb-3 form-check">
    <label style="color:white;">Participants Mobile No:</label>
<input type ="text" class="form-control" autocomplete="off"  name="mobileno">
</div>
</div>
<div class="col">

<div class="mb-3 form-check">
    
    <label style="color:white;">If Any HealthIssue Specify:</label>
<input type ="text" class="form-control" autocomplete="off"  name="comment">
</div>
<div class="mb-3 form-check">
    
    <label style="color:white;">NO.of Players:</label>
<input type ="number" class="form-control" autocomplete="off"  name="noplayers">
</div>
<div class="mb-3">
<label style="color:white;">age</label>
    <input type="number" class="form-control" autocomplete="off"  name="age">
  </div> 
<div class="mb-3">
    <label style="color:white;">Height</label>
    <input type="number" class="form-control" autocomplete="off"  name="height">
  </div>


  <div class="mb-3">
    <label style="color:white;" >If You Have HealthCertificate:</label>
    <input type="text" class="form-control"autocomplete="off"  name="certificate">
</div>
  <div class="mb-3">
    <label style="color:white;">Coach Name:</label>
    <input type="text" class="form-control"  autocomplete="off"  name="coachname" >
  </div>
  <div class="mb-3">
    <label style="color:white;">Coach No:</label>
    <input type="number" class="form-control"  autocomplete="off"  name="coachno" >
  </div>
  <div class="mb-3">
    <label style="color:white;">city</label>
    <input type="text" class="form-control" autocomplete="off"  name="city" >
  </div>
  
<div class="row">
  <div class="col">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>
<div class="col">

<a class="btn btn-primary " type="reset" href="..\sportsevent\admin\profile-list.php">Registered profiles</a>
              
            
</div>
</form>
</div>
</div>
</div>
</div>
</section>
<?php include('assets/includes/footer.php');?>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script>
        // Instantiate the Bootstrap carousel
$('.multi-item-carousel').carousel({
  interval: false
});

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});

      </script>
  </body>
</html>













