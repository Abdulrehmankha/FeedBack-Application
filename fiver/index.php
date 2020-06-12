<?php  

session_start();
// if (!isset($_SESSION['username'])) {
  
// }

$status = "This is my status";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Naturals</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <style type= text/css>
      .myButton{
      display: none;
    }
    .myButton1{
    display: none;
    }
    .myButton2{
    display: none;
    }
    #show_data{
      display: none;
    }

    #update_1{
      display: none;
    }
    #update_2{
      display: none;
    }
    #update_3{
      display: none;
    }

    .b6{
      display: none;
    }

    .b7{
      display: none;
    }

    .b8{
      display: none;
    }
    .bx1{
    border: 1px solid #000000;
  }
    .bx1 h3{
    border: 1px solid #000000;
  }

  .bx2{
    border: 1px solid #000000;
  }
    .bx2 h3{
    border: 1px solid #000000;
  }

  .bx3{
    border: 1px solid #000000;
  }
    .bx3 h3{
    border: 1px solid #000000;
  }

  .bx4{
    border: 1px solid #000000;
  }
    .bx4 h3{
    border: 1px solid #000000;
  }

  .bx5{
    border: 1px solid #000000;
  }
    .bx5 h3{
    border: 1px solid #000000;
  }

  .bx6{
    border: 1px solid #000000;
  }
    .bx6 h3{
    border: 1px solid #000000;
  }

    .b{
    margin-left: 15% !important;
    }   
    .log_in{
      display: none;
    }
    .off{
      display: none;
    }
    mark{
      background-color: black;
      color: #ffffff;
    }
    .mark1{
      display: none;
    }
    .mark2{
      display: none;
    }
    .mark1{
      display: none;
    }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 border">
                <br/>
                <h4>Have An Account?</h4>
                <div class="alert alert-success log_in" role="alert">
                You are Logged In Successfully...
                </div>
                <form action="validation.php" method="post" class="was-validated">
                    <div class="form-group row">
                      <label for="user" class="col-sm-2 col-form-label">Username: </label>
                      <div class="col-sm-10">
                        <input type="text" name="user" class="form-control" id="user" placeholder="enter name" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Password1" class="col-sm-2 col-form-label">Password: </label>
                      <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="Password1" placeholder="enter password" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary button sign" value="Sign In">Sign in</button>
                      </div>
                    </div>
                  </form>
                  <!-- Sign up Form here -->
                  <br/>
                  <h4>Don't Have An Account?</h4>
                  <div class="alert alert-success off" role="alert">
                      You are Registered Successfully...
                  </div>
                  <form action="registration.php" method="post" class="was-validated">
                    <div class="form-group row">
                      <label for="newuser" class="col-sm-2 col-form-label">Username: </label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input" name="user" id="newuser" placeholder="enter name" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Password2" class="col-sm-2 col-form-label">Password: </label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control input"  name="password" id="Password2" placeholder="enter password" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-danger button sig_off" value="Sign Up">Sign Up</button>
                      </div>
                    </div>
                  </form>

                  <!-- signup form ends here -->
                 
            </div>
            
            <div class="col-md-8 border">

            <!-- php code for welcome user -->
            
            <div class="col-sm-12">
				    <h3>Welcome! To Our app.</h3>
				    <a href="logout.php"> Logout?</a>
			      </div>

            <!-- end php welcome user -->
                <section id="anim">
                  <!------------------------------------------------------drag and drop animal start --------------------------->
                <ul id="sortable">
                <li id="item-1" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                <div class="box1" >

                  
                  
                    <h3><mark class="mark1">*Animal</mark></h3>
                    
                    <button onclick="bold()" class="b"><i class="fa fa-bold" aria-hidden="true">B</i></button>
                    <button onclick="italic1()" class="i"><i class="fa fa-italic" aria-hidden="true">I</i></button>
                    <button onclick="underline2()" class="u"><i class="fa fa-underline" aria-hidden="true">U</i></button>
                    
                    <!-- start animal form -->
                    <center>
                    <form method="POST" class="mb-3 myForm was-validated" action="insert.php" id="form1">
                    <div class="col-md-9">
                    <textarea rows="5" cols="50" id="description-box" class="description-box3 description-box6 form-control is-invalid" name="animal_desc" required>

                   </textarea>
                   <div class="invalid-feedback">
                      Please enter a message in the textarea.
                     </div>
                   <div class="form-status">
                    <?php echo $status ?>
                    </div>
                   </div>
                   </form>
                   </center>
                   <!-- end animal form -->
                   
                  
                  

                </div>
                </li>


                <!------------------------------------------------------drag and drop animal1 start --------------------------->

                <li id="item-2" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                <div class="bx1" >

                  
                    
                    <button onclick="bold()" class="b"><i class="fa fa-bold" aria-hidden="true">B</i></button>
                    <button onclick="italic1()" class="i"><i class="fa fa-italic" aria-hidden="true">I</i></button>
                    <button onclick="underline2()" class="u"><i class="fa fa-underline" aria-hidden="true">U</i></button>
                    
                    <!-- start animal form -->
                    <center>
                    <form method="POST" class="mb-3 was-validated" action="" id="form4">
                    <div class="col-md-9">
                    <textarea rows="5" cols="50" id="description-box" class="description-box3 description-box6 form-control is-invalid" name="animal_desc" required>

                   </textarea>
                   <div class="invalid-feedback">
                      Please enter a message in the textarea.
                     </div>
                   <div class="form-status">
                    <?php echo $status ?>
                    </div>
                   </div>
                   </form>
                   </center>
                   <!-- end animal form -->
                   
                  
                  

                </div>
                </li>


                <!------------------------------------------------------drag and drop animal2 start --------------------------->
                <li id="item-3" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                <div class="bx2" >

                    
                    <button onclick="bold()" class="b"><i class="fa fa-bold" aria-hidden="true">B</i></button>
                    <button onclick="italic1()" class="i"><i class="fa fa-italic" aria-hidden="true">I</i></button>
                    <button onclick="underline2()" class="u"><i class="fa fa-underline" aria-hidden="true">U</i></button>
                    
                    <!-- start animal form -->
                    <center>
                    <form method="POST" class="mb-3 was-validated" action="" id="form5">
                    <div class="col-md-9">
                    <textarea rows="5" cols="50" id="description-box" class="description-box3 description-box6 form-control is-invalid" name="animal_desc" required>

                   </textarea>
                   <div class="invalid-feedback">
                      Please enter a message in the textarea.
                     </div>
                   <div class="form-status">
                    <?php echo $status ?>
                    </div>
                   </div>
                   </form>
                   </center>
                   <!-- end animal form -->
                   
                  
                  

                </div>
                </li>
                </ul>
                <button id="btn">Save Position</button>
                </section>


                <section id="mine">
                <!------------------------------------------------------drag and drop *mineral* start --------------------------->
                <ul id="sortable1">
                <li id="item-1" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                <div class="box2">
                <h3><mark class="mark2">*Mineral</mark></h3>
                    <button onclick="bold1()" class="b"><i class="fa fa-bold" aria-hidden="true">B</i></button>
                    <button onclick="italic()" class="i"><i class="fa fa-italic" aria-hidden="true">I</i></button>
                    <button id="underline" onclick="underline1()" class="u"><i class="fa fa-underline" aria-hidden="true">U</i></button>

                      <!-- mineral form -->
                      <center>
                    <form method="POST" class="mb-3 myForm1 was-validated" action="insert.php" id="form2">
                    <div class="col-md-9">
                    <textarea rows="5" cols="50" id="description-box1" class="description-box5 description-box7 form-control is-invalid" name="mine_desc" required>

                    </textarea>
                    <div class="invalid-feedback">
                    Please enter a message in the textarea.
                      </div>
                    <div class="form-status">
                    <?php echo $status ?>
                    </div>
                    </div>
                    </form>
                    </center>
                </div>
                
                  <!-- end mineral form -->
                </li>


                  <!------------------------------------------------------drag and drop *mineral_1* start --------------------------->
                <li id="item-2" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                <div class="bx3">
                    <button onclick="bold1()" class="b"><i class="fa fa-bold" aria-hidden="true">B</i></button>
                    <button onclick="italic()" class="i"><i class="fa fa-italic" aria-hidden="true">I</i></button>
                    <button id="underline" onclick="underline1()" class="u"><i class="fa fa-underline" aria-hidden="true">U</i></button>

                      <!-- mineral form -->
                      <center>
                    <form method="POST" class="mb-3  was-validated" action="" id="form6">
                    <div class="col-md-9">
                    <textarea rows="5" cols="50" id="description-box1" class="description-box5 description-box7 form-control is-invalid" name="" required>

                    </textarea>
                    <div class="invalid-feedback">
                    Please enter a message in the textarea.
                      </div>
                    <div class="form-status">
                    <?php echo $status ?>
                    </div>
                    </div>
                    </form>
                    </center>
                </div>
                
                  <!-- end mineral form -->
                </li>


                    <!------------------------------------------------------drag and drop *mineral_2* start --------------------------->
                    <li id="item-3" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                <div class="bx4">
                    <button onclick="bold1()" class="b"><i class="fa fa-bold" aria-hidden="true">B</i></button>
                    <button onclick="italic()" class="i"><i class="fa fa-italic" aria-hidden="true">I</i></button>
                    <button id="underline" onclick="underline1()" class="u"><i class="fa fa-underline" aria-hidden="true">U</i></button>

                      <!-- mineral form -->
                      <center>
                    <form method="POST" class="mb-3  was-validated" action="" id="form7">
                    <div class="col-md-9">
                    <textarea rows="5" cols="50" id="description-box1" class="description-box5 description-box7 form-control is-invalid" name="" required>

                    </textarea>
                    <div class="invalid-feedback">
                    Please enter a message in the textarea.
                      </div>
                    <div class="form-status">
                    <?php echo $status ?>
                    </div>
                    </div>
                    </form>
                    </center>
                </div>
                
                  <!-- ---------------------------------------------------------------end *mineral form* --------------------------->
                </li>
                </ul>
                <button id="btn1">Save Position</button>
                </section>

                
                <section id="vegi">
                <!------------------------------------------------------drag and drop *vegetable* start --------------------------->
                <ul id="sortable2">
                <li id="item-1" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                <div class="box3">
                <h3><mark class="mark3">*Vegetable</mark></h3>
                    <button onclick="bold2()" class="b"><i class="fa fa-bold" aria-hidden="true">B</i></button>
                    <button onclick="italic2()" class="i"><i class="fa fa-italic" aria-hidden="true">I</i></button>
                    <button onclick="underline()" class="u"><i class="fa fa-underline" aria-hidden="true">U</i></button>

                    <!-- vegetable form -->
                    <center>
                    <form method="POST" class="mb-3 myForm2 was-validated" action="vginsert.php" id="form3">
                    <div class="col-md-9">
                    <textarea rows="5" cols="50" id="description-box2" class="description-box4 description-box8 form-control is-invalid" name="veg_desc" required>
                        
                    </textarea>
                    <div class="invalid-feedback">
                    Please enter a message in the textarea.
                    </div>

                    <div class="form-status">
                    <?php echo $status ?>
                    </div>
                    </div>
                    </form>
                    </center>


                    <!-- end vegetable form -->

                </div>
                </li>

