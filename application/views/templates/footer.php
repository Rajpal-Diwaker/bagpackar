<style type="text/css">
   .resendtext{   
      border: 0;
      background: transparent;
      padding: 0;
      font-weight:700;
   }
</style>
<footer>
    <div class="footer_logodiv">
      <div class="footer_logoimg">
        <img src="<?php echo base_url();?>assets/images/logo.png" alt="">
      </div>
      <div class="social_icon">
        <a href="https://www.facebook.com/Bagpackar-LLC-102249028305985" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/in/bagpackar-llc-b38a461b7" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
      <a href="https://instagram.com/bagpackar" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="https://www.youtube.com/channel/UC4JM-wF6riQy6S_j3JV5aAg" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
      </div>
    </div>
    <div class="footer_menudiv">
    <div class="footer_menulist">
      <span class="footer_li_heading">Bagpackar</span>
      <a href="<?php echo base_url();?>about-us" target="_blank">About us</a>
      <a href="<?php echo base_url();?>careers" target="_blank">Careers</a>
      <a href="<?php echo base_url();?>faq" target="_blank">FAQ</a>
      <a href="<?php echo base_url();?>terms-condition" target="_blank">Terms & Conditions</a>
      <a href="<?php echo base_url();?>policies" target="_blank">Policies</a>     
      <a href="<?php echo base_url();?>help" target="_blank">Help</a>
    </div>
    <div class="footer_menulist">
      <span class="footer_li_heading" target="_blank">Discover</span>
      <a href="<?php echo base_url();?>history" target="_blank">Bagpackar History</a>
      <a href="<?php echo base_url();?>business-travel" target="_blank">Business Travel</a>
      <a href="<?php echo base_url();?>cancel-refund-policy" target="_blank">Cancellation and Refund policy</a>
      <a href="<?php echo base_url();?>covid-19-guidelines" target="_blank">COVID-19 Guidelines</a>
    </div>
    <div class="footer_menulist">
      <span class="footer_li_heading" target="_blank">Hosting</span>
      <a href="<?php echo base_url();?>why-host" target="_blank">Why Host</a>
      <a href="<?php echo base_url();?>responsible-hosting" target="_blank">Responsible Hosting</a>
      <a href="<?php echo base_url();?>referral" target="_blank">Referral Program</a>
    </div>
    <div class="footer_menulist">
      <span class="footer_li_heading">Contact</span>
      <a href="mailto:support@bagpackar.in">support@bagpackar.com</a>
      <a href="tel:+1 131 138 138">Hotline: +1 323 379 8733</a>
    </div>
  </div>
  </footer>
<div class="footer_stip">
   BAGPACKAR - © 2020. ALL RIGHTS RESERVED.
