@include('front.header')



<style>
@import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);




.content {
  width: 80%;
  padding: 20px;
  margin: 0 auto;
  padding: 0 60px 0 0;
}

.centerplease {
  margin: 0 auto;
  max-width: 270px;
  font-size: 40px;
}

.question {
  color: #fff;
  position: relative;
  background: #98c23d;
  margin: 0;
  padding: 10px 10px 10px 50px;
  display: block;
  width:100%;
  cursor: pointer;
}

.answers {
  font-weight:300;
  background: #f2f2f2;
  padding: 0px 15px;
  margin: 0px 0;
  height: 0;
  overflow: hidden;
  z-index: -1;
  position: relative;
  opacity: 0;
  -webkit-transition: .7s ease;
  -moz-transition: .7s ease;
  -o-transition: .7s ease;
  transition: .7s ease;
}

.questions:checked ~ .answers{
  height: auto;
  opacity: 1;
  padding: 15px;
}

.plus {
  color:#fff;
  position: absolute;
  margin-left: 10px;
  margin-top: 5px;
  z-index: 5;
  font-size: 2em;
  line-height: 100%;
  -webkit-user-select: none;    
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
  -webkit-transition: .3s ease;
  -moz-transition: .3s ease;
  -o-transition: .3s ease;
  transition: .3s ease;
}

.questions:checked ~ .plus {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}

.questions {
  display: none;
}   

</style>


 <div class="bg-light py-3 mb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a href="#">FAQ</a></div>
        </div>
      </div>
    </div>

  
     
    <!---->
    <section class="faq-section">
        <div class="container">
          <!---->
          

            <div class="content">
            <h1>FAQs</h1>
              
            <!-- __________________________ SECTIONS ___________________________ --> 
           
            
            <div>
              <input type="checkbox" id="question1" name="q"  class="questions">
              <div class="plus">+</div>
              <label for="question1" class="question">
               Will your books and materials withstand repeated use—are they satisfaction guaranteed?
              </label>
              <div class="answers">
                <p>Our hardcover books are library bound with exposed reinforced endsheets, which means extra lasting power, use after use. They are side sewn or section sewn, and all covers are laminated with glossy film. The books are vibrant, durable, and unconditionally guaranteed. </p>
                
              </div>
            </div>
            <!-- _____________________________________________________ --> 
            <div>
              <input type="checkbox" id="question2" name="q" class="questions">
              <div class="plus">+</div>
              <label for="question2" class="question">
            Do you have “green” products?
              </label>
              <div class="answers">
                <p>Many of Cavendish Square’s products are produced with recycled pulp content, allowing our company to pursue its green goals while adding additional value for your eco-conscious purchases. </p>
                
              </div>
            </div>
             <!-- _____________________________________________________ -->  
            <div>
              <input type="checkbox" id="question3" name="q" class="questions">
              <div class="plus">+</div>
              <label for="question3" class="question">
            Do you provide book processing?
              </label>
              <div class="answers">
                <p>Cavendish Square gladly provides library processing services. Please call 1-877-980-4450 or email Customer Service to learn more about processing and available and customizable options for your bookshelf needs. </p>
                
              </div>
            </div>
            <!-- _____________________________________________________ -->  
            <div>
              <input type="checkbox" id="question4" name="q" class="questions">
              <div class="plus">+</div>
              <label for="question4" class="question">
            Do you keep my library processing specifications on file?
              </label>
              <div class="answers">
                <p>Yes, Cavendish Square keeps all customer processing specifications on file. You won't need to fill out library processing forms each time you order, we’ll do it for you. You can download a processing form here. </p>
                
              </div>
            </div>
            <!-- _____________________________________________________ -->  
            <div>
              <input type="checkbox" id="question5" name="q" class="questions">
              <div class="plus">+</div>
              <label for="question5" class="question">
            What is the charge for processing?
              </label>
              <div class="answers">
                <p>We offer free processing on all orders over $350.  On orders less than $350 the cost of barcodes and marc records is $25.00 per order. </p>
                
              </div>
            </div>
            <!-- _____________________________________________________ -->  
            <div>
              <input type="checkbox" id="question6" name="q" class="questions">
              <div class="plus">+</div>
              <label for="question6" class="question">
            Are your books on Accelerated Reader®?
              </label>
              <div class="answers">
                <p>Accelerated Reader quizzes are available for many of our books.  The AR Logo will appear where quizzes are available.  For more about AR, please click here. </p>
                
              </div>
            </div>
            <!-- _____________________________________________________ -->  
            <div>
              <input type="checkbox" id="question7" name="q" class="questions">
              <div class="plus">+</div>
              <label for="question7" class="question">
            Are your books correlated to state and national standards?
              </label>
              <div class="answers">
                <p>Yes, all of our books are correlated to state and national standards. This web site’s correlation page will help you easily match our products with your state standards, and choose excellent selections for national standards. Otherwise, feel free to call us at 1-877-980-4450 and we’ll assist you in meeting your needs. </p>
                
              </div>
            </div>
            
            
            
            
            </div>
          
          <!---->
        </div>
    </section>
    <!---->
 


@include('front.footer')