<!-- contact-form.php -->

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 
<?php if($_Slug === 'light-commercial-service-technician-winnipeg')  {
    
        $applyFor =  "Light Commercial Service Technician";
     }
      else if($_Slug === 'hvac-installer-winnipeg'){
         
         $applyFor =  "HVAC installer";
     }
     else if($_Slug === 'residential-refrigeration-hvac-technician'){
         
         $applyFor =  "Residential Refrigeration/HVAC Technician";
     }
      else if($_Slug === 'residential-sheet-metal-installer'){
         
         $applyFor =  "Residential sheet metal installer";
     }
      else if($_Slug === 'sheet-metal-fabricators'){
         
         $applyFor =  "Sheet metal Fabricators";
     }
       else if($_Slug === 'a-level&b-level-gas-fitters'){
         
         $applyFor =  "A-Level & B-Level gas fitters";
     }
    else{
        $applyFor =  "Journeyman and Apprentice sheet metal workers";
    }
     
?>


<form action="send-mail-c" method="post" id="careerForm" class="wpcf7-form init" enctype="multipart/form-data">
    
                    <div id="form-error" style="margin-bottom:10px;"></div>
               <div class="btContact">
                                       <div class="btContactRow">
                                           <input type="hidden" name="applyfor" value="<?php echo $applyFor; ?>" id="applyfor"/>
                                          <div class="btContactColumnLeft"><label>FIRST NAME*</label><span class="wpcf7-form-control-wrap your-name"><input  type="text" id="first_name" name="first_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" ></span></div>
                                          <div class="btContactColumnRight"><label>LAST NAME</label><span class="wpcf7-form-control-wrap your-lastname"><input type="text" name="last_name" id="last_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" ></span></div>
                                       </div>
                                   
                                       <div class="btContactRow">
                                          <div class="btContactColumnLeft"><label>EMAIL*</label><span class="wpcf7-form-control-wrap your-email"><input  type="text" id="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" ></span></div>
                                          <div class="btContactColumnRight"><label>PHONE NUMBER*</label><span class="wpcf7-form-control-wrap your-phone"><input type="text" id="phone" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" ></span></div>
                                          <input type="hidden" name="spam_field" id="spam_field" value="">
                                       </div>
                                       <div class="btContactRow"><label>CV/RESUME TITLE*</label><span class="wpcf7-form-control-wrap your-address">
                                          <input  type="text" name="title" id="title" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" ></span></div>
                                       <div class="btContactRow">
                                          <div class="btContactColumnLeft"><label>CV/RESUME*</label><span class="wpcf7-form-control-wrap your-address">
                                             
                                             <input  type="file" name="resume" id="resume" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" accept=".doc, .docx, .pdf"  ></span></div>
                                          <div class="btContactColumnRight">
                                          
                                     
                                          </div>
                                       </div>
                                
                                       <div class="btContactMessage"><label> COVER NOTE</label><span class="wpcf7-form-control-wrap your-message"><textarea name="message" id="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span></div>
                                        <div class="g-recaptcha" data-sitekey="6LeG95InAAAAAAEMWPns1y1IgDmQx0UuIdnAlN9R"></div>
                                        <br/>
                                       <p><input type="submit" value="SEND MESSAGE" class="wpcf7-form-control wpcf7-submit"></p>
                                    </div>
        

           <div id="success-message" style="color: green; display: none;clear:both;padding-top:10px;"></div>
              
            </form>
            
            </div>
                           </div>
                           <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Add the JavaScript to handle form submission using AJAX -->



<script>



$(document).ready(function() {
  $('#careerForm').submit(function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Perform form validationf
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var phone = $('#phone').val();
    var email = $('#email').val();
    var title = $('#title').val();
   var resume = $('#resume').prop('files')[0]; // Get the file object
    var message = $('#message').val();
    var applyfor = $('#applyfor').val();
    var spam_field = $('#spam_field').val();
    var recaptchaResponse = grecaptcha.getResponse();
  

    if (first_name.trim() === '') {
      showError('Please enter your First name.');
      return;
    }
     else if (last_name.trim() === '') {
      showError('Please enter your Last name.');
      return;
    }

    

    if (email.trim() === '') {
      showError('Please enter your email.');
      return;
    } else if (!isValidEmail(email)) {
      showError('Please enter a valid email address.');
      return;
    }
         if (phone.trim() === '') {
      showError('Please enter your contact no.');
      return;
    } else if (!isValidPhoneNumber(phone)) {
      showError('Please enter a valid contact no.');
      return;
    }
    
    
    if (title.trim() === '') {
        showError('Please enter your CV Title.');
      return;
    }
    else if (!resume) {
      showError('Please upload your resume.');
      return;
    }
    else if (!recaptchaResponse) {
          showError('Please complete the reCAPTCHA.');
          return;
        }
    
     
    
// If all validations pass, continue with form submission via AJAX
    var formData = new FormData(); // Create a new FormData object

    // Append form data to the FormData object
    formData.append('first_name', first_name);
    formData.append('last_name', last_name);
    formData.append('phone', phone);
    formData.append('email', email);
    formData.append('title', title);
    formData.append('spam_field', spam_field);
    formData.append('resume', resume); 
    formData.append('message', message);
    formData.append('applyfor', applyfor);

   
   

    // Send the AJAX request
    $.ajax({
      type: 'POST',
      url: $(this).attr('action'),
      data: formData, // Use the FormData object as the data
      contentType: false, // Set contentType to false to prevent jQuery from processing the data
      processData: false, // Set processData to false to prevent jQuery from converting the FormData object to a string
      success: function(response) {
        // Hide any existing error messages
        $('#form-error').text('');

        // Display the success message
        $('#success-message').text(response).show();

        // Reset the form
        $('#careerForm')[0].reset();
      },
      error: function() {
        // Display the error message if something went wrong
        $('#form-error').text('Failed to send the email. Please try again later.');

        // Hide the success message if there was an error
        $('#success-message').hide();
      }
    });
  });

  // Helper function to validate email format
  function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

  // Helper function to validate phone number format
  function isValidPhoneNumber(phone) {
    var phoneRegex = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
    return phoneRegex.test(phone);
  }

  // Function to display error messages
  function showError(errorMessage) {
    $('#form-error').text(errorMessage).css({ color: 'red' });
  }
});
</script>