<!------------------------------------------------------drag and drop *vegetable_1* start --------------------------->
                <li id="item-2" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                <div class="bx5">
                    <button onclick="bold2()" class="b"><i class="fa fa-bold" aria-hidden="true">B</i></button>
                    <button onclick="italic2()" class="i"><i class="fa fa-italic" aria-hidden="true">I</i></button>
                    <button onclick="underline()" class="u"><i class="fa fa-underline" aria-hidden="true">U</i></button>
                    <!-- vegetable form -->
                    <center>
                    <form method="POST" class="mb-3 was-validated" action="" id="form8">
                    <div class="col-md-9">
                    <textarea rows="5" cols="50" id="description-box2" class="description-box4 description-box8 form-control is-invalid" required>
                        
                    </textarea>
                    <div class="invalid-feedback">
                    Please enter a message in the textarea.
                    </div>

                    <div class="form-status">
                    <?php echo $status ?>
                    </div>
                    </div>
                    </form>
                    </center>


                    <!-- end vegetable form -->

                </div>
                </li>




                <!------------------------------------------------------drag and drop *vegetable_2* start --------------------------->
                <li id="item-3" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                <div class="bx6">
                    <button onclick="bold2()" class="b"><i class="fa fa-bold" aria-hidden="true">B</i></button>
                    <button onclick="italic2()" class="i"><i class="fa fa-italic" aria-hidden="true">I</i></button>
                    <button onclick="underline()" class="u"><i class="fa fa-underline" aria-hidden="true">U</i></button>
                    <!-- vegetable form -->
                    <center>
                    <form method="POST" class="mb-3 was-validated" action="" id="form9">
                    <div class="col-md-9">
                    <textarea rows="5" cols="50" id="description-box2" class="description-box4 description-box8 form-control is-invalid" required>
                        
                    </textarea>
                    <div class="invalid-feedback">
                    Please enter a message in the textarea.
                    </div>

                    <div class="form-status">
                    <?php echo $status ?>
                    </div>
                    </div>
                    </form>
                    </center>


                    <!-- end vegetable form -->

                </div>
                </li>
              </ul>
              <button id="btn2">Save Position</button>
                </section>
                <!-- show data of user -->
                <section id="show_data">
                <div class="col-md-9">
                
                <table class="table table-sm">
					      <thead class="thead-dark">
						<tr>
              <th>Anim_ID</th>
							<th>Animal_Desc</th>
							<th>User_Name</th>
						</tr>
					</thead>

				


