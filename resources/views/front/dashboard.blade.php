<!DOCTYPE html>
<html lang="en">
<head>
  <title>Diagonomitra</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="stylesheet.css">  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<header>
  <div class="container-fluid">
    <nav class="navbar navbar-default">
      
        <div class="row" style="width: 100%">
          
           <div class="col-10 col-sm-3 col-md-3 col-lg-3 col-xl-3">
              <div class="navbar-header top_white_line">
                <a class="navbar-brand" href="index.html"><img src="images/logo.png"></a>
            </div>
          </div>
          
          <div class="col-lg-9 col-xl-9 mt-2 d-none d-sm-none d-md-none d-lg-block nopadding float-right">        
            <ul class="nav nav-pills navbar-right">
              <li class="nav-item"><a href="#"><span class=""></span><button class="btn nobtn blue_color_on_hover">Doctor Consultation</button></a></li>
              <li class="nav-item"><a href="#"><span class=""></span><button class="btn nobtn blue_color_on_hover">Lab Test</button></a></li>
              <li class="nav-item"><a href="#"><span class=""></span><button class="btn nobtn blue_color_on_hover">E-Pharmacy</button></a></li>
              <li class="nav-item"><a href="#"><span class=""></span><button class="btn nobtn blue_color_on_hover">Health Store</button></a></li>
              <li class="nav-item dropdown show">
                <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Jaipur
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                  <a class="dropdown-item" href="#">Bikaner</a>
                  <a class="dropdown-item" href="#">Delhi</a>
                  <a class="dropdown-item" href="#">Pune</a>
                </div>
              </li>
              <!-- <li class="nav-item"><a href="#"><span class=""></span><button class="btn nobtn">Login</button></a></li> -->
              <li class="nav-item"><button type="button" data-toggle="modal" data-target="#join_popup" class="mt-2 blue_color_border">Login/Signup</button></li>
            </ul>       
          </div>


      </div>
    </nav>
  </div>
</header>
<!-- Modal edit address -->
<div class="modal fade" id="editaddress" tabindex="-1" role="dialog" aria-labelledby="editaddressTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered width900" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="ModalLongTitle">Edit Address</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body sign_up_btn">
       <form>
          <div class="form-row">
            <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <label class="f-12">Name</label>
              <input type="mobile" class="form-control f-12" id="inputEmail3" placeholder="Enter Name">
            </div>
            <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <label class="f-12">Contact Number</label>
              <input type="mobile" class="form-control f-12" id="inputEmail3" placeholder="Enter Contact Number">
            </div>

            <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <label class="f-12">Address</label>
              <input type="mobile" class="form-control f-12" id="inputEmail3" placeholder="Enter Address">
            </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <label class="f-12">Tag</label>
              <input type="mobile" class="form-control f-12" id="inputEmail3" placeholder="Ex: Home, Office">
            </div>

          
            <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <label for="inputState">State</label>
              <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
         
          
            <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <label for="inputState">City</label>
              <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
          
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <label class="f-12">Pincode</label>
              <input type="mobile" class="form-control f-12" id="inputEmail3" placeholder="Enter Pincode">
            </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3 align-center login_btn nopadding">
                  <button type="button" class="btn blue_color_bg">Save</button>
                </div>

                  
        </form>
        
              
      </div>
      
      
    </div>
  </div>
</div>
<!-- Modal login popup -->
<div class="modal fade" id="join_popup" tabindex="-1" role="dialog" aria-labelledby="join_popupTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered width400" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLongTitle">Join</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body sign_up_btn">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1"><small class="light_color_text">Contributor</small></label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2"><small class="light_color_text">Mentor</small></label>
        </div>
        <button type="button" class="btn mt-4 signup_twitter" style="background-color: #00acee; color:#fff"><span><img src="images/twitter.png"></span> Continue With Twitter</button>
        <button type="button" class="btn mt-4 signup_github" style="background-color: #1074e7; color:#fff"><span><img src="images/github.png"></span>Continue With GitHub</button>
        <button type="button" class="mt-4 light_color_bg signup_google"><span><img src="images/google.png">Continue With Google</button>

        
        <hr class="mt-4">
      
        <form class="mt-4">
          <div class="form-group row">
            
            <div class="col-sm-12">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-12">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
          </div>
          <div class="col-sm-12 nopadding">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                <label class="form-check-label" for="autoSizingCheck2">
                  <small class="light_color_text">Remember me</small>
                </label>
              </div>
            </div>         
        </form>
      </div>
      
      
      <div class="col-sm-12 mb-4 mt-4">
        <button class="btn nobtn blue_color_text"><small>Forget Password?</small></button>
        <button type="button" class="btn blue_color_bg float-right">Continue</button>
      </div>
    </div>
  </div>
</div>

