<?php
session_start();
include'container/header.php';
require_once 'lib/AntiSpam.php';
$antiSpam = new AntiSpam();
?>

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 

<style>
    
        #success-message{
            color: green;margin-top: 10px;font-size: 20px;text-align: center;display: none;font-weight:bold;
        }
    </style>
<div class="btContentWrap btClear">
<section
    class="bt_bb_section gutter bt_bb_vertical_align_middle btHeadlineSquare btPageHeadline bt_bb_background_image bt_bb_background_overlay_dark_solid bt_bb_parallax btDarkSkin"
    style="background-image: url('images/bg/contact-banner-2-2.webp'); background-position: 50% -240.03px;"
    data-parallax="0.8"
    data-parallax-offset="0"
>
    <div class="bt_bb_port port">
        <div class="bt_bb_cell">
            <div class="bt_bb_cell_inner">
                <div class="bt_bb_row" data-structure="">
                    <div class="bt_bb_column bt_bb_align_center">
                        <div class="bt_bb_column_content">
                            <header class="bt_bb_headline bt_bb_style_square bt_bb_size_huge bt_bb_superheadline">
                                <h1>
                                    <span class="bt_bb_headline_content"><span>Contact us</span></span>
                                </h1>
                            </header>
                        </div>
                        <!-- /rowItemContent -->
                    </div>
                    <!-- /rowItem -->
                </div>
                <!-- /boldRow -->
            </div>
            <!-- boldCellInner -->
        </div>
        <!-- boldCell -->
    </div>
    <!-- port -->