<?php
	// session_start();

// for redirect


// end redirect

$con = mysqli_connect('localhost','root');
if ($con) {
	echo "connect successfull";
}else{
	echo "not connect";
}

mysqli_select_db($con, 'register');

$user_id=$_SESSION['user_id'];
$sql = "SELECT * from animal where anim_id = $user_id ";
$result = $con-> query($sql);
if ($result-> num_rows > 0) {
	while ($row = $result-> fetch_assoc()) {
		echo "<tr><td>".$row["id"].
		"</td><td>".$row["animal_desc"].
		"</td><td>".$row["name"].
		"</td></tr>";
	}
	echo "</table>";
}
				?>
      </table>
      
  <!-- show data of mineral -->

  <table class="table table-sm">
					<thead class="thead-dark">
						<tr>
							<th>Mine_ID</th>
							<th>Mine_Desc</th>
							<th>User_Name</th>
						</tr>
					</thead>
<?php
	// session_start();

mysqli_select_db($con, 'register');
$user_id=$_SESSION['user_id'];
$sql = "SELECT * from mineral where mine_id = $user_id";
$result = $con-> query($sql);
if ($result-> num_rows > 0) {
	while ($row = $result-> fetch_assoc()) {
		echo "<tr><td>".$row["id"].
		"</td><td>".$row["mine_desc"].
		"</td><td>".$row["name"].
		"</td></tr>";
	}
	echo "</table>";
}
				?>
      </table>
      

      <table class="table table-sm">
					<thead class="thead-dark">
						<tr>
							<th>Vege_ID</th>
							<th>vege_Desc</th>
							<th>User_Name</th>
						</tr>
					</thead>