</div>
<!--popup start here-->
<div id="lsfmodal" class="modal fade loginopen" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-body">
            <!--login popup start here-->
            <div class="lsf_wrapper loginwr">
               <div class="lsf_formfield">
                  <div class="logodiv">
                     <img src="assets/images/logo.png" alt="">
                  </div>
                  <div class="lsf_header">
                     <span class="clearfix"> Log in</span>
                     <p> </p>
                  </div>
                  <div class="lsf_body">
                     <form id="login_form">
                        <div class="form-group">
                           <input type="text" class="lsfinput_field" name="login_email" id="login_email"  placeholder="Email">
                           <span id="login_email_error" class="form_error"></span>
                        </div>
                        <div class="form-group">
                           <div class="passwordfiled">
                              <input type="password" class="lsfinput_field passwordinput " id="login_password" name="login_password"
                              placeholder="Password" autocomplete="off">
                              <i class="fa fa-eye-slash toggle-password1" aria-hidden="true"></i>
                           </div>
                           <span id="login_password_error" class="form_error"></span>
                        </div>
                        <input type="hidden" id="device_token" name="device_token">
                        <div class="form-group singnforgotdiv">
                           <div class="checkboxdiv">
                              <label for="signed">
                                 <input type="checkbox" value="remember-me" id="signed">
                                 <span>
                                    <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
                                       <path class="a"
                                       d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
                                       transform="translate(0 -4.577)" />
                                    </svg>
                                 </span>
                                 <span class="checkinfo">
                                    Remember Me
                                 </span>
                              </label>
                           </div>
                           <a href="javascript:void(0)" class="aforgot" data-text="forgotpassword">Forgot password?</a>
                        </div>
                     </div>
                     <div class="lst_footer">
                        <div class="form-group">
                           <input type="submit" value="Sign in" class="btn_style" id="login_submit">
                        </div>
                        <div class="form-group fbgogwrapper">
                           <div id="fb-root"></div>
                           <a href="javascript:void(0)" class="fbbtn" onclick="fbLogin()">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.813 16.301">
                                 <path class="a"
                                 d="M30.558,0,28.444,0a3.712,3.712,0,0,0-3.91,4.012v1.85H22.409a.332.332,0,0,0-.332.333v2.68a.332.332,0,0,0,.332.332h2.125v6.762a.332.332,0,0,0,.332.332H27.64a.332.332,0,0,0,.332-.332V9.206h2.485a.332.332,0,0,0,.332-.332V6.194a.333.333,0,0,0-.333-.333H27.973V4.293c0-.754.18-1.136,1.161-1.136h1.424a.332.332,0,0,0,.332-.332V.336A.332.332,0,0,0,30.558,0Z"
                                 transform="translate(-22.077)" /></svg>
                                 Facebook
                              </a>
                              <a href="javascript:void(0)" class="gogbtn" id="googleBtn">
                                 <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false">
                                    <g fill="none" fill-rule="evenodd">
                                       <path
                                       d="M9 3.48c1.69 0 2.83.73 3.48 1.34l2.54-2.48C13.46.89 11.43 0 9 0 5.48 0 2.44 2.02.96 4.96l2.91 2.26C4.6 5.05 6.62 3.48 9 3.48z"
                                       fill="#EA4335"></path>
                                       <path
                                       d="M17.64 9.2c0-.74-.06-1.28-.19-1.84H9v3.34h4.96c-.1.83-.64 2.08-1.84 2.92l2.84 2.2c1.7-1.57 2.68-3.88 2.68-6.62z"
                                       fill="#4285F4"></path>
                                       <path
                                       d="M3.88 10.78A5.54 5.54 0 0 1 3.58 9c0-.62.11-1.22.29-1.78L.96 4.96A9.008 9.008 0 0 0 0 9c0 1.45.35 2.82.96 4.04l2.92-2.26z"
                                       fill="#FBBC05"></path>
                                       <path
                                       d="M9 18c2.43 0 4.47-.8 5.96-2.18l-2.84-2.2c-.76.53-1.78.9-3.12.9-2.38 0-4.4-1.57-5.12-3.74L.97 13.04C2.45 15.98 5.48 18 9 18z"
                                       fill="#34A853"></path>
                                       <path d="M0 0h18v18H0V0z"></path>
                                    </g>
                                 </svg>
                                 Google
                              </a>
                           </div>
                        </form>
                        <span class="lsline text-center"> Not a member yet? <a href="javascript:void(0);" data-text="singup">Sign up</a></span>
                     </div>
                  </div>
                  <div class="loginbgimg lsf_img">
                  </div>
               </div>
               <!--login popup end here-->
               <!--signup popup start here-->
               <div class="lsf_wrapper singupwr">
                  <div class="lsf_formfield">
                     <div class="logodiv">
                        <a href="<?php echo base_url();?>">
                           <img src="<?php echo base_url();?>assets/images/logo.png" alt="">
                        </a>
                     </div>
                     <div class="lsf_header">
                        <a href="javascript:void(0);" class="lsfactionbtn" data-text="backtologin">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
                              <path class="a"
                              d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                              transform="translate(-5.625 -6.33)" />
                           </svg>
                           Back to login
                        </a>
                        <span class="clearfix"> Signup</span>
                     </div>
                     <form id="traveller_form" method="post">
                        <div class="lsf_body">
                           <div class="form-group">
                              <input type="text" class="lsfinput_field" name="traveller_name" id="traveller_name" placeholder="Full Name" style = "text-transform:capitalize;">
                              <span id="traveller_name_error" class="form_error"></span>
                           </div>
                           <div class="form-group">
                              <input type="text" class="lsfinput_field" name="traveller_email" id="traveller_email" placeholder="E-mail ID" autocomplete="off">
                              <span id="traveller_email_error" class="form_error"></span>
                           </div>
                           <input type="hidden" name="google_id" id="google_id">
                           <input type="hidden" name="fb_id" id="fb_id">
                           <input type="hidden" name="user_image" id="user_image">
                           <input type="hidden" name="acc_type" id="acc_type" value="normal">
                           <div class="form-group countrypickern">
                              <div class="countrycodephone">
                                 <div class="phone_number_code_select countrycode">
                                    <input id="country_code" type="tel" class="form-control">
                                 </div>
                                 <div class="countryphone">
                                    <input type="text" class="lsfinput_field" name="traveller_phone" id="traveller_phone" placeholder="Phone No.">
                                 </div>
                              </div>
                              <span id="traveller_phone_error" class="form_error"></span>
                           </div>
                           <div class="form-group jqueryui-datepicker">
                              <input type="text" class="lsfinput_field" id="dob" name="dob"
                              placeholder="Select DOB" autocomplete="off">
                              <span id="dob_error" class="form_error"></span>
                           </div>
                           <div class="form-group">
                              <div class="passwordfiled">
                                 <input type="password" class="lsfinput_field passwordinput" id="traveller_password" name="traveller_password"
                                 placeholder="Password" autocomplete="off">
                                 <i class="fa fa-eye-slash toggle-password" aria-hidden="true"></i>
                              </div>
                              <span id="traveller_password_error" class="form_error"></span>
                           </div>
                           <input type="hidden" name="device_token" id="device_token1">
                           <div class="form-group">
                              <div class="passwordfiled">
                                 <input type="password" class="lsfinput_field passwordinput" id="traveller_confirm_password"
                                 placeholder="Confirm Password" autocomplete="off">
                                 <i class="fa fa-eye-slash toggle-password" aria-hidden="true"></i>
                              </div>
                              <span id="traveller_confirm_error" class="form_error"></span>
                           </div>
                        </div>
                        <div id="recaptcha-container" data-sitekey="6LehK-wUAAAAAHCEyAOzzx8st9rvIzpRx79EHbsJ
                        "data-callback="verifyCaptcha" style="transform:scale(1.01);-webkit-transform:scale(1.01);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                        <input type="hidden" id="reCaptcha">
                        <span id="recaptcha_error" class="form_error"></span>
                        <div class="lst_footer">
                           <div class="form-group">
                              <input type="submit" value="Register" class="btn_style" id="traveller_submit">
                           </div>
                        </form>
                        <span class="lsline text-center">By signing in or creating an account you agree to our <a
                           href="javascript:void(0)">Terms of Use</a> and our <a href="javascript:void(0)"> Privacy
                           Policy</a></span>
                        </div>
                     </div>
                     <div class="singupbgimg lsf_img">
                     </div>
                  </div>
                  <!--signup popup end here-->
                  <!--forgot popup start here-->
                  <div class="lsf_wrapper forgotwr">
                     <div class="lsf_formfield">
                        <div class="logodiv">
                           <img src="assets/images/logo.png" alt="">
                        </div>
                        <div class="lsf_header">
                           <a href="javascript:void(0);" class="lsfactionbtn" data-text="backtologin">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
                                 <path class="a"
                                 d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                                 transform="translate(-5.625 -6.33)" />
                              </svg>
                              Back 
                           </a>
                           <span class="clearfix"> Forgot Password</span>
                           <p>Enter your registered Email ID</p>
                        </div>
                        <form id="forgot_form">
                           <div class="lsf_body">
                              <div class="form-group">
                                 <input type="text" class="lsfinput_field" name="forgot_email" id="forgot_email" placeholder="E-mail ID" >
                                 <span id="forgot_email_error" class="form_error"></span>
                              </div>
                              <div class="form-group">
                                 <span class="lsfnote">*A link to reset password will be sent to the provided email id</span>
                              </div>
                           </div>
                           <div class="lst_footer">
                              <div class="form-group">
                                 <a href="javascript:void(0)" class="btn_style">Submit</a>
                              </form>
                              <!-- <input type="submit" value="Submit" class="btn_style" data-text="otpopen"> -->
                           </div>
                        </div>
                     </div>
                     <div class="forgotbgimg lsf_img">
                     </div>
                  </div>
                  <!--forgot popup end here-->
                  <!--otp popup start here-->
                  <div class="lsf_wrapper otpwr" id="otp_popup">
                     <div class="lsf_formfield">
                        <div class="logodiv">
                           <img src="<?php echo base_url();?>assets/images/logo.png" alt="">
                        </div>
                        <div class="lsf_header">
                           <a href="javascript:void(0);" class="lsfactionbtn" data-text="backtosingup">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
                                 <path class="a"
                                 d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                                 transform="translate(-5.625 -6.33)" />
                              </svg>
                              Back 
                           </a>
                           <span class="clearfix"> OTP Verification</span>
                        </div>
                        <form  method="post" id="otp_form">
                           <div class="lsf_body">
                              <div class="form-group">
                                 <div class="digit-group">
                                    <input type="text" id="digit-1" name="digit-1" data-next="digit-2" />
                                    <input type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" />
                                    <input type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" />
                                    <input type="text" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" />
                                    <input type="text" id="digit-5" name="digit-5" data-next="digit-6" data-previous="digit-4" />
                                    <input type="text" id="digit-6" name="digit-6" data-previous="digit-5" />
                                 </div>
                                 <span id="otp_error" class="form_error" ></span>
                              </div>
                              <div class="form-group">
                                 <span class="lsline text-left">Didn’t Received the Code?<button type="button" class="resendtext" id="resend">Resend
                                 Now</button></span>
                                 <div id="recaptcha-container1" data-sitekey="6LehK-wUAAAAAHCEyAOzzx8st9rvIzpRx79EHbsJ
                                 "data-callback="verifyCaptcha1" style="transform:scale(1.01);-webkit-transform:scale(1.01);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                                 <input type="hidden" id="reCaptcha1">
                                 <span id="recaptcha_error1" class="form_error"></span> 
                                 <div id="time_left" >Time left  <span id="timer"></span></div>
                              </div>
                           </div>
                           <div class="lst_footer">
                              <div class="form-group">
                                 <input type="submit" value="Submit" class="btn_style" id="otp_submit">
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="otpbgimg lsf_img"></div>
                  </div>
               </div>
               <!--otp popup end here-->
            </div>
         </div>
      </div>
   </div>
   <!--fixed footer on mobile -->
   <div class="fixedfooter" id="fixedfooter">
      <?php $checkLogin = @$_SESSION['webuser_bgpkr']['email']?1:0;?>
      <input type="hidden" id="checkLoginf" value="<?= $checkLogin;?>">
      <a href="<?php echo base_url();?>">
         <svg  width="40.5" height="36" viewBox="0 0 40.5 36">
            <path id="Icon_awesome-hotel" data-name="Icon awesome-hotel" d="M39.375,4.5A1.125,1.125,0,0,0,40.5,3.375V1.125A1.125,1.125,0,0,0,39.375,0H1.125A1.125,1.125,0,0,0,0,1.125v2.25A1.125,1.125,0,0,0,1.125,4.5H2.249v27H1.125A1.125,1.125,0,0,0,0,32.625v2.25A1.125,1.125,0,0,0,1.125,36H18V30.375a1.128,1.128,0,0,1,1.125-1.125h2.25A1.128,1.128,0,0,1,22.5,30.375V36H39.375A1.125,1.125,0,0,0,40.5,34.875v-2.25A1.125,1.125,0,0,0,39.375,31.5H38.25V4.5ZM18,7.65a.968.968,0,0,1,.9-.9h2.7a.968.968,0,0,1,.9.9v2.7a.968.968,0,0,1-.9.9H18.9a.968.968,0,0,1-.9-.9V7.65Zm0,6.75a.968.968,0,0,1,.9-.9h2.7a.968.968,0,0,1,.9.9v2.7a.968.968,0,0,1-.9.9H18.9a.968.968,0,0,1-.9-.9V14.4ZM9,7.65a.968.968,0,0,1,.9-.9h2.7a.968.968,0,0,1,.9.9v2.7a.968.968,0,0,1-.9.9H9.9a.968.968,0,0,1-.9-.9ZM12.6,18H9.9a.968.968,0,0,1-.9-.9V14.4a.968.968,0,0,1,.9-.9h2.7a.968.968,0,0,1,.9.9v2.7A.968.968,0,0,1,12.6,18Zm.9,9A6.75,6.75,0,0,1,27,27Zm18-9.9a.968.968,0,0,1-.9.9H27.9a.968.968,0,0,1-.9-.9V14.4a.968.968,0,0,1,.9-.9h2.7a.968.968,0,0,1,.9.9Zm0-6.75a.968.968,0,0,1-.9.9H27.9a.968.968,0,0,1-.9-.9V7.65a.968.968,0,0,1,.9-.9h2.7a.968.968,0,0,1,.9.9Z"/>
         </svg>
        STAY
      </a>
      <a href="<?php echo base_url();?>favourites"> 
         <svg version="1.1" width="40" height="40" x="0px" y="0px" viewBox="0 0 477.534 477.534" style="enable-background:new 0 0 477.534 477.534;" xml:space="preserve">
           <g>
              <g>
               <path d="M438.482,58.61c-24.7-26.549-59.311-41.655-95.573-41.711c-36.291,0.042-70.938,15.14-95.676,41.694l-8.431,8.909
               l-8.431-8.909C181.284,5.762,98.663,2.728,45.832,51.815c-2.341,2.176-4.602,4.436-6.778,6.778
               c-52.072,56.166-52.072,142.968,0,199.134l187.358,197.581c6.482,6.843,17.284,7.136,24.127,0.654
               c0.224-0.212,0.442-0.43,0.654-0.654l187.29-197.581C490.551,201.567,490.551,114.77,438.482,58.61z"/>
            </g>
         </g>
      </svg>
      Favourite
   </a>
   <?php if(!isset($_SESSION['webuser_bgpkr']['email'])) {?>
      <a href="javascript:void(0);" data-text="login">
         <svg width="31.5" height="36" viewBox="0 0 31.5 36">
            <path id="Icon_awesome-user" data-name="Icon awesome-user" d="M15.75,18a9,9,0,1,0-9-9A9,9,0,0,0,15.75,18Zm6.3,2.25H20.876a12.24,12.24,0,0,1-10.252,0H9.45A9.452,9.452,0,0,0,0,29.7v2.925A3.376,3.376,0,0,0,3.375,36h24.75A3.376,3.376,0,0,0,31.5,32.625V29.7A9.452,9.452,0,0,0,22.05,20.25Z"/>
         </svg>
         Login
      </a>
   <?php }else{ ?>

    <a href="javascript:void(0);" class="person-icon"> 
      <span class="pimage">
       <?php
       $img = $_SESSION['webuser_bgpkr']['image'];
       $name = $_SESSION['webuser_bgpkr']['name'];
       if(!empty($img)){?>
         <img src="<?php echo $img;?>" alt="">
      <?php }else{ ?>
         <div class="profileifnotImage"><?php echo ucfirst($name[0]);?></div>
      <?php } ?>
   </span>
   <span class="person-imgname"><?php echo $name;?></span>  
</a>  
<?php } ?>
</div>
<!--fixed footer on mobile -->
</body>
</html>
<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="1036820468864-4n5756u7knjkfrvk5alnhek1t3f79miu.apps.googleusercontent.com">
<script src="https://apis.google.com/js/client:platform.js?onload=googleInit" async="true" defer></script>
<!--  <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>   -->
<script type="text/javascript">

   $('#mark-fav').on('click', function () {
     var formStatus = true;
     if ($("#checkLoginf").val().trim() == "0") 
     {      
       formStatus = false;      
       $('#lsfmodal').removeClass('signupopen');
       $('#lsfmodal').addClass('loginopen');
       $('#lsfmodal').modal('show');
    }
    if (!formStatus) 
    {     
       event.preventDefault();    
    }

 });

   $(document).ready(function() { 

// $('#mark-fav').on('click',function(){
//   $(this).find('i').toggleClass('fa-heart-o fa-heart');
// })
window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
recaptchaVerifier.render();
});
   
   var verifyCaptcha = function(response) {
     $("#reCaptcha").val(response);
  };
  var verifyCaptcha1 = function(response) {
     $("#reCaptcha1").val(response);
  };


  $("#dob").datepicker({
     changeMonth: true,
     changeYear: true,
     maxDate: '-18y', 
     dateFormat:'dd-mm-yy',
     beforeShow: function(input, obj) {
       $(input).after($(input).datepicker('widget'));
    }, 
    onSelect: function(dateText, instance) {
       $('#dob_error').hide();
    }
 });

   //==============end dob script=================//
   
   $(window).scroll(function() {    
      var scroll = $(window).scrollTop();

      if (scroll >= 500) {
         $("body").addClass("showsearch");
      } else {
         $("body").removeClass("showsearch");
      }
   });
   //===========google init===================//
   function googleInit(){
      gapi.load('auth2', function() {
         auth2 = gapi.auth2.init({});
         element = document.getElementById('googleBtn');
         auth2.attachClickHandler(element, {}, onSuccess, onFailure);
      });
   }
   
   
   // Sign-in success callback
   function onSuccess(googleUser) {
      $(".loaderCntr").show();
      gapi.client.load('oauth2', 'v2', function () {
        var request = gapi.client.oauth2.userinfo.get({
          'userId': 'me'
       });
        request.execute(function (resp) {
          googleAjax(resp);
       });
     });
   }
   
   // Sign-in failure callback
   function onFailure(error) {
      console.log("error",error)
   }
   
   function googleAjax(userdata){
      let google_id=(userdata.id!="")?userdata.id:"";
      let name=(userdata.name!="")?userdata.name:"";
      let email=(userdata.email!="")?userdata.email:"";
      let user_image=(userdata.picture!="")?userdata.picture:"";
      let device_token=$('#device_token').val(); 
      let acc_type="google"; 
      if(google_id!=""){
         $(".loaderCntr").show();
         $.ajax({
           url: "<?php echo base_url();?>googleAjax",
           type: 'POST',
           data:{"google_id":google_id,"device_token":device_token,"email":email,"acc_type":acc_type},
           success: function(response){ 
            if(response !=0 && response!="new"){
             alertify.notify('Login Successfully', 'success', 3)
            
             $('#guest_id').val(response)
             $('#lsfmodal').removeClass('loginopen');
             $('#lsfmodal').removeClass('forgotopen');
             $('#lsfmodal').removeClass('otpopen');
             $('#lsfmodal').removeClass('signupopen');
             $('body').removeClass('forlsmodal');
             $('#lsfmodal').modal('hide');
             
               $("#header").load(" #header > *");
               $("#fixedfooter").load(" #fixedfooter > *");
              
          $(".loaderCntr").hide();

          $(".loaderCntr").hide();
       }else if(response==0){
         $(".loaderCntr").hide();  
         alertify.notify('Email already exists!.', 'error', 3, function(){});
         return false; 
      }else{
         $("#traveller_name").val(name);
         $("#traveller_email").val(email);
         $("#acc_type").val(acc_type);
         $("#google_id").val(google_id);
         $("#user_image").val(user_image);
         $('#lsfmodal').removeClass('loginopen');
         $('#lsfmodal').removeClass('forgotopen');
         $('#lsfmodal').removeClass('otpopen');
         $('#lsfmodal').addClass('signupopen');
         $('#lsfmodal').modal('show');
         $(".loaderCntr").hide();
      }
   } 
});
      }else{
         $(".loaderCntr").hide();  
         alertify.notify('Something Went Wrong!.', 'error', 3, function(){});
         return false;   
      }

   }    
   
   
   //fb===============login=========================//
   
   window.fbAsyncInit = function() {
      FB.init({
         appId      : '206293614002149',
         cookie     : true,
         status     : true,
         xfbml      : true,
         version    : 'v7.0'
      });
      FB.AppEvents.logPageView();   
   };
   
   $(window).ready(function(){
      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
   });
   //=====fb login=============//
   function fbLogin(){
      FB.login(function(response){
         if(response.authResponse){
           fbAfterLogin();
        }
     });
   }
   
   function fbAfterLogin(){
      FB.getLoginStatus(function(response) {
         if (response.status === 'connected') {  
           FB.api('/me?fields=id,first_name,last_name,email,gender,locale,picture', function(response) {
             fbAjax(response);
          });
        }
     });
   }
   
   function fbAjax(userdata){
      let fb_id=(userdata.id!="")?userdata.id:"";
      let first_name=(userdata.first_name!="")?userdata.first_name:"";
      let last_name=(userdata.last_name!="")?userdata.last_name:"";
      let email=(userdata.email!="")?userdata.email:"";
      let user_image=(userdata.picture.data.url!="")?userdata.picture.data.url:"";
      let device_token=$('#device_token').val(); 
      let acc_type="fb"; 
      if(fb_id!=""){
         $(".loaderCntr").show();
         $.ajax({
            url: "<?php echo base_url();?>fbAjax",
            type: 'POST',
            data:{"fb_id":fb_id,"device_token":device_token,"email":email,"acc_type":acc_type},
            success: function(response){ 
               if(response !=0 && response!="new"){
                alertify.notify('Login Successfully', 'success', 3)
                 
                $('#guest_id').val(response)
                $('#lsfmodal').removeClass('loginopen');
                $('#lsfmodal').removeClass('forgotopen');
                $('#lsfmodal').removeClass('otpopen');
                $('#lsfmodal').removeClass('signupopen');
                $('body').removeClass('forlsmodal');
                $('#lsfmodal').modal('hide');
                
                  $("#header").load(" #header > *");
                  $("#fixedfooter").load(" #fixedfooter > *");
               
             $(".loaderCntr").hide();
          }else if(response==0){
             $(".loaderCntr").hide();  
             alertify.notify('Email already exists!.', 'error', 3, function(){});
             return false; 
          }else{
             $("#traveller_name").val(first_name+' '+last_name);
             $("#traveller_email").val(email);
             $("#acc_type").val(acc_type);
             $("#fb_id").val(fb_id);
             $("#user_image").val(user_image);
             $('#lsfmodal').removeClass('loginopen');
             $('#lsfmodal').removeClass('forgotopen');
             $('#lsfmodal').removeClass('otpopen');
             $('#lsfmodal').addClass('signupopen');
             $('#lsfmodal').modal('show');
             $(".loaderCntr").hide();
          }
       } 

    });
      }else{
         $(".loaderCntr").hide();  
         alertify.notify('Something Went Wrong!.', 'error', 3, function(){});
         return false;   
      }
   }  
   //===========like=====================//
   $(document).on('click', '#like_btn', function (event) {
      if($('#guest_id').val()==""){
         $('#lsfmodal').removeClass('forgotopen');
         $('#lsfmodal').removeClass('otpopen');
         $('#lsfmodal').removeClass('signupopen');
         $('body').addClass('forlsmodal');
         $('#lsfmodal').addClass('loginopen');
         $('#lsfmodal').modal('show');
      }else if ($('#guest_id').val()!="" && $('#guest_id').val()==$('#like_btn').attr("data-id")){
         alertify.alert("Host can't like his own property.", function() {
            window.location.reload();
         });
      }else{ 
         var guest_id=$('#guest_id').val();  
         var host_id=$(this).attr("data-id");
         if($(this).find('i').hasClass('fa fa-heart')){
            $(this).find("i").removeClass("fa fa-heart").addClass('fa fa-heart-o');
            like(guest_id,host_id,1);
         }else{
            $(this).find("i").removeClass("fa fa-heart-o").addClass('fa fa-heart');
            like(guest_id,host_id,0);
         }
      }
   }); 
   
   
   $(document).on('click', '.fav i', function (event) {
      if($('#guest_id').val()==""){
         $('#lsfmodal').removeClass('forgotopen');
         $('#lsfmodal').removeClass('otpopen');
         $('#lsfmodal').removeClass('signupopen');
         $('body').addClass('forlsmodal');
         $('#lsfmodal').addClass('loginopen');
         $('#lsfmodal').modal('show');
      }else if ($('#guest_id').val()!="" && $('#guest_id').val()==$(this).attr("data-id")){
         $('#like_error').modal('show');
      }else{ 
         var guest_id=$('#guest_id').val();  
         var host_id=$(this).attr("data-id");
         var like_class=$(this).attr("class");
         if(like_class=='fa fa-heart-o'){
            $(this).toggleClass("fa-heart-o fa-heart");
            like(guest_id,host_id,1);
         }else{
            $(this).removeClass('fa fa-heart').addClass('fa fa-heart-o') 
            like(guest_id,host_id,0);
         }
      }
   });
   
   function like(user_id,host_id,status){
      var user_id=user_id;
      var status=status;
      var host_id=host_id;
      $.ajax({
         url: "<?php echo base_url()?>Welcome/like",
         type: 'POST',
         data:{"user_id":user_id,"status":status,"host_id":host_id},
         success: function(response){
         }
      });
   } 
   
   
   //=============google login==============//
   
   
   $('a[data-text="login"]').on('click', function () {
      $('#lsfmodal').removeClass('signupopen');
      $('#lsfmodal').removeClass('forgotopen');
      $('#lsfmodal').removeClass('otpopen');
      $('#lsfmodal').addClass('loginopen');
      $('#lsfmodal').modal('show');
   });
   $('a[data-text="singup"]').on('click', function () {
      $('#lsfmodal').removeClass('loginopen');
      $('#lsfmodal').removeClass('forgotopen');
      $('#lsfmodal').removeClass('otpopen');
      $('#lsfmodal').addClass('signupopen');
      $('#lsfmodal').modal('show');
   });
   $('#lsfmodal a[data-text="singup"]').on('click', function () {
      $('#lsfmodal').removeClass('loginopen');
      $('#lsfmodal').removeClass('forgotopen');
      $('#lsfmodal').removeClass('otpopen');
      $('#lsfmodal').addClass('signupopen');
      $('#lsfmodal').modal('show');
   });
   $('#lsfmodal a[data-text="backtologin"]').on('click', function () {
      $('#lsfmodal').removeClass('signupopen');
      $('#lsfmodal').removeClass('forgotopen');
      $('#lsfmodal').removeClass('otpopen');
      $('#lsfmodal').addClass('loginopen');
      $('#lsfmodal').modal('show');
   });
   $('#lsfmodal a[data-text="forgotpassword"]').on('click', function () {
      $('#lsfmodal').removeClass('signupopen');
      $('#lsfmodal').removeClass('otpopen');
      $('#lsfmodal').removeClass('loginopen');
      $('#lsfmodal').addClass('forgotopen');
      $('#lsfmodal').modal('show');
   });
   $('#lsfmodal a[data-text="backtosingup"]').on('click', function () {
      timer(3)
      $('#lsfmodal').removeClass('loginopen');
      $('#lsfmodal').removeClass('forgotopen');
      $('#lsfmodal').removeClass('otpopen');
      $('#lsfmodal').addClass('signupopen');
      $('#lsfmodal').modal('show');
   });
   $('#lsfmodal [data-text="otpopen"]').on('click', function () {
      $('#lsfmodal').removeClass('signupopen');
      $('#lsfmodal').removeClass('forgotopen');
      $('#lsfmodal').removeClass('loginopen');
      $('#lsfmodal').addClass('otpopen');
      $('#lsfmodal').modal('show');
   });
   $('#lsfmodal').on('show.bs.modal', function () {
      $('body').addClass('forlsmodal');
   });
   $('#lsfmodal').on('hide.bs.modal', function () {
      $('.form-group').find('input:text').val('');
      $('.form_error').hide();
      $('body').removeClass('forlsmodal');
   });  
   //==========login script=========================//
   var name_exp =/^[a-zA-Z]+[\-'\s]?[a-zA-Z ]+$/;
   var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
   var filter = /^[1-9][0-9]*$/;
   var regExp = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/;
   if (localStorage.chkbox && localStorage.chkbox != '') {
      $('#signed').attr('checked', 'checked');
      $('#login_email').val(localStorage.login_email);
      $('#login_password').val(localStorage.login_password);
   } else {
      $('#signed').removeAttr('checked');
      $('#login_email').val('');
      $('#login_password').val('');
   }
   
   $('#signed').click(function() {
      if ($('#signed').is(':checked')) {
   // save username and password
   localStorage.login_email = $('#login_email').val();
   localStorage.login_password = $('#login_password').val();
   localStorage.chkbox = $('#signed').val();
} else {
   localStorage.login_email = '';
   localStorage.login_password = '';
   localStorage.chkbox = '';
}
});
   
   $('i.toggle-password1').on('click', function () {
      $(this).toggleClass("fa-eye fa-eye-slash");
      if ($(this).parents('.passwordfiled').find("input.passwordinput").attr("type") === "password") {
         $(this).parents('.passwordfiled').find("input.passwordinput").attr("type", "text");
      } else {
         $(this).parents('.passwordfiled').find("input.passwordinput").attr("type", "password");
      }  
   });
   
   //=========Email=============//
   $('#login_email').on('keyup',function(){
      var login_email = $("#login_email").val();
      if (!email_regex.test(login_email) && login_email!=''){ 
         $("#login_email_error" ).text( "Please enter valid email address." ).show(); 
      }else if(email_regex.test(login_email) || login_email.length<= 0){
         $("#login_email_error" ).hide();
      }
   });
   
   //===============country code=======//
   
   $('#country_code').on("countrychange", function() {
      $('#traveller_phone_error').hide();
   });
   
   //===========Traveller password=======//
   $('#login_password').on('keyup',function(){
      var login_password = $("#login_password").val();
      if (!regExp.test(login_password)  && login_password!=''){ 
         $("#login_password_error" ).text("Password should contain Upper case, Lower case and a Number." ).show(); 
      }
      else if (login_password.length < 6 ) { 
         $( "#login_password_error" ).text("Password should contain atleast 6 characters." ).show(); 
      }
      else if (login_password.length >10 ) { 
         $( "#login_password_error" ).text( "Password should be less than 11 characters." ).show(); 
      }
      else if(login_password.length<= 0 || login_password.length >=6 || login_password.length <=8  ){
         $("#login_password_error" ).hide();
      }
   }); 
   
   $("#login_submit").on('click',function(event){
      var formStatus=true;
      var login_email = $("#login_email").val();
      var login_password = $("#login_password").val();
   //===========Traveller password=======//
   if(login_password==""){
      formStatus=false;
      $("#login_password_error" ).text( "Please enter password." ).show(); 
   }
   else if (!regExp.test(login_password)  && login_password!=''){ 
      formStatus=false;
      $("#login_password_error" ).text( "Password should contain Upper case, Lower case and a Number." ).show(); 
   }
   else if (login_password.length < 6 ) { 
      formStatus=false;
      $( "#login_password_error" ).text("Password should contain atleast 6 characters." ).show(); 
   }
   else if (login_password.length >10 ) { 
      formStatus=false;
      $( "#login_password_error" ).text( "Password should be less than 11 characters." ).show(); 
   }
   
   
   //=========login_email=============//
   if(login_email==""){
      formStatus=false;
      $("#login_email_error" ).text( "Please enter email." ).show(); 
   }
   else if (!email_regex.test(login_email) && login_email!=''){ 
      formStatus=false;
      $("#login_email_error" ).text( "Please enter valid email address." ).show(); 
   }
   
   
   if (formStatus==false) { 
      event.preventDefault(); 
      return false;
   }
   else if(formStatus==true) {
      var data=[];
      var data=$("#login_form").serializeArray();
      $(".loaderCntr").show();
      $.ajax({
         url: "<?php echo base_url()?>login",
         type: 'POST',
         data:data,
         success: function(response){
           if(response !=0){
             alertify.notify('Login Successfully', 'success', 3)
             
             $('#guest_id').val(response)
             $('#lsfmodal').removeClass('loginopen');
             $('#lsfmodal').removeClass('forgotopen');
             $('#lsfmodal').removeClass('otpopen');
             $('#lsfmodal').removeClass('signupopen');
             $('body').removeClass('forlsmodal');
             $('#lsfmodal').modal('hide');
             
               $("#header").load(" #header > *");
               $("#fixedfooter").load(" #fixedfooter > *");
             
          $(".loaderCntr").hide();
       }else if(response==0){
          $(".loaderCntr").hide();
          alertify.notify('Please enter registered email and password', 'error', 3)
          return false; 
       }
    }
 });
      return false;
   }    
});
   //===========signup script===================//
   
   //=======country js===========//
   <?php  $guest_country = $this->session->userdata('guest_country');
   if($guest_country == "India"){?>
      var country_code = 'IN'; 
   <?php } else{?>
      var country_code = 'US';
   <?php } ?>
   var input = document.querySelector("#country_code");
   var iti =window.intlTelInput(input, {
      allowDropdown: true,
      autoPlaceholder: "off",
      initialCountry:country_code,
      separateDialCode: true,
      utilsScript: "<?php echo base_url();?>assets/js/utils.js",
   });
   $('i.toggle-password').on('click', function () {
      $(this).toggleClass("fa-eye fa-eye-slash");
      if ($(this).parents('.passwordfiled').find("input.passwordinput").attr("type") === "password") {
         $(this).parents('.passwordfiled').find("input.passwordinput").attr("type", "text");
      } else {
         $(this).parents('.passwordfiled').find("input.passwordinput").attr("type", "password");
      }
   });
   
   // otp verfication start here
   $('.digit-group').find('input').each(function () {
      $(this).attr('maxlength', 1);
      $(this).on('keyup', function (e) {
         var parent = $($(this).parent());
         if (e.keyCode === 8 || e.keyCode === 37) {
           var prev = parent.find('input#' + $(this).data('previous'));

           if (prev.length) {
             $(prev).select();
          }
       } else if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
        var next = parent.find('input#' + $(this).data('next'));

        if (next.length) {
          $(next).select();
       } else {
          if (parent.data('autosubmit')) {
            parent.submit();
         }
      }
   }
});
   });
   // otp verfication end here
   
   //======Email================//
   $('#traveller_email').on('keyup', function () {
      var traveller_email = $('#traveller_email').val();
      if(traveller_email != ''){
         $.ajax({
           type:'POST',
           url:'<?php echo base_url()?>check_email',
           data:{"email":traveller_email},
           success:function (data) {
             if(data == 1){
               $('#traveller_email_error').text('Email already exists.').show();
               $('#traveller_email').val('');
            }
         }
      });
      }
   });
   
   $('#traveller_phone').on('keyup', function () {
      var traveller_phone = $(this).val();
      if(traveller_phone != ''){
         $.ajax({
           type:'POST',

           url:'<?php echo base_url()?>check_email',
           data:{"phone":traveller_phone},
           success:function (response) {
             if(response == 1)
             {
               $('#traveller_phone_error').text(" Phone number already exists.").show();
               $('#traveller_phone').val('');
            }
         }
      });
      }
   });
   
   //===========Traveller name=======//
   $('#traveller_name').on('keyup',function(){
      var traveller_name = $("#traveller_name").val();
      if (!name_exp.test(traveller_name)  && traveller_name!=''){ 
         $("#traveller_name_error" ).text( "Please enter characters only." ).show(); 
      }else if (traveller_name.length >50 ) { 
         $( "#traveller_name_error" ).text("Name should be less than 50 characters." ).show(); 
      }
      else if(traveller_name.length<= 0 || traveller_name.length <=50 ){
         $("#traveller_name_error" ).hide();
      }
   });
   
   //=========Email=============//
   $('#traveller_email').on('keyup',function(){
      var traveller_email = $("#traveller_email").val();
      if (!email_regex.test(traveller_email) && traveller_email!=''){ 
         $("#traveller_email_error" ).text( "Please enter valid email address." ).show(); 
      }else if(email_regex.test(traveller_email) || traveller_email.length<= 0){
         $("#traveller_email_error" ).hide();
      }
   });
   
   
   //     //=========traveller_phone================//
   
   $('#traveller_phone').on('keyup',function(){
      var traveller_phone = $("#traveller_phone").val();
      if (!filter.test(traveller_phone)  && traveller_phone!=''){ 
         $("#traveller_phone_error" ).text( "Please enter valid number." ).show(); 
      }else if (traveller_phone.length < 5 && traveller_phone.length!=0 ){ 
         $("#traveller_phone_error" ).text( "Phone number should be between 4 to 15 digits." ).show(); 
      }else if (traveller_phone.length >15 ) { 
         $( "#traveller_phone_error" ).text( "Phone number should be between 4 to 15 digits." ).show(); 
      }else if(traveller_phone.length<= 0 || traveller_phone.length <=15 ){
         $("#traveller_phone_error" ).hide();

      } 
   });
   
   
   //===========Traveller password=======//
   $('#traveller_password').on('keyup',function(){
      var traveller_password = $("#traveller_password").val();
      if (!regExp.test(traveller_password)  && traveller_password!=''){ 
         $("#traveller_password_error" ).text("Password should contain Upper case, Lower case and a Number." ).show(); 
      }
      else if (traveller_password.length < 6 ) { 
         $( "#traveller_password_error" ).text("Password should contain atleast 6 characters." ).show(); 
      }
      else if (traveller_password.length >10 ) { 
         $( "#traveller_password_error" ).text( "Password should be less than 11 characters." ).show(); 
      }
      else if(traveller_password.length<= 0 || traveller_password.length >=6 || traveller_password.length <=8  ){
         $("#traveller_password_error" ).hide();
      }
   });
   
   
   $('#traveller_confirm_password').on('keyup',function(){
      var traveller_confirm_password = $("#traveller_confirm_password").val();
      var traveller_password = $("#traveller_password").val();
      if (traveller_password !=traveller_confirm_password) 
      { 
         $("#traveller_confirm_error" ).text( "Password and Confirm password do not match." ).show(); 
      }
      else if(traveller_confirm_password.length<= 0 || traveller_password.length == traveller_confirm_password.length  ){
         $("#traveller_confirm_error" ).hide();
      }
   });
   
   
   
   $('#traveller_submit').on('click',function(){
      var formStatus=true;
      var traveller_name = $("#traveller_name").val();
      var traveller_password = $("#traveller_password").val();
      var traveller_phone = $("#traveller_phone").val();
      var dob = $("#dob").val();
      var traveller_email = $("#traveller_email").val();
      var traveller_confirm_password = $("#traveller_confirm_password").val();

      if(traveller_name==""){
         formStatus=false;
         $("#traveller_name_error" ).text( "Please enter name." ).show(); 
      }
      else if (!name_exp.test(traveller_name)  && traveller_name!=''){ 
         formStatus=false;
         $("#traveller_name_error" ).text( "Please enter characters only." ).show(); 
      }else if (traveller_name.length >50 ) {
         formStatus=false; 
         $( "#traveller_name_error" ).text("Name should be less than 50 characters." ).show(); 
      }

   //=========Email=============//
   if(traveller_email==""){
      formStatus=false;
      $("#traveller_email_error" ).text( "Please enter email." ).show(); 
   }
   else if (!email_regex.test(traveller_email) && traveller_email!=''){ 
      formStatus=false;
      $("#traveller_email_error" ).text( "Please enter valid email address." ).show(); 
   }
   
   //     //=========traveller_phone================//
   if(traveller_phone==""){
      formStatus=false;
      $("#traveller_phone_error" ).text( "Please enter Phone No." ).show(); 
   }
   else if (!filter.test(traveller_phone)  && traveller_phone!=''){ 
      formStatus=false;
      $("#traveller_phone_error" ).text( "Please enter valid number." ).show(); 
   }else if (traveller_phone.length < 5 && traveller_phone.length!=0 ){ 
      formStatus=false;
      $("#traveller_phone_error" ).text( "Phone number should be between 4 to 15 digits." ).show(); 
   }else if (traveller_phone.length >15 ) { 
      formStatus=false;
      $( "#traveller_phone_error" ).text( "Phone number should be between 4 to 15 digits." ).show(); 
   }
   //==============dob====================//
   if(dob==""){
      formStatus=false;
      $("#dob_error" ).text("Please select date of birth." ).show(); 
   }
   //===========Traveller password=======//
   if(traveller_password==""){
      formStatus=false;
      $("#traveller_password_error" ).text( "Please enter password." ).show(); 
   }
   else if (!regExp.test(traveller_password)  && traveller_password!=''){ 
      formStatus=false;
      $("#traveller_password_error" ).text( "Password should contain Upper case, Lower case and a Number." ).show(); 
   }
   else if (traveller_password.length < 6 ) { 
      formStatus=false;
      $( "#traveller_password_error" ).text( "Password should contain atleast 6 characters." ).show(); 
   }
   else if (traveller_password.length >10 ) { 
      formStatus=false;
      $( "#traveller_password_error" ).text( "Password should be less than 11 characters." ).show(); 
   }
   
   if(traveller_confirm_password==""){
      formStatus=false;
      $("#traveller_confirm_error" ).text( "Please enter confirm password." ).show(); 
   }else if (traveller_password !=traveller_confirm_password) 
   { 
      formStatus=false;
      $("#traveller_confirm_error" ).text("Password and Confirm password do not match." ).show(); 
   }
   else if(grecaptcha.getResponse(0)== ""){
      formStatus=false;
      $("#recaptcha_error" ).text("Please verify captcha.").show().fadeOut(4000);
   }
   
   if (formStatus==false) { 
      event.preventDefault(); 
      return false;
   }
   else if(formStatus==true) {
      $(".loaderCntr").show(); 
      event.preventDefault();    
      var number = iti.getNumber();
      var countryData = iti.getSelectedCountryData();
      var code =countryData.dialCode;
      var countrycode='+' + code;
      var country_lang_code=countryData.iso2;
      var traveller_phone=document.getElementById('traveller_phone').value;
      var firebase_number=countrycode.toString() + traveller_phone.toString();
      $.ajax({
         type:'POST',
         url:'<?php echo base_url()?>phone_verification',
         data:{"phone":traveller_phone,"code":country_lang_code},
         success:function (data) {
           if(data == 0){
             $(".loaderCntr").hide();   
             $('#traveller_phone_error').text('Enter valid number.').show();
             $('#traveller_phone').focus();
             return false;
          }else{
             $(".loaderCntr").show(); 
             send_otp(firebase_number); 
          }
       }
    })
   }
   
});