</section>
<div class="btContentHolder">
    <div class="btContent">
        <div class="bt_bb_wrapper">
            <section id="bt_bb_section6039c93d432eb" class="bt_bb_section bt_bb_top_spacing_medium bt_bb_bottom_spacing_medium bt_bb_color_scheme_13 bt_bb_layout_boxed_1200 bt_bb_vertical_align_top">
                <div class="bt_bb_port">
                    <div class="bt_bb_cell">
                        <div class="bt_bb_cell_inner">
                            <div class="bt_bb_row_wrapper">
                                <div class="bt_bb_row" data-structure="8-4">
                                    <div class="bt_bb_column col-md-8 col-ms-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_30 animated" data-width="8">
                                        <div class="bt_bb_column_content">
                                            <div class="bt_bb_column_content_inner">
                                                <header class="bt_bb_headline bt_bb_subheadline_font_weight_medium bt_bb_dash_none bt_bb_size_large bt_bb_subheadline bt_bb_align_inherit">
                                                    <h3>
                                                        <span class="bt_bb_headline_content">
                                                            <span>
                                                                Request <b> Service</b>
                                                            </span>
                                                        </span>
                                                    </h3>
                                                    <div class="bt_bb_headline_subheadline" style="color: #808080;">
                                                        Come and visit our quarters or simply send us an email anytime you want. We are open to all suggestions from our audience.
                                                    </div>
                                                </header>
                                                <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
                                                <div class="bt_bb_text">
                                                    <div role="form" class="wpcf7" id="form-container" lang="en-US" dir="ltr">
                                                        <div class="screen-reader-response">
                                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                            <ul></ul>
                                                        </div>
                                                       <form action="send-mail" method="post" id="con-form" class="wpcf7-form init">
       
                 <div id="form-error" class="col-md-12" style="color:#ff5722"></div>
                              
                                     
                                                            <div class="btContact">
                                                                <div class="btContactRow">
                                                                    <div class="btContactColumnLeft">
                                                                        <label>NAME *</label>
                                                                        <span class="wpcf7-form-control-wrap your-name">
                                                                            <input type="text" name="fname" id="fname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" />
                                                                        </span>
                                                                    </div>
                                                                    <div class="btContactColumnRight">
                                                                        <label>LASTNAME</label>
                                                                        <span class="wpcf7-form-control-wrap your-lastname">
                                                                            <input type="text" name="lname" id="lname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" />
                                                                        </span>
                                                                    </div>
                                                                </div> 
                                                                <div class="btContactRow">
                                                                    <div class="btContactColumnLeft">
                                                                        <label>EMAIL *</label>
                                                                        <span class="wpcf7-form-control-wrap your-email">
                                                                            <input type="text" name="<?php echo $antiSpam->getEmailFieldName(); ?>" id="email" placeholder="Email">
                                                                    
                                                                        </span>
                                                                         <div style="display:none">
                  <div class="label">Leave this empty</div>
                  <input type="text" name="email" />
                </div>
                                                                    </div>
                                                                    <div class="btContactColumnRight">
                                                                        <label>PHONE NUMBER *</label>
                                                                        <span class="wpcf7-form-control-wrap your-phone">
                                                                            <input type="tel" name="phone" id="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" />
                                                                        </span>
                                                                    </div>
                                                                </div> 
                                                                <div class="btContactRow">
                                                                    <label>ADDRESS *</label>
                                                                    <span class="wpcf7-form-control-wrap your-address">
                                                                        <input type="text" name="your-address" id="yourAddress" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" />
                                                                    </span>
                                                                </div>
                                                                <div class="btContactRow">
                                                                    <label>TYPE OF SERVICE</label>
                                                                    <span class="wpcf7-form-control-wrap your-service">
                                                                        <div class="fancy-select">
                                                                            <select name="your-service" id="your-service" class="wpcf7-form-control wpcf7-select fancified"  style="" >
                                                                                <option value="">---</option>
                                                                                <option value="New Furnace Installation">New Furnace Installation</option>
                                                                                <option value="Furnace Cleaning">Furnace Cleaning</option>
                                                                                <option value="Furnace Service">Furnace Service</option>
                                                                                <option value="Furnace Repair &amp; Replacement">Furnace Repair &amp; Replacement</option>
                                                                                <option value="Heat Recovery Ventilators –HRV">Heat Recovery Ventilators –HRV</option>
                                                                                <option value="HRV Installation">HRV Installation</option>
                                                                                <option value="HRV Repair &amp; Replacement">HRV Repair &amp; Replacement</option>
                                                                                <option value="AC Installation">AC Installation</option>
                                                                                <option value="AC Cleaning">AC Cleaning</option>
                                                                                <option value="AC Service">AC Service</option>
                                                                                <option value="AC Repair &amp; Replacement">AC Repair &amp; Replacement</option>
                                                                                <option value="Duct Cleaning">Duct Cleaning</option>
                                                                                <option value="Air Quality &amp; Dust">Air Quality &amp; Dust</option>
                                                                                <option value="Manitoba Hydro Program">Manitoba Hydro Program</option>
                                                                                <option value="New Home HVAC Systems">New Home HVAC Systems</option>
                                                                                <option value="Multi-Family HVAC Systems">Multi-Family HVAC Systems</option>
                                                                                <option value="Commercial Enquiry">Commercial Enquiry</option>
                                                                                <option value="Others">Others</option> 
                                                                            </select>
                                                                            
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                                <div class="btContactMessage">
                                                                    <label> ADDITIONAL INFORMATION</label>
                                                                    <span class="wpcf7-form-control-wrap your-message">
                                                                        <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"></textarea>
                                                                    </span>
                                                                </div>
                                                                
                                                                <div class="g-recaptcha" data-sitekey="6LeG95InAAAAAAEMWPns1y1IgDmQx0UuIdnAlN9R"></div>
                                                                <div style="display:none">
                  <div class="label">Leave this empty</div>
                  <input type="text" name="<?php
                                            $honeyPotFieldName = $antiSpam->getHoneyPotFieldName();
                                            echo $honeyPotFieldName;
                                            ?>" />
                </div>
                                                                 
                                                                <br/>
                                                                <p><input type="submit" value="SEND MESSAGE" class="wpcf7-form-control wpcf7-submit" /></p>
                                                            </div>
                                              <br/><br/>
                                         
                                          
                                          <?php
            require_once __DIR__ . '/lib/AntiCSRF.php';
            $antiCSRF = new AntiCSRF();
            $antiCSRF->insertHiddenToken();
            ?>
            <input type="hidden" name="form_token" value="<?php
                                                          $csrfHoneyPot = $antiSpam->getCSRFHoneyPot();
                                                          echo $csrfHoneyPot;
                                                          ?>" />
                          
