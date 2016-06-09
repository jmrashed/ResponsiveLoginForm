<?php 
include("header.php");

?> 
 
        <div class="col-sm-9 col-md-9 col-md-offset-1">
            <h1 class="text-center login-title">User Home </h1>
             
                <form  action="" method="">
                <label> Loan Type </label>
                  <select class="form-control">
                  <option> Loan Type 1</option>
                  <option> Loan Type 2</option>
                  <option> Loan Type 3</option>
                  <option> Loan Type 4</option>
                  <option> Loan Type 5</option>
                </select>
                <br>
                <label>How much would you like to borrow?</label>
                <div class="range range-primary">
                    <input type="range" name="range" min="1" max="100" value="50" onchange="rangePrimary.value=value">
                    <output id="rangePrimary">83</output>
                </div>

                <br>

            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Apply Now</button>
            </form>


          <div id="demo" class="collapse"> 
          <br>
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#new">New Customer</a></li>
                <li class=""><a data-toggle="tab" href="#exit">Existing Customer</a></li> 
               </ul>

              <div class="tab-content">
                <br>
                <div id="new" class="tab-pane fade in active"> 
                  
            <form class="form-inline" action='' method="POST">
                    <fieldset>
                      <div id="legend">
                        <legend class="">Registration Form</legend>
                      </div> 

                        <div class="col-md-3"> <label> First Name</label> </div>
                        <div class="col-md-9"> <input type="text" class="form-control" id="exampleInputName2" name="firstname" placeholder="First Name"> </div>

                        
                        <div class="col-md-3"> <label> Middle Name </label></div>
                        <div class="col-md-9"> <input type="text" class="form-control" id="exampleInputName2" name="middlename" placeholder="Middle Name"> </div>

                        
                        <div class="col-md-3"><label>  First Name </label></div>
                        <div class="col-md-9"> <input type="text" class="form-control" id="exampleInputName2" name="firstname" placeholder="First Name"> </div>

                        
                        <div class="col-md-3"><label>  Date of Birth </label></div>
                        <div class="col-md-9"> <input type="email" class="form-control" id="exampleInputName2" name="dob" placeholder=""> </div>

                        
                        <div class="col-md-3"><label> Email </label></div>
                        <div class="col-md-9"> <input type="date" class="form-control" id="exampleInputName2" name="dob" placeholder="E-mail"> </div>

                        
                        <div class="col-md-3"><label> Phone Number </label></div>
                        <div class="col-md-9">
<br>
                         <label>Home</label> <input type="number" class="form-control" id="exampleInputName2" name="dob" placeholder="+10 xxxx"> 
                        <br>
                         <label>Office</label> <input type="number" class="form-control" id="exampleInputName2" name="dob" placeholder="+10 xxxx"> 
                        <br> 
                        <label>Mobile</label> <input type="number" class="form-control" id="exampleInputName2" name="dob" placeholder="+10 xxxx"> 
                        <br>
                        
                        

                        </div>

                        


                <input type="submit" class="btn btn-primary" value="Send invitation">
               
              </fieldset></form></div>

                <div id="exit" class="tab-pane fade in active"> 

            <h1 class="text-center login-title">Sign in</h1>
             
                <form class="form-signin">
                <input type="text" class="form-control" placeholder="Email" required autofocus><br>
                <input type="password1" class="form-control" placeholder="Password 1" required><br>
                <input type="password2" class="form-control" placeholder="Password 2" required><br>
                <input name="submit" class="btn btn-lg btn-primary btn-block" type="submit" value="Sign in">

                  
                </form>
       
                </div>

              </div>
            </div>
          </div>
                       

 






  <?php 
include("footer.php");

?>
	
 
 
