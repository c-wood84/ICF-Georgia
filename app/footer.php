

<section id="contact" class="contactUs row">
  <div class="container">
      <h1>Contact</h1>
      <div class="line"></div>
      <p><strong>Please fill out the form below and we will get in touch within 48 hours.</strong></p>

<!-- Form itself -->
          <form name="sentMessage" class="well" id="contactForm"  novalidate>
     <div class="control-group">
                    <div class="controls">
      <input type="text" class="form-control" 
             placeholder="Full Name" id="name" required
                 data-validation-required-message="Please enter your name" />
        <p class="help-block"></p>
       </div>
           </div>   
                <div class="control-group">
                  <div class="controls">
      <input type="email" class="form-control" placeholder="Email" 
                      id="email" required
               data-validation-required-message="Please enter your email" />
    </div>
      </div>  

               <div class="control-group">
                 <div class="controls">
         <textarea rows="10" cols="100" class="form-control" 
                       placeholder="Message" id="message" required
           data-validation-required-message="Please enter your message" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
    </div>
               </div>      
       <div id="success"> </div> <!-- For success/fail messages -->
      <button type="submit" class="btn btn-submit">Send</button><br />
          </form>
  </div>
<br/>
</section>

<div id="footerImg" class="hidden-xs"></div>
<div class="top-arrow" id="arrow">
<h2><a class="btn arrow-btn" href="#top">&#8657;</a></h2>
</div>

<section class="newsletter-footer">
  <div class="container">
    <h2>Be the first to receive special offers, invites, and news!</h2>
    <h4>Join our Inner Circle newsletter today!</h4><br/>
        <a href="https://www.123signup.com/mailinglist?Org=gacoaches​" class="btn btn-newsletter">COUNT ME IN</a><!--/Newsletter Opt-In Button\-->
  </div>
</section>

<footer class="footer-bottom" role="footer">
  <div class="container">
        <h5><a href="faq.html" target="_blank">FAQs</a>
        <a href="" data-toggle="modal" data-target="#PrivacyModal">PRIVACY POLICY</a>
        <a href="bylaws.html" target="_blank">BYLAWS</a></h5>

        <div class="social-footer">
          <ul>
            <li><a class="twitter-footer" href="https://twitter.com/ICFGeorgia" target="_blank">Twitter</a></li>
            <li><a class="linked-footer" ref=" https://www.linkedin.com/company/icf-georgia-charter-chapter" target="_blank">LinkedIn</a></li>
            <li><a class="facebook-footer" href="https://www.facebook.com/icfgeorgiachapter" target="_blank">FaceBook</a></li>
            <li><a class="email-footer" href="mailto:info@icfgeorgia.org">Email</a></li>
          </ul>
        </div>
        <h5>7742 Spalding Drive,&nbsp;#209&nbsp;Norcross, GA 30092</h5>

        <h5><a href="mailto:info@icfgeorgia.org">info@icfgeorgia.org</a> 770-381-9616</h5>
        <p>ICF-Georgia Charter Chapter is the official Georgia-based chapter of the International Coach Federation (ICF)</p>
  </div>
</footer>

<div id="Mobileevents" class=" hidden-lg hidden-md hidden-sm">
  <ul>
      <li><a href="#events" class="btn eventsnav-btn">Upcoming Events</a></li>
  </ul>
</div>


<script src="http://www.icfgeorgia.org/bower_components/jquery/dist/jquery.min.js"></script>
<script src="http://www.icfgeorgia.org/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
<script src="http://www.icfgeorgia.org/js/contact_me.min.js"></script>
<script src="http://www.icfgeorgia.org/js/jqBootstrapValidation.min.js"></script>
<script src="http://www.icfgeorgia.org/js/script.min.js"></script>



</body>
</html>