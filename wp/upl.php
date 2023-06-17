<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Upload</title>
</head>
<body>
  
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a href="home.html" class="navbar-brand ms-auto me-auto">Hamza's</a>
    </nav>
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-0">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Owner Login</h2>
                    <p class="text-white-50 mb-5">Please CHOOSE</p>
                    <form action="upload.php"
                          method="post"
                          enctype="multipart/form-data">
               
                          <input style="" type="file" 
                                 name="my_image" class="form-control form-control-lg mb-5">
                                 <label for="cato">Choose a catagory:</label>
                                 <select name="cato" id="cato"  class="form-control form-control-lg mb-5">
                                  <option value="Mountains">Mountains</option>
                                  <option value="Cars">Cars</option>
                                  <option value="Life">Life</option>
                                  <option value="Art">Art</option>
                                  <option value="Technology">Technology</option>
                                </select>
                   
                          <input type="submit" 
                                 name="submit"
                                 value="Upload"
                                 class="btn btn-outline-light btn-lg px-5">
                      
                    </form>
                  
                  </div>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>