</form>
<div id="success-message"></div>

                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bt_bb_column col-md-4 col-ms-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal animated" data-width="4">
                                        <div class="bt_bb_column_content">
                                            <div class="bt_bb_column_content_inner"> 
                                                <div class="bt_bb_separator bt_bb_bottom_spacing_small bt_bb_border_style_none"></div>
                                                <div class="bt_bb_text">
                                                    <h6>Contact East Side Ventilation in Winnipeg</h6>
                                                    <p>East Side Ventilation is here to take care of your HVAC system. Our specialist crews are highly trained and can install or maintain your furnace, air conditioning, or duct work for commercial properties. Need an exhaust or dust collection system for your workshop? We can do that! We also have a large shop where Red Star journeyman and fabricators can take care of all your metal fabrication needs. </p>
                                                    <p>If you are interested in scheduling an appointment, or if you have any questions about an upcoming project, feel free to give us a call or send us an email. You can also reach us by filling out the electronic form provided on this page. Once you have submitted the eform, we will respond as soon as possible.</p>
                                                   
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
            <section
                id="bt_bb_section6039c93d44d58"
                data-parallax="0.7"
                data-parallax-offset="0" 
                class="bt_bb_section bt_bb_color_scheme_1 bt_bb_layout_wide bt_bb_vertical_align_top bt_bb_background_image bt_bb_parallax btBoxedLeft1200 bt_bb_top_spacing_medium"
                style="background-image: url('http_/prohauz.bold-themes.com/heating/wp-content/uploads/sites/3/2018/10/inner_office.html'); background-position: 50% 253.491px;"
            >
                <div class="bt_bb_port">
                    <div class="bt_bb_cell">
                        <div class="bt_bb_cell_inner">
                            <div class="bt_bb_row_wrapper">
                                <div class="bt_bb_row" data-structure="12">
                                    <div class="bt_bb_column col-md-10 col-sm-12 bt_bb_align_left bt_bb_vertical_align_middle bt_bb_animation_fade_in animate bt_bb_padding_20 animated" data-width="10">
                                        <div class="bt_bb_column_content">
                                            <div class="bt_bb_column_content_inner">
                                               
                                                <header class="bt_bb_headline bt_bb_dash_none bt_bb_size_large bt_bb_subheadline bt_bb_align_inherit">
                                                    <h3>
                                                        <span class="bt_bb_headline_content"><span>Our Winnipeg Location</span></span>
                                                    </h3> 
                                                </header>
                                                <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
                                                <div class="bt_bb_text">
                                                    <p>Our 21,000 sq. ft. state-of-the-art manufacturing plant and offices are located in the St. Boniface Industrial Park. The manufacturing plant fabricates all of our ductwork for both offices.</p>
                                                    <p>With our equipment capabilities, we are able to manufacture various exhaust systems and other metal works for residential clients. Our technicians also handle furnace installation in Winnipeg as well as other comprehensive HVAC services. If your home is in need of heating, cooling or ventilation services, East Side Ventilation would be glad to help.</p>
                                                </div>
                                                <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
                                                <div class="bt_bb_row_inner" data-structure="6-6">
                                                    <div class="bt_bb_column_inner col-md-6 col-sm-12 bt_bb_align_left bt_bb_vertical_align_top" data-width="6">
                                                        <div class="bt_bb_column_inner_content">
                                                            <div class="bt_bb_service bt_bb_color_scheme_4 bt_bb_style_borderless bt_bb_size_normal bt_bb_shape_circle bt_bb_align_left bt_bb_title_size_default bt_bb_title_weight_bold">
                                                                <span data-ico-essential="" class="bt_bb_icon_holder"></span>
                                                                <div class="bt_bb_service_content">
                                                                    <div class="bt_bb_service_content_title">WORKING HOURS</div>
                                                                    <div class="bt_bb_service_content_text">
                                                                        Monday to Thursday 8:00 AM to 4:30 PM <br/>
                                                                        <p>Friday 7:00 AM to 3:30 PM</p>
                                                                        Saturday & Sunday CLOSED
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
                                                        </div>
                                                    </div>
                                                    <div class="bt_bb_column_inner col-md-6 col-sm-12 bt_bb_align_left bt_bb_vertical_align_top" data-width="6">
                                                        <div class="bt_bb_column_inner_content">
                                                            <div class="bt_bb_service bt_bb_color_scheme_4 bt_bb_style_borderless bt_bb_size_normal bt_bb_shape_circle bt_bb_align_left bt_bb_title_size_default bt_bb_title_weight_bold">
                                                                <span data-ico-essential="" class="bt_bb_icon_holder"></span>
                                                                <div class="bt_bb_service_content">
                                                                    <div class="bt_bb_service_content_title">LOCATION</div>
                                                                    <div class="bt_bb_service_content_text">
                                                                        11 Durand Rd, Winnipeg<br />
                                                                        MB R2J 3T1
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bt_bb_row_inner" data-structure="6-6">
                                                    <div class="bt_bb_column_inner col-md-6 col-sm-12 bt_bb_align_left bt_bb_vertical_align_top" data-width="6">
                                                        <div class="bt_bb_column_inner_content">
                                                            <div class="bt_bb_service bt_bb_color_scheme_4 bt_bb_style_borderless bt_bb_size_normal bt_bb_shape_circle bt_bb_align_left bt_bb_title_size_default bt_bb_title_weight_bold">
                                                                <span data-ico-essential="" class="bt_bb_icon_holder"></span>
                                                                <div class="bt_bb_service_content">
                                                                    <div class="bt_bb_service_content_title">CALL CENTER</div>
                                                                    <div class="bt_bb_service_content_text">
                                                                         <a href="tel:+12046678700">204-667-8700</a><br />
                                                                        Give us a call 24/7
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
                                                        </div>
                                                    </div>
                                                    <div class="bt_bb_column_inner col-md-6 col-sm-12 bt_bb_align_left bt_bb_vertical_align_top" data-width="6">
                                                        <div class="bt_bb_column_inner_content">
                                                            <div class="bt_bb_service bt_bb_color_scheme_4 bt_bb_style_borderless bt_bb_size_normal bt_bb_shape_circle bt_bb_align_left bt_bb_title_size_default bt_bb_title_weight_bold">
                                                                <span data-ico-essential="" class="bt_bb_icon_holder"></span>
                                                                <div class="bt_bb_service_content">
                                                                    <div class="bt_bb_service_content_title">FAX</div>
                                                                    <div class="bt_bb_service_content_text"><u>204-667-7666</u></div>
                                                                </div>
                                                            </div>
                                                            <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
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
                </div>
            </section>
        </div>
    </div>
    <!-- /boldthemes_content -->