<div class="container mt-3">
  <div class="row">
    <div class="col-sm-3">
      <div class="card px-3 py-3">
        <p class="mb-0"><img class="profileicons" src="images/profile_pic.svg"> Hello Tushar Taneja</p>
      </div>
      <div class="card py-3 mt-2">
        <a class="light_color_text px-3" href="history.html"> <img class="smallicons" src="images/box.svg"> Order History <span class="float-right"><img src="images/arrow_right.svg"></span></a>
        <hr>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <label class="light_color_text px-3"><img class="smallicons" src="images/account.svg"> Account Settings</label>
          <a class="nav-link profile_patient active pl-5 pr-0" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Personal Information</a>
          <a class="nav-link profile_patient pl-5 pr-0" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Manage Addresses</a>
        </div>
        <a class="py-3 px-3 light_color_text" href="#"><img class="smallicons" src="images/logout.svg"> Logout</a>
      </div>
    </div>
    <div class="col-sm-9">
      <div class="card px-3 py-3">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <div class="row">
            <div class="col-sm-6"><h5><b>Personal Information</b></h5></div>
            <div class="col-sm-6"><button type="submit" class="btn blue_color_bg float-right">Edit</button></div>      
            </div>
            <form>
              
        <div class="form-row mt-2">
          <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
            <label for="inputEmail4">Full Name</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Full Name">
          </div>
          <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
            <label for="inputPassword4">Contact Number</label>
            <input type="contact" class="form-control" id="inputPassword4" placeholder="Enter Contact Number">
          </div>
        
        <div class="form-group col-sm-12 col-md-12 col-xl-6 col-lg-6">
          <label for="inputAddress">Email Id</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Enter Email Id">
        </div>
        <div class="col-sm-12 col-md-12 col-xl-6 col-lg-6">
        <div><label class="mr-3 mb-0 f-18">Gender : </label></div>
        <div class="form-check-inline mt-2">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="optradio">Male
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="optradio">Female
          </label>
        </div>
        </div>
        </div> 
      </form>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          <div class="address">
            <div class="row">
            <div class="col-sm-6"><h5><b>Manage Addresses</b></h5></div>
            <div class="col-sm-6"><button type="button" class="btn blue_color_bg float-right" data-toggle="modal" data-target="#editaddress">Add New Address</button></div>  
            </div>    
            </div>
        <div class="row">

          <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12 mt-2">
            <div class="card px-3 py-3">
              <div class=""><span class="f-14 mt-2 px-1 py-1 light_blue_bg"><b>Home</b></span></div>
              <p class="mt-2 mb-0">Tushar Taneja 810756721</p>
              <p class="mt-2 mb-0">124, laxman colony, shayam nagar, jaipur</p>
              <div class="col-12 nopadding">
                <div class="float-right">
                <button class="btn nobtn blue_color_on_hover" data-toggle="modal" data-target="#editaddress">Edit</button>
                <button class="btn nobtn blue_color_on_hover">Delete</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12 mt-2">
            <div class="card px-3 py-3">
              <div class=""><span class="f-14 mt-2 px-1 py-1 light_blue_bg"><b>Home</b></span></div>
              <p class="mt-2 mb-0">Tushar Taneja 810756721</p>
              <p class="mt-2 mb-0">124, laxman colony, shayam nagar, jaipur</p>
              <div class="col-12 nopadding">
                <div class="float-right">
                <button class="btn nobtn blue_color_on_hover" data-toggle="modal" data-target="#editaddress">Edit</button>
                <button class="btn nobtn blue_color_on_hover">Delete</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12 mt-2">
            <div class="card px-3 py-3">
              <div class=""><span class="f-14 mt-2 px-1 py-1 light_blue_bg"><b>Home</b></span></div>
              <p class="mt-2 mb-0">Tushar Taneja 810756721</p>
              <p class="mt-2 mb-0">124, laxman colony, shayam nagar, jaipur</p>
              <div class="col-12 nopadding">
                <div class="float-right">
                <button class="btn nobtn blue_color_on_hover" data-toggle="modal" data-target="#editaddress">Edit</button>
                <button class="btn nobtn blue_color_on_hover">Delete</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12 mt-2">
            <div class="card px-3 py-3">
              <div class=""><span class="f-14 mt-2 px-1 py-1 light_blue_bg"><b>Home</b></span></div>
              <p class="mt-2 mb-0">Tushar Taneja 810756721</p>
              <p class="mt-2 mb-0">124, laxman colony, shayam nagar, jaipur</p>
              <div class="col-12 nopadding">
                <div class="float-right">
                <button class="btn nobtn blue_color_on_hover" data-toggle="modal" data-target="#editaddress">Edit</button>
                <button class="btn nobtn blue_color_on_hover">Delete</button>
                </div>
              </div>
            </div>
          </div>
          

          
        </div>
      </div>
        </div>
        </div>
      </div>
    </div>
  </div>


</div>

</body>
</html>
