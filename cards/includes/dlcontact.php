<?php

    include_once 'includes/dbh.inc.php';
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

 ?>





<!DOCTYPE html>
<html>
        <head>
                <link rel="stylesheet" type="text/css" href="styles/style.css">
            <title>test</title>
        
        </head>
        <body style=" text-align: center;
    font-family: arial;">
        
                
                
             
                
                          

                                               <?php 

                                                                        $id = $_GET['id'];
                                                                        $sql = "SELECT contactfile FROM informations WHERE id = $id;";
                                                                        $result = mysqli_query($conn, $sql);
            
                                                                        $row = mysqli_fetch_assoc($result)
                                                                        
                                                                
 
                                                ?>
 
                                                            <textarea id="text">
                                                                                    <?php    
                                                                                           echo  $row ['contactfile'] ."<br>"; 
                                                                                    ?>
                                                            </textarea>
                                                            
                                                            <input type="button" id="btn" value="Download" /> 
 
 
                                                        
                                               

























  <script> 

                function download(file, text) { 

  

                    //creating an invisible element 

                    var element = document.createElement('a'); 

                    element.setAttribute('href', 'data:text/plain;charset=utf-8, ' 

                                         + encodeURIComponent(text)); 

                    element.setAttribute('download', file); 

  

                    //the above code is equivalent to 

                    // <a href="path of file" download="file name"> 

  

                    document.body.appendChild(element); 

  

                    //onClick property 

                    element.click(); 

  

                    document.body.removeChild(element); 

                } 

  

                // Start file download. 

                document.getElementById("btn").addEventListener("click", function() { 

                    // Generate download of hello.txt file with some content 

                    var text = document.getElementById("text").value; 

                    var filename = "contact.vcf"; 

  

                    download(filename, text); 

                }, false); 

            </script> 























                            
        </body>
</html>