</div>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10283.033646096164!2d-97.04570000996478!3d49.884563295678156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52ea79fe3273bdeb%3A0x368ff6ba0db2a209!2sEast%20Side%20Ventilation%20Ltd.!5e0!3m2!1sen!2sin!4v1615781172435!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1286.8755525117838!2d-99.919437!3d49.828343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52e790dae6c1039f%3A0x4f5742189a001f9b!2s1451%20Richmond%20Ave%20E%20%238a%2C%20Brandon%2C%20MB%20R7A%207A3%2C%20Canada!5e0!3m2!1sen!2sin!4v1753761743287!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<script>
$(document).ready(function() {
  $('#con-form').submit(function(event) {
    event.preventDefault();

    var submitBtn = $(this).find('input[type="submit"]');
    submitBtn.prop('disabled', true).val("Submitting..."); // disable & change text

    // Perform form validation
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var address = $('#yourAddress').val();
    var recaptchaResponse = grecaptcha.getResponse();

    if (fname.trim() === '') {
      showError('Please enter your First name.');
      submitBtn.prop('disabled', false).val("SEND MESSAGE"); // reset correctly
      return;
    } else if (lname.trim() === '') {
      showError('Please enter your Last name.');
      submitBtn.prop('disabled', false).val("SEND MESSAGE");
      return;
    }

    if (email.trim() === '') {
      showError('Please enter your email.');
      submitBtn.prop('disabled', false).val("SEND MESSAGE");
      return;
    } else if (!isValidEmail(email)) {
      showError('Please enter a valid email address.');
      submitBtn.prop('disabled', false).val("SEND MESSAGE");
      return;
    }

    if (phone.trim() === '') {
      showError('Please enter your contact no.');
      submitBtn.prop('disabled', false).val("SEND MESSAGE");
      return;
    } else if (!isValidPhoneNumber(phone)) {
      showError('Please enter a valid contact no.');
      submitBtn.prop('disabled', false).val("SEND MESSAGE");
      return;
    }

    if (address.trim() === '') {
      showError('Please enter your Address.');
      submitBtn.prop('disabled', false).val("SEND MESSAGE");
      return;
    } else if (!recaptchaResponse) {
      showError('Please complete the reCAPTCHA.');
      submitBtn.prop('disabled', false).val("SEND MESSAGE");
      return;
    }

    var formData = $(this).serialize();

    $('#form-error').text("");
    $('#success-message').text("");

    $.ajax({
      type: 'POST',
      url: $(this).attr('action'),
      data: formData,
      dataType: 'JSON',
      success: function(response) {
        if (response.type == 'error') {
          $('#form-error').text(response.text);
          submitBtn.prop('disabled', false).val("SEND MESSAGE"); // re-enable on error
        } else {
          $('#con-form').hide();
          $('#form-container').css({
            display: 'flex',
            justifyContent: 'center',
            alignItems: 'center',
            height: '30vh'
          });
          $('#success-message').text(response.text).show();
        }
        $('#con-form')[0].reset();
      },
      error: function() {
        $('#form-error').text('Failed to send the email. Please try again later.');
        $('#success-message').hide();
        submitBtn.prop('disabled', false).val("SEND MESSAGE"); // re-enable on ajax error
      }
    });
  });

  function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

  function isValidPhoneNumber(phone) {
    var phoneRegex = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
    return phoneRegex.test(phone);
  }

  function showError(errorMessage) {
    $('#form-error').text(errorMessage).css({ color: 'red' });
  }
});

</script>

<?php include'container/footer.php' ?>