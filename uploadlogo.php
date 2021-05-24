
<?php
include 'main.php';

check_loggedin($pdo);

include 'header.php';
?>

<?php 
 
if(isset($_POST['submit'])){

  // Count total files
  $countfiles = count($_FILES['files']['name']);
 
  // Prepared statement
  $query = "INSERT INTO images (name,image) VALUES(?,?)";

  $statement = $pdo->prepare($query);

  // Loop all files
  for($i=0;$i<$countfiles;$i++){

    // File name
    $filename = $_FILES['files']['name'][$i];

    // Location
    $target_file = 'uploads/'.$filename;

    // file extension
    $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);

    // Valid image extension
    $valid_extension = array("png","jpeg","jpg");

    if(in_array($file_extension, $valid_extension)){

       // Upload file
       if(move_uploaded_file($_FILES['files']['tmp_name'][$i],$target_file)){

          // Execute query
	  $statement->execute(array($filename,$target_file));

       }
    }
 
  }
  echo "


        <div class='container'>
            <div class='row'>
                <div style='margin-top: 10rem;' class='col '>				
                  <img style='box-shadow: 1rem 1rem 1rem lightgray;' src='./images/carte pro.png' width='80%' />
                </div>

                <div  class='col designform'>	
                    <h2> votre Logo a été envoyer avec succées.</h2>


                    <form method='post' action='form.php' enctype='multipart/form-data'>
                      <input style='margin-top:3rem;' type='submit' value='suivant'  />
                    </form>
                </div>

            </div>

         </div>
              
        ";


  exit();

}
?>


<div class="container">
	<div class="row">
		<div style="margin-top: 10rem;" class="col ">				
			<img style="box-shadow: 1rem 1rem 1rem lightgray;" src="./images/carte pro.png" width="80%" />
		</div>

		<div  class="col designform">	
			

				<h2 style="text-align:center;">Logo de votre entreprise au dos de la carte</h2>
                <form method='post' action='' enctype='multipart/form-data'>
                    <input type='file' name='files[]' multiple />


                    <input style="margin-top:3rem;" type='submit' value='sélectionner' name='submit' />
                </form>







		</div>

	</div>
</div>


<?php
include 'footer.php';
?>

	



