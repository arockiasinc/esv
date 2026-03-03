<?php
session_start();
include "container/header.php" ?>



<?php

require_once 'lib/AntiSpam.php';
$antiSpam = new AntiSpam();
?>
<!--========================================================
                              CONTENT
    =========================================================-->
<main>

  <section class="well-lg__ins bg-contrast inset">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-xs-12">
          <h1 class="bold">Contact Us</h1>
          <hr class="hr__mod">
        </div>


        <div class="col-md-4 offset-8">

          <!-- Footer-Address -->
          <div class="contact__address address">
            <p>PLEASE NOTE THAT WE HAVE A LONG-STANDING COMPANY POLICY AGAINST ACCEPTING OR REVIEWING UNSOLICITED
              SUBMISSIONS OF ANY FORM OF MARKETING EMAILS.PLEASE DO NOT SEND US ANY MARKETING EMAILS THROUGH THIS
              WEBSITE.</p>
            <p>THANKS FOR YOUR UNDERSTANDING.</p>
          </div>
          <div class="contact__address address">
            <ul>
              <li><span class="fa fa-home"></span><label><strong>Address: </strong>2082 Ness Avenue, Unit 10 Winnipeg,
                  MB R3J 0Z3</label></li>
              <li><span class="fa fa-phone"></span><label><strong>Tel:</strong> (204) 582-7898</label></li>
              <li><span class="fa fa-phone"></span><label><strong>Cel:</strong> (204) 999-2402</label></li>
              <ul>
          </div>


          <!-- END Footer-Address -->



          <!-- END Inline-List -->

        </div>

        <div class="col-md-8 col-xs-12 offset-9">

          <form action="send-mail.php" method="post" class="mailform rd-mailform" id="contact-form" class="wpcf7-form init">

            <div id="form-error" class="col-md-12" style="color:#ff5722;margin-bottom:10px;"></div>

            <input type="hidden" name="form-type" value="contact">
            <fieldset>
              <ul>
                <li><input type="text" name="name" id="name" placeholder="Name"></li>
                <li><input type="text" name="<?php echo $antiSpam->getEmailFieldName(); ?>" id="email" placeholder="Email"></li>
                <div style="display:none">
                  <div class="label">Leave this empty</div>
                  <input type="text" name="email" />
                </div>
                <li><input type="text" name="phone" id="phone" placeholder="Phone"></li>
                <li><textarea name="message" placeholder="Message" id="message"></textarea></li>

                <li>
                  <div class="captcha">
                    <input type="text" name="captcha" id="captcha" class="captcha-input" placeholder="Captcha" style="display:inline-block;width:50%;">
                    <span id="txtCaptchaDiv" style="display:inline-block;padding:22px;color:#fff;background-color:#000;">566678</span>
                    <input type="hidden" id="txtCaptcha" value="566678">
                  </div>
                </li>
                <div style="display:none">
                  <div class="label">Leave this empty</div>
                  <input type="text" name="<?php
                                            $honeyPotFieldName = $antiSpam->getHoneyPotFieldName();
                                            echo $honeyPotFieldName;
                                            ?>" />
                </div>
              </ul>
              <button class="btn btn-sm btn-primary " type="submit" style="display: block;"><span>send</span></button>

            </fieldset>
            <div id="success-message" style="color: green; display: none;margin-top:10px;"></div>

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

        </div>


      </div><!--row-->

      <div class="row">
        <div class="col-sm-12 col-md-12 col-xs-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d20565.957076549093!2d-97.24137100000002!3d49.88482200000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52ea73520f358b37%3A0x8bb543d8cb05125d!2sWinnipeg%2C%20MB%20R3J%200Z3%2C%20Canada!5e0!3m2!1sen!2sus!4v1677738604784!5m2!1sen!2sus" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div><!--row-->

    </div>
  </section>


</main>
<script>
  var gencode = Math.ceil(Math.random() * 999999) + '';
  document.getElementById("txtCaptcha").value = gencode;
  document.getElementById("txtCaptchaDiv").innerHTML = gencode;
  $(document).ready(function() {
    $('#contact-form').submit(function(event) {
      event.preventDefault(); // Prevent the default form submission

      // Perform form validation
      var name = $('#name').val();
      var email = $('#email').val();
      var phone = $('#phone').val();
      var message = $('#message').val();
      var captcha = $('#captcha').val();
      var txtCaptcha = $('#txtCaptcha').val();

      if (name.trim() === '') {
        showError('Please enter your name.');
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

      if (message.trim() === '') {
        showError('Please enter your comments.');
        return;
      } else if (captcha == '') {
        showError('Please enter the captcha value');

        return;
      } else if (txtCaptcha != captcha) {
        showError('Please enter the correct captcha value');

        return;
      }

      // If all validations pass, continue with form submission via AJAX
      var formData = $(this).serialize();

      // Clear the Success or Error Containers
      $('#form-error').text("");
      $('#success-message').text("");

      // Send the AJAX request
      $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: formData,
        dataType: 'JSON',
        success: function(response) {
          // Hide any existing error messages
          if (response.type == 'error') {
            $('#form-error').text(response.text);
          } else {

            // Display the success message
            $('#success-message').text(response.text).show();
          }

          // Reset the form
          $('#contact-form')[0].reset();
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
      $('#form-error').text(errorMessage).css({
        color: 'red'
      });
    }
  });
</script>
<?php include "container/footer.php" ?>