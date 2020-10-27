<?php
$con = mysqli_connect("localhost","root","","ivan") or die(mysql_error());



                            if(isset($_POST['submit']))
                            
							{	

                                $id =$_POST['id'];
					            $name = $_POST['name'];
								$log ="INSERT INTO `ivan1`(`id`, `name`) VALUES ($id, $name)";
								if(mysqli_query($con,$log))
								{
									echo '<script>alert("New Room Added") </script>' ;
											
								}
								
							}
							
								
							?>



<form action="ivan.php" method="post">
    <br>
    <label for="">id</label>
    <input type="text" name="id" id="id"><br>
    <label for="">Name</label>
    <input type="text" name="name" id="name"><br>

    <input type="submit" name="submit" id="submit">



</form>

