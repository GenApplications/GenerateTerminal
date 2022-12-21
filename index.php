<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
if( !isset($_POST['name'])){
	$title = "Home Page";

} else {
	$title = "Command Prompt Finished";
}
?>

  <title><?php
echo "$gcmdname - $title";
?></title>
  <meta charset="utf-8">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="<?php echo $_SERVER['REQUEST_URI']; ?>"  style="width:200px;"> <img src="<?php echo $gcmdlogo ?>" alt="Logo Image"> </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#gcmd-notifications">Notifications</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://github.com/SpotyHost/GenerateTerminal">Source Code</a>
    </li>
  </ul>
</nav>
<div class="modal fade" id="gcmd-notifications">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Notifications</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		<?php
		include 'notifications.php';
		?>
     </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">

          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

<?php 
if( !isset($_POST['name'])){
include 'homepage.php';

} else {
	include 'result.php'; 
}
echo "$gcmdadcode";
?>
<footer>  
<?php 
$year = date("Y"); 
echo "Copyright $year $gcmdowner. ";
?> 
</footer>
</body>
</html>