<?php
	// session_start();

mysqli_select_db($con, 'register');
$user_id=$_SESSION['user_id'];
$sql = "SELECT * from myvegitable where veg_id = $user_id";
$result = $con-> query($sql);
if ($result-> num_rows > 0) {
	while ($row = $result-> fetch_assoc()) {
		echo "<tr><td>".$row["id"].
		"</td><td>".$row["veg_desc"].
		"</td><td>".$row["name"].
		"</td></tr>";
	}
	echo "</table>";
}
	$con-> close();
				?>
			</table>

                <!-- end data of mineral -->
                </div>
                </section>


                <!--------------------------------------------------- update form starts here ---------------------------->
<section id="update_1">
<div class="col-md-9">
<form  method="POST" class="mb-3 was-validated" action="edit.php">
  <div class="form-group">
    <label for="ID">ENTER_ID</label>
    <input type="text" class="form-control" placeholder="EnterID" name="anim_id" required>
  </div>

  <div class="form-group">
    <label for="anim_desc">Animal_Desc</label>
    <textarea class="form-control is-invalid" id="" rows="5" col="50" name="animal_desc" required>

    </textarea>
    <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div>

    <button type="submit" class="btn btn-outline-info mt-2" name="update">UPDATE</button>
  </div>
</form>


</div>
</section>
                <!----------------------------------------------------update form ends here  ----------------------------->

