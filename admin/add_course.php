
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
  <h1 style="color:blue; text-align: center; " >Update Course Name</h1>  
  <div class="container my-5">
     <form action="add_course_info.php" method="POST">
    <div class="form-group">
    <label for="Course Name" class="form-label">Course Name:</label>
    <input type="text" class="form-control"  placeholder="" name="courses">
    </div>
    <div class="form-group">
    <label for="pwd" class="form-label">Duration:</label>
    <input type="text" class="form-control"  placeholder="" name="duration">
    </div>
    <div class="form-group">
    <label for="pwd" class="form-label">Course level:</label>
    <input type="text" class="form-control"  placeholder="" name="clevel">
    </div>
    <div class="form-group">
    <label for="tol" class="form-label">Total Tuition Fees:</label>
    <input type="text" class="form-control"  placeholder="" name="t_tuition_fees">
  </div>
    <div class="form-group">
    <label for="ad" class="form-label">Eligibility:</label>
    <input type="text" class="form-control"  placeholder="" name="eligibility">
    </div>
    <div class="form-group">
    <label for="ad" class="form-label">Link:</label>
    <input type="text" class="form-control"  placeholder="" name="wlink">
    </div>
  <form ... onsubmit="return checkForm(this);">

<p><input type="checkbox" required name="terms"> <u>Please verify your information before submit</u></p>
<p><input type="submit" class="btn btn-primary"></p>
</form>
</form>
 </div>
 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>