function send_otp(phone){
   var phone=phone; 
   var recaptchaVerifier=window.recaptchaVerifier;
   firebase.auth().signInWithPhoneNumber(phone,recaptchaVerifier).then(function (confirmationResult) {
      window.confirmationResult = confirmationResult;
      console.log("success");
      $(".loaderCntr").hide();
      alertify.notify('OTP has been send on your mobile number', 'success', 3);
      $('#lsfmodal').removeClass('signupopen');
      $('#lsfmodal').addClass('otpopen');
      $('#recaptcha-container1').hide();
      disableResend();
      $('#time_left').show();
      timer(60);
   }).catch(function (error) {
      console.log("error",error); 
      $(".loaderCntr").hide();
      alertify.notify('Something went wrong!', 'error', 3);
      return false; 
   });
}

function send_otp1(phone){
   var phone=phone; 
   var recaptchaVerifier=window.recaptchaVerifier1;
   firebase.auth().signInWithPhoneNumber(phone,recaptchaVerifier).then(function (confirmationResult) {
      window.confirmationResult = confirmationResult;
      console.log("success");
      $(".loaderCntr").hide();
      alertify.notify('OTP has been send on your mobile number', 'success', 3)
      $('#lsfmodal').removeClass('signupopen');
      $('#lsfmodal').addClass('otpopen');
      $('#recaptcha-container1').hide();
      disableResend();
      $('#time_left').show();
      timer(60);
   }).catch(function (error) {
      console.log("error",error); 
      $(".loaderCntr").hide();
      alertify.notify('Something went wrong!', 'error', 3)
      return false; 
   });
}

   //=====================use for resend otp=========================//
   
   //======disabled resend==================//
   function disableResend(){
      $("#resend").addClass("disabled");
      timer(60);
      setTimeout(function() {
         $('#resend').removeClass("disabled");
         $('#recaptcha-container1').show();
         window.recaptchaVerifier1=new firebase.auth.RecaptchaVerifier('recaptcha-container1');
         recaptchaVerifier1.render(); 
      }, 60000);
   }
   //============timer===================//
   let timerOn = true;
   function timer(remaining) {
      var m = Math.floor(remaining / 60);
      var s = remaining % 60;
      m = m < 10 ? '0' + m : m;
      s = s < 10 ? '0' + s : s;
      document.getElementById('timer').innerHTML = m + ':' + s;
      remaining -= 1;
      if(remaining >= 0 && timerOn) {
         setTimeout(function() {
           timer(remaining);
        }, 1000);
         return;
      }
      if(!timerOn) {
         return;
      }
      $('#time_left').hide();
   }
   
   //===============end timer=================//
   
   $('#resend').on('click',function(){
      if(grecaptcha.getResponse(1)== ""){
         $("#recaptcha_error1" ).text("Please verify captcha.").show().fadeOut(4000);
         return false;
      }  
      $('#time_left').show(); 
      disableResend();
      timer(60);  
      $(".loaderCntr").show();
      var number = iti.getNumber();
      var countryData = iti.getSelectedCountryData();
      var code =countryData.dialCode;
      var countrycode='+' + code;
      var traveller_phone=document.getElementById('traveller_phone').value;
      var firebase_number=countrycode.toString() + traveller_phone.toString();
      send_otp1(firebase_number); 
   });
   
   //======end resen otp==================//
   
   $('#digit-1, #digit-2, #digit-3, #digit-4, #digit-5,#digit-6').on('keyup',function(){
      $("#otp_error" ).hide();
   })
   
   $("#otp_submit").on('click',function(event){
      event.preventDefault();
      var filter1 = /^[0-9]*$/; 
      var formStatus1=true; 
      var digit1=$('#digit-1').val();
      var digit2=$('#digit-2').val();
      var digit3=$('#digit-3').val();
      var digit4=$('#digit-4').val();
      var digit5=$('#digit-5').val();
      var digit6=$('#digit-6').val();
      if(digit1=="" || digit2=="" || digit3=="" ||  digit4=="" || digit5=="" || digit6==""){
         $('#otp_error').text("Please enter valid otp").show();
         return false;
      }else if (!filter1.test(digit1)  || !filter1.test(digit2) || !filter1.test(digit3) || !filter1.test(digit4) || !filter1.test(digit5) || !filter1.test(digit6) ){
         $("#otp_error").text( "Please enter only number." ).show();
         return false;
      }
      else {
         $(".loaderCntr").show();
         var enter_otp=digit1.toString() + digit2.toString() + digit3.toString() + digit4.toString() + digit5.toString() + digit6.toString();
         console.log("enter_otp",enter_otp);
         console.log("confirmationResult",confirmationResult);
         confirmationResult.confirm(enter_otp).then(function (result) {
           console.log("success",result);
           var data=[];
           var number = iti.getNumber();
           var countryData = iti.getSelectedCountryData();
           var code =countryData.dialCode;
           var country_lang_code=countryData.iso2;
           var data=$("#traveller_form").serializeArray();
           data.push({name:"country_code",value:code});
           data.push({name:"country_lang_code",value:country_lang_code});
           $.ajax({
            url: "<?php echo base_url()?>signup",
             type: 'POST',
             data:data,
             success: function(response){
                if(response !=0){
                 $('#traveller_name,#traveller_email,#traveller_phone,#traveller_password,#traveller_confirm_password').val('');
                 alertify.notify('Signup Successfully', 'success', 3)
                 
                 $('#guest_id').val(response)
                 $('#lsfmodal').removeClass('loginopen');
                 $('#lsfmodal').removeClass('forgotopen');
                 $('#lsfmodal').removeClass('otpopen');
                 $('#lsfmodal').removeClass('signupopen');
                 $('body').removeClass('forlsmodal');
                 $('#lsfmodal').modal('hide');
                 
                  $("#header").load(" #header > *");
                  $("#fixedfooter").load(" #fixedfooter > *");
                 
             $(".loaderCntr").hide();
          }else if(response==0){
           console.log("error");
           alertify.notify('Something went wrong!', 'error', 3)
           return false; 
        }

     }
  });  
        }).catch(function (error) {
           $(".loaderCntr").hide();
           console.log("error");
           alertify.notify('Invalid OTP!', 'error', 3)
           return false; 
        });

     }
  });  
   
   //===========forgot script==========================//
   $('#forgot_email').on('keyup',function(){
      var forgot_email = $("#forgot_email").val();
      if (!email_regex.test(forgot_email) && forgot_email!=''){
         $("#forgot_email_error" ).text( "Please enter valid email address." ).show(); 
      }else if(email_regex.test(forgot_email) || forgot_email.length<= 0){
         $("#forgot_email_error" ).hide();
      }
   });
   
   $("#forgot_form").on('click',function(event){
      var formStatus=true;
      var forgot_email = $("#forgot_email").val();

   //=========forgot_email=============//
   if(forgot_email==""){
      formStatus=false;
      $("#forgot_email_error" ).text( "Please enter email." ).show(); 
   }
   else if (!email_regex.test(forgot_email) && forgot_email!=''){ 
      formStatus=false;
      $("#forgot_email_error" ).text( "Please enter valid email address." ).show(); 
   }
   
   if (formStatus==false) { 
      event.preventDefault(); 
      return false;
   }
   else if(formStatus==true) { 
      var data=[];
      var data=$("#forgot_form").serializeArray();
      $(".loaderCntr").show();
      $.ajax({
         url: "<?php echo base_url()?>forgot",
         type: 'POST',
         data:data,
         success: function(response){
           if(response ==1){
             $('#forgot_email').val('');
             alertify.notify('Link has been send successfully', 'success',5)
             
             $('#lsfmodal').removeClass('forgotopen');
             $('#lsfmodal').removeClass('otpopen');
             $('#lsfmodal').removeClass('signupopen');
             $('body').addClass('forlsmodal');
             $('#lsfmodal').addClass('loginopen');
             $('#lsfmodal').modal('show');
             
              $("#header").load(" #header > *");
              $("#fixedfooter").load(" #fixedfooter > *");
             
         $(".loaderCntr").hide();  
      }else if(response==0){
        $(".loaderCntr").hide();
        alertify.notify("Email doesn't exist!",'error', 3)
        return false; 
     }

  }

});
      return false;
   }    
});
</script>