<?php 
include("header.php");

?> 

<!--

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js">



</script>


-->
 
        <div class="col-sm-9 col-md-9 col-md-offset-1">
            <h1 class="text-center page-title">User Home </h1>
             
                <form  action="" method="" class="formd">


<div class="col-sm-9 " style="padding-left: 0px;">
    <label class="col-sm-3" for="loan_type" style="padding-left: 0px;">Loan Type
        <span class="star">*</span>
    </label>
    <div class="donate" style="padding-left: 0px;">
               <label class="blue">
                    <input type="radio" name="loan_type" value="1">
                    <span style="color:white">Installment</span>
                </label>
                            <label class="blue">
                    <input type="radio" name="loan_type" value="2">
                    <span style="color:white">Car loan</span>
                </label>
                            <label class="blue">
                    <input type="radio" name="loan_type" value="3">
                    <span style="color:white">Payday</span>
                </label>
                            <label class="blue">
                    <input type="radio" name="loan_type" value="4">
                    <span style="color:white">Credit card</span>
                </label>
                        </div>
    <span class="help-block"></span>
</div>
<br>
<br>
<br>
<br>


                 
                  <div data-role="main" class="ui-content"> 
      <label for="points">How much would you like to borrow?</label>
      <input type="range" name="points"   value="50" min="0" max="100" id="get"  onchange="fetch()">    </span>
      <input type="text" name="" id="put">

      <br>
      
      <br>
      
      <br>
 










  

















    </form>
  </div>





                <br>

            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Apply Now</button>
            </form>


          <div id="demo" class="collapse"> 
          <br>
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#new">New User</a></li>
                <li class=""><a data-toggle="tab" href="#exit">Existing User</a></li> 
               </ul>

              <div class="tab-content">
                <br>
                <div id="new" class="tab-pane fade in active"> 
                  <form>
                    <fieldset class="form-group">
                      <label for="exampleInputEmail1">Tittle </label>
                        <input type="radio" name="title" value="Mr"> Mr 
                        <input type="radio" name="title" value="Mrs"> Mrs 
                        <input type="radio" name="title" value="Ms"> Ms 
                        <input type="radio" name="title" value="Miss"> Miss 
 
                        </fieldset>


                      <fieldset class="form-group">
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name">
                      </fieldset>

                      <fieldset class="form-group">
                      <label for="exampleInputEmail1">Middle Name</label>
                      <input type="text" class="form-control" id="middlename" placeholder="Middle Name"> 
                      </fieldset>

                      <fieldset class="form-group">
                      <label for="exampleInputEmail1">Last Name</label>
                      <input type="text" class="form-control" id="middlename" placeholder="Last Name"> 
                      </fieldset>

                      <fieldset class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="middlename" placeholder="E-mail"> 
                      </fieldset>

                      <fieldset class="form-group">
                      <label for="exampleInputEmail1">Password</label>
                      <input type="password" class="form-control" id="middlename" placeholder="Password "> 
                      </fieldset>

                      <fieldset class="form-group">
                      <label for="exampleInputEmail1">Phone text</label>
                      <input type="text" class="form-control" id="middlename" placeholder="Phone text "> 
                      </fieldset>

                      <fieldset class="form-group">
                      <label for="exampleInputEmail1">Office text</label>
                      <input type="text" class="form-control" id="middlename" placeholder="Office Phone text "> 
                      </fieldset>

                      <fieldset class="form-group">
                      <label for="exampleInputEmail1">Home text</label>
                      <input type="text" class="form-control" id="middlename" placeholder="home Phone text "> 
                      </fieldset>









<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">Next</button>
  <div id="demo2" class="collapse"> 
  

                      <br>
                      <br>
                      <h4>Prefered Contact</h4>
                      <hr>
                      <fieldset class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" class="form-control" id="middlename" placeholder="E-mail "> 
                      </fieldset>

                      <fieldset class="form-group">
                      <label for="exampleInputEmail1">Home text</label>
                      <input type="text" class="form-control" id="middlename" placeholder="home Phone text "> 
                      </fieldset>
                       <fieldset class="form-group">
                      <label for="exampleInputEmail1">Office text</label>
                      <input type="text" class="form-control" id="middlename" placeholder="Office Phone text "> 
                      </fieldset>


<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1">Next</button>
  <div id="demo1" class="collapse"> 

                      <br>
                      <br>
                      <h4>Address</h4>
                      <hr>
                      <fieldset class="form-group">
                      <label for="exampleInputEmail1">Postcode</label>
                      <input type="text" class="form-control" id="middlename" placeholder="Postcode"> 
                      </fieldset>

                      <fieldset class="form-group">
                      <label for="exampleInputEmail1">Flat No</label>
                      <input type="text" class="form-control" id="middlename" placeholder="Flat No "> 
                      </fieldset>

              

                      <fieldset class="form-group">
                      <label for="exampleInputEmail1">Building Name</label>
                      <input type="text" class="form-control" id="middlename" placeholder="Building Name "> 
                      </fieldset>

                      <fieldset class="form-group">
                      <label for="exampleInputEmail1">House No</label>
                      <input type="text" class="form-control" id="middlename" placeholder="House No "> 
                      </fieldset>

                       <fieldset class="form-group">
                      <label for="exampleInputEmail1">Street</label>
                      <input type="text" class="form-control" id="middlename" placeholder="Street"> 

                      </fieldset><fieldset class="form-group">
                      <label for="exampleInputEmail1">District</label>
                      <input type="text" class="form-control" id="middlename" placeholder="District"> 
                      </fieldset>

                      </fieldset><fieldset class="form-group">
                      <label for="exampleInputEmail1">Town</label>
                      <input type="text" class="form-control" id="middlename" placeholder="Town"> 
                      </fieldset>

                      </fieldset><fieldset class="form-group">
                      <label for="exampleInputEmail1">city</label>
                      <input type="text" class="form-control" id="middlename" placeholder="Town"> 
                      </fieldset>

                      </fieldset><fieldset class="form-group">
                      <label for="exampleInputEmail1">Date</label>
                      <input type="date" class="form-control" id="middlename" placeholder="Town"> 
                      </fieldset>


                      </fieldset><fieldset class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="date" class="form-control" id="middlename" placeholder="Email"> 
                      </fieldset>


                      </fieldset><fieldset class="form-group">
                      <label for="exampleInputEmail1">Password</label>
                      <input type="date" class="form-control" id="middlename" placeholder="Password"> 
                      </fieldset>




 
 

                      <input type="submit" name="submit" value="Save" class="btn btn-primary">

                              </div>
</div>
</div>
</div>

                    </form>


                 </div>

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
	
 
 
