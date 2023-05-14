<?php include 'inc/navbar.php' ;

if(isset($_POST['submit'])){
   $msg="Name:".$_POST['name']."\nEmail:".$_POST['email']."\nMobile:".$_POST['phone']."\nMessage:".$_POST['message'];
    $send=mail("info@esolution1.com","Contact Form", $msg);
    $msg="Sending Your Contact Form";
    if($msg){
         echo "<script>alert('Thanks For Contact Me! ')</script>";
      echo "<script>window.open('contact.php')</script>";
    }
    }
?>
<!-- BANNER -->
<div class="section banner-page">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-12">
            <div class="title-page">Contact Us</div>
            <ol class="breadcrumb">
            </ol>
         </div>
      </div>
   </div>
</div>
<!-- CONTACT -->
<div class="section contact">
   <div class="container">
      <div class="row">
         <div class="col-sm-3 col-md-3">
            <div class="widget download">
               <a href="#" class="btn btn-secondary btn-block btn-sidebar"><span class="fa  fa-file-pdf-o"></span> Company Brochure</a>
            </div>
            <div class="widget contact-info-sidebar">
               <div class="widget-title">
                  Contact Info
               </div>
               <ul class="list-info">
                  <li>
                     <div class="info-icon">
                        <span class="fa fa-phone"></span>
                     </div>
                     <div class="info-text">+(929) 396-0799</div>
                  </li>
                  <li>
                     <div class="info-icon">
                        <span class="fa fa-envelope"></span>
                     </div>
                     <div class="info-text">info@esolution1.com</div>
                  </li>
           
               </ul>
            </div>
         </div>
         <div class="col-sm-9 col-md-9">
            <div class="content">
               <div class="cfgen-form-container" id="cfgen-form-1">
                  <div class="cfgen-form-content">
                     <div class="cfgen-e-c">
                        <div class="cfgen-title" id="cfgen-element-1-16">Contact us</div>
                     </div>
                     <form method="post" action="">
                     <div class="cfgen-e-c">
                        <label class="cfgen-label" id="cfgen-element-1-13-label" ><span class="cfgen-label-value">Name</span><span class="cfgen-required">*</span></label>
                        <div class="cfgen-e-set" id="cfgen-element-1-13-set-c">
                           <div class="cfgen-input-group" id="cfgen-element-1-13-inputgroup-c">
                              <div class="cfgen-icon-c"  id="cfgen-element-1-13-icon"><span class="fa fa-align-justify"></span></div>
                              <div class="cfgen-input-c" id="cfgen-element-1-13-input-c">
                                 <input type="text" class="cfgen-type-text cfgen-form-value " name="name" id="cfgen-element-1-13">
                              </div>
                           </div>
                        </div>
                        <div class="cfgen-clear"></div>
                     </div>

                     <div class="cfgen-e-c">
                        <label class="cfgen-label" id="cfgen-element-1-10-label" ><span class="cfgen-label-value">Phone No</span></label>
                        <div class="cfgen-e-set" id="cfgen-element-1-10-set-c">
                           <div class="cfgen-input-group" id="cfgen-element-1-10-inputgroup-c">
                              <div class="cfgen-icon-c"  id="cfgen-element-1-10-icon"><span class="fa fa-phone-square"></span></div>
                              <div class="cfgen-input-c" id="cfgen-element-1-10-input-c">
                                 <input type="text" class="cfgen-type-text cfgen-form-value " name="phone" id="cfgen-element-1-10">
                              </div>
                           </div>
                        </div>
                        <div class="cfgen-clear"></div>
                     </div>
                     <div class="cfgen-e-c">
                        <label class="cfgen-label" id="cfgen-element-1-12-label" ><span class="cfgen-label-value">Email address</span><span class="cfgen-required">*</span></label>
                        <div class="cfgen-e-set" id="cfgen-element-1-12-set-c">
                           <div class="cfgen-input-group" id="cfgen-element-1-12-inputgroup-c">
                              <div class="cfgen-icon-c"  id="cfgen-element-1-12-icon"><span class="fa fa-envelope"></span></div>
                              <div class="cfgen-input-c" id="cfgen-element-1-12-input-c">
                                 <input type="text" class="cfgen-type-email cfgen-form-value " name="email" id="cfgen-element-1-12">
                              </div>
                           </div>
                        </div>
                        <div class="cfgen-clear"></div>
                     </div>
                     <div class="cfgen-e-c">
                        <label class="cfgen-label" id="cfgen-element-1-15-label" ><span class="cfgen-label-value">Type of Estimate</span><span class="cfgen-required">*</span></label>
                        <div class="cfgen-e-set" id="cfgen-element-1-15-set-c">
                           <div class="cfgen-input-group" id="cfgen-element-1-15-inputgroup-c">
                              <select class="cfgen-type-select cfgen-form-value " name="estimate" id="cfgen-element-1-15">
                                 <option value="Builders Estimate" >Builders Estimate</option>
                                 <option value="Architects Estimate" >Architects Estimate</option>
                                 <option value="Self Build Estimate" >Self Build Estimate</option>
                                 <option value="Other" >Other</option>
                              </select>
                           </div>
                        </div>
                        <div class="cfgen-clear"></div>
                     </div>
                     <div class="cfgen-e-c">
                        <label class="cfgen-label" id="cfgen-element-1-4-label" ><span class="cfgen-label-value">Your message</span></label>
                        <div class="cfgen-e-set" id="cfgen-element-1-4-set-c">
                           <div class="cfgen-input-group" id="cfgen-element-1-4-inputgroup-c">
                              <div class="cfgen-input-c" id="cfgen-element-1-4-input-c">
                                 <textarea class="cfgen-type-textarea cfgen-form-value " name="message" id="cfgen-element-1-4"></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="cfgen-clear"></div>
                     </div>
                     <div class="cfgen-e-c">
                        <div class="cfgen-e-set" id="cfgen-element-1-5-set-c">
                           <div class="cfgen-input-group" id="cfgen-element-1-5-inputgroup-c">
                              <div class="cfgen-input-c" id="cfgen-element-1-5-input-c">
                                 <input type="submit" class="cfgen-submit" name="submit" id="cfgen-element-1-5" value="Send">
                              </div>
                           </div>
                        </div>
                        </form>
                     </div>
                     <div class="cfgen-loading"></div>
                  </div>
                  <!-- cfgen-form-content -->
               </div>
               <!-- cfgen-form-container -->
               <div class="margin-bottom-50"></div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include 'inc/footer.php' ?>