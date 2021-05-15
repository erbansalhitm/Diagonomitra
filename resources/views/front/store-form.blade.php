@include('front.header')
  <div class="container my-4">
    
   <div class="row">
       <div class="col-lg-8 col-md-12 offset-md-2">
           <div class="signup-form">
               <h2 class="text-center py-3">Store Form</h2>
               <div class="response-msg"></div>
					<form id="store-enquiry"  method="post" enctype="multipart/form-data" >
						<div class="row">
							{{csrf_field()}}
							<input type="hidden" id="store-id" name="store_id" value="{{$store_id}}" class="form-control store-id">
							<div class="col-md-6 form-group">
							  <label for="name">Name</label>
							  <input type="text" id="name" name="name" class="form-control name">
							</div>

							<div class="col-md-6 form-group">
							  <label for="email">Email ID</label>
							  <input type="email" id="email" name="email" class="form-control email">
							</div>
							
							<div class="col-md-6 form-group">
							  <label for="name">Address</label>
							  <input type="text" id="name" name="address" class="form-control address">
							</div>
							
							<div class="col-md-6 form-group">
							  <label for="phone">Contact Number</label>
							  <input type="text" id="phone" name="contact" class="form-control contact">
							</div>
							
							<div class="col-md-6 form-group">
							  <label for="phone">Alternate Contact Number</label>
							  <input type="text" id="phone" name="alternate_contact" class="form-control alternate-contact">
							</div>
							
							<div class="col-md-6 form-group">
								<label for="phone">Upload Your Prescription File</label>
								<input type="file" id="myFile" name="prescription" class="file">
							</div>

						</div>
					  
						<div class="row">
							<div class="col-md-12 form-group text-center">
								<input type="submit" value="Send Message" class="btn btn-primary" id="store-submit" >
							</div>
						</div>
					</form>
           </div>
            
       </div>
   </div>
  </div>
  
  	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
    <script type="text/javascript">

		$(document).ready(function (e) {
			$("#store-enquiry").on('submit',(function(e) {
				e.preventDefault();

				$.ajax({
					url: "{{route('submit-store-enquiry')}}", 
					type: "POST",             
					data: new FormData(this), 
					contentType: false,       
					cache: false,             
					processData:false,        
					success: function(data)   
					{
						if(data == true)
						{
							$('.response-msg').html('<div class="alert alert-success">Success! Your enquiry submited</div>');
							setTimeout(function () { 
							  location.reload();
							},1000);
						}else
						{
							jQuery.each(data.errors, function(key, value){
								jQuery('.response-msg').append('<div class="alert alert-danger">'+value+'</div>');
							});
						}
					}
				});
			}));
		});
		
    </script>
    
<script>
function myFunction() {
  alert("Registration Successful");
}
</script>

 @include('front.footer')