<!--------------------------------------------------- update1 form starts here ---------------------------->
<section id="update_2">
<div class="col-md-9">
<form method="POST" class="mb-3 was-validated" action="edit.php">
  <div class="form-group">
    <label for="ID">ENTER_ID</label>
    <input type="text" class="form-control" placeholder="EnterID" name="mine_id" required>
  </div>

  <div class="form-group">
    <label for="anim_desc">Mineral_Desc</label>
    <textarea class="form-control is-invalid" rows="5" col="50" name="mine_desc" required>

    </textarea>
    <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div>
    <button type="submit" class="btn btn-outline-info mt-2" name="update">UPDATE</button>
  </div>
</form>


</div>
</section>
                <!----------------------------------------------------update1 form ends here  ----------------------------->


<!--------------------------------------------------- update2 form starts here ---------------------------->
<section id="update_3">
<div class="col-md-9">
<form method="POST" class="mb-3 was-validated" action="edit.php">
  <div class="form-group">
    <label for="ID">ENTER_ID</label>
    <input type="text" class="form-control" placeholder="EnterID" name="veg_id" required>
  </div>

  <div class="form-group">
    <label for="vege_desc">Vegetable_Desc</label>
    <textarea class="form-control is-invalid" rows="5" col="50" name="veg_desc" required>

    </textarea>
    <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div>
    <button type="submit" class="btn btn-outline-info mt-2" name="update">UPDATE</button>
  </div>
</form>


