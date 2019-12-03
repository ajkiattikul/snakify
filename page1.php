<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Snakify</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet" type="text/css">
  <link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lgborder-bottom" style="background-color:#FF8000">
        <button class="btn btn-primary" id="menu-toggle" style="background-color:#FFB900"><font color="#FFFFFF">Snakify</font></button>
        <font color="#FFFFFF">Computer Science</font>

        <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>-->
      </nav>
<!---------------------------------------------------------------------------------------------->
<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right border-warning" id="sidebar-wrapper">
    
      <div class="list-group list-group-flush">
        <a href="index.php" class="list-group-item list-group-item-action bg-light">Home</a>
        
        <a href="page1.php" class="list-group-item list-group-item-action" style="background:#FFB900"><font color="#FFFFFF">PageMenu1</font></a>
        <span class="border border-warning">
        	<ul class="list-group-item bg-light">
            	<a href="#" class="list-group-item list-group-item-action">SubMenu1</a>
                <a href="#" class="list-group-item list-group-item-action">SubMenu2</a>
                <a href="#" class="list-group-item list-group-item-action">SubMenu3</a>
               
            </ul>
             </span>
            
            
        <a href="#" class="list-group-item list-group-item-action bg-light">PageMenu3</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">PageMenu4</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">PageMenu5</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">PageMenu6</a>
        
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
<!---------------------------------------------------------------------------------------------->
      <div class="container-fluid">
        <h1 class="mt-4">Head</h1>
        <!--<p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