</div>
</section>
                <!----------------------------------------------------update2 form ends here  ----------------------------->
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 border">
                <br/><center>
                <h2><a  type="button" class="b1">Animal</a></h2>
                <br/>
                <h2><a  type="button" class="b2">Mineral</a></h2>
                <br/>
                <h2><a  type="button" class="b3">Vegetable</a></h2>
                <br/>
                </center>
            </div>
            <div class="col-md-4 border-bottom btn1">
                <button type="submit" class="btn btn-primary b6">Edit</button>
                <button type="submit" class="btn btn-primary b7">Edit</button>
                <button type="submit" class="btn btn-primary b8">Edit</button>
                  <!-- myButton3 -->
                <button type="submit" class="btn btn-secondary myButton">Save</button>
                <button type="submit" class="btn btn-secondary myButton1">Save</button>
                <button type="submit" class="btn btn-secondary myButton2">Save</button>
            </div>

            <div class="col-md-4 border-bottom btn2">    
                <button type="submit" onclick="myFunction()" value="Reset Form" class="btn btn-success">New</button>
                <button type="submit" class="btn btn-danger b5">Open</button>
            </div>
        </div>
    </div>



    <!-- javascript code -->
    <script>
        //Get the button element
        function bold() {
        var x = $('#description-box');
        alert(x.css("font-weight"));
        if (x.css("font-weight") !== "bold") {
         x.css("font-weight", "bold");
        } else {
         x.css("font-weight", "normal");
        }
        }

        function bold1() {
        var e = $('.description-box7');
        alert(e.css("font-weight"));
        if (e.css("font-weight") !== "bold") {
         e.css("font-weight", "bold");
        } else {
         e.css("font-weight", "normal");
        }
        }

        function bold2() {
        var f = $('.description-box8');
        alert(f.css("font-weight"));
        if (f.css("font-weight") !== "bold") {
         f.css("font-weight", "bold");
        } else {
         f.css("font-weight", "normal");
        }
        }
            // italic section starts
        function italic() {
        var y = $('#description-box1');
        alert(y.css("font-style"));
        if (y.css("font-style") !== "italic") {
         y.css("font-style", "italic");
        } else {
         y.css("font-style", "normal");
        }
        }

        function italic1() {
        var a = $('.description-box3');
        alert(a.css("font-style"));
        if (a.css("font-style") !== "italic") {
         a.css("font-style", "italic");
        } else {
         a.css("font-style", "normal");
        }
        }

        function italic2() {
        var b = $('.description-box4');
        alert(b.css("font-style"));
        if (b.css("font-style") !== "italic") {
         b.css("font-style", "italic");
        } else {
         b.css("font-style", "normal");
        }
        }

        // italic section end
        // underline section start here
        function underline() {
        var z = $('#description-box2');
        alert(z.css("text-decoration"));
        if (z.css("text-decoration") !== "underline") {
         z.css("text-decoration", "underline");
        } else {
         z.css("font-style", "normal");
        }
        }
            
        function underline1() {
        var c = $('.description-box5');
        alert(c.css("text-decoration"));
        if (c.css("text-decoration") !== "underline") {
         c.css("text-decoration", "underline");
        } else {
         c.css("font-style", "normal");
        }
        }

        function underline2() {
        var d = $('.description-box6');
        alert(d.css("text-decoration"));
        if (d.css("text-decoration") !== "underline") {
         d.css("text-decoration", "underline");
        } else {
         d.css("font-style", "normal");
        }
        }
            // underline section Ends here


            // jQuery Starts here
        $(document).ready(function(){
	    	$(".b1").click(function(){
        $(".mark1").show();
        $(".mark2").hide();
        $(".mark3").hide();
		    $("#anim").show();
        $(".b6").show();
        $(".b7").hide();
        $(".b8").hide();
        $("#update_2").hide();
        $("#update_3").hide();
        $(".myButton1").hide();
        $(".myButton2").hide();
        $("#show_data").hide();
        $(".myButton").show();
        $("#mine").hide();
        $("#vegi").hide();
        $("#edForm1").hide();
        $("#update_1").hide();
        });
        });

        $(document).ready(function(){
		    $(".b2").click(function(){
        $(".mark1").hide();
        $(".mark2").show();
        $(".mark3").hide();
        $(".b6").hide();
        $(".b7").show();
        $(".b8").hide();
		    $("#anim").hide();
        $(".myButton").hide();
        $("#show_data").hide();
        $(".myButton2").hide();
        $(".myButton1").show();
        $("#mine").show();
        $("#vegi").hide();
        $("#edForm1").hide();
        $("#update_2").hide();
        $("#update_1").hide();
        $("#update_3").hide();
        });
        });

        $(document).ready(function(){
		    $(".b3").click(function(){
        $(".b6").hide();
        $(".mark1").hide();
        $(".mark2").hide();
        $(".mark3").show();
        $(".b7").hide();
        $(".b8").show();
		    $("#anim").hide();
        $("#show_data").hide();
        $("#mine").hide();
        $("#vegi").show();
        $(".myButton").hide();
        $(".myButton2").show();
        $(".myButton1").hide();
        $("#edForm1").hide();
        $("#update_1").hide();
        $("#update_2").hide();
        $("#update_3").hide();
        });
        });

        // button code of animal
        $(document).ready(function () {
        $(".myButton").click(function () {
        $(".myForm").submit();
        });
        });

        // button code of mineral
        $(document).ready(function () {
        $(".myButton1").click(function () {
        $(".myForm1").submit();
        });
        });

        // button code of vegetable
        $(document).ready(function () {
        $(".myButton2").click(function () {
        $(".myForm2").submit();
        });
        });

        //button code of edit
        // $(document).ready(function () {
        // $(".myButton3").click(function () {
        // $(".edForm").submit();
        // });
        // });

        // code for open button 
        $(document).ready(function(){
		    $(".b5").click(function(){
		    $("#show_data").show();
        $("#mine").hide();
        $("#vegi").hide();
        $(".myButton").hide();
        $(".myButton2").hide();
        $(".myButton1").hide();
        $("#update_1").hide();
        $("#update_2").hide();
        $("#update_3").hide();
        });
        });

        // code for Edit button1 
        $(document).ready(function(){
		    $(".b6").click(function(){
		    $("#update_1").show();
        $("#update_2").hide();
        $("#update_3").hide();
        $("#show_data").hide();
        $("#mine").hide();
        $("#anim").hide();
        $("#vegi").hide();
        $(".myButton").hide();
        $(".myButton2").hide();
        $(".myButton1").hide();
        });
        });

        // code for Edit button2 
        $(document).ready(function(){
		    $(".b7").click(function(){
		    $("#update_2").show();
        $("#update_1").hide();
        $("#update_3").hide();
        $("#show_data").hide();
        $("#mine").hide();
        $("#vegi").hide();
        $(".myButton").hide();
        $(".myButton2").hide();
        $(".myButton1").hide();
        });
        });

        // code for Edit button3 
        $(document).ready(function(){
		    $(".b8").click(function(){
		    $("#update_3").show();
        $("#update_2").hide();
        $("#update_1").hide();
        $("#show_data").hide();
        $("#mine").hide();
        $("#vegi").hide();
        $(".myButton").hide();
        $(".myButton2").hide();
        $(".myButton1").hide();
        });
        });

        // code for new button
        function myFunction() {
        document.getElementById("form1").reset();
        document.getElementById("form4").reset();
        document.getElementById("form5").reset();
        document.getElementById("form6").reset();
        document.getElementById("form7").reset();
        document.getElementById("form8").reset();
        document.getElementById("form9").reset();
        document.getElementById("form2").reset();
        document.getElementById("form3").reset();
      }

      $(document).ready(function(){
		    $(".sign").click(function(){
		    $(".log_in").show();
      });
      });

      $(document).ready(function(){
		    $(".sig_off").click(function(){
		    $(".off").show();
      });
      });


      // ----------------------------------------------------jquery code for drag and drop--------------------------------------
      $(function() {
    $("#sortable").sortable();

    $('#btn').click(function() {
        var dataItem = $("#sortable").sortable("serialize");
        alert(dataItem);
        
        //return is added here to avoid ajax code submission in this example
        return true;
        
        $.ajax({
            url: 'save-sorting-position.php',
            data : dataItem,
            success: function(data) {                
                alert('Positions saved');
            }
        });
    });
});

// ----------------------------------------------------------jQuery code for drag and drop mineral--------------------------------
$(function() {
    $("#sortable1").sortable();

    $('#btn1').click(function() {
        var dataItem1 = $("#sortable1").sortable("serialize");
        alert(dataItem1);
        
        //return is added here to avoid ajax code submission in this example
        return true;
        
        $.ajax({
            url: 'save-sorting-position.php',
            data : dataItem1,
            success: function(data) {                
                alert('Positions saved');
            }
        });
    });
});


// ----------------------------------------------------------jQuery code for drag and drop vegetable--------------------------------
$(function() {
    $("#sortable2").sortable();

    $('#btn2').click(function() {
        var dataItem2 = $("#sortable2").sortable("serialize");
        alert(dataItem2);
        
        //return is added here to avoid ajax code submission in this example
        return true;
        
        $.ajax({
            url: 'save-sorting-position.php',
            data : dataItem2,
            success: function(data) {                
                alert('Positions saved');
            }
        });
    });
});
    </script>



</body>
</html>