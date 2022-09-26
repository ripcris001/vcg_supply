<section class="contact-info-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class='bx bx-envelope'></i>
                    </div>
                    <h3>Email Here</h3>
                    <p><a href="#"><?php  echo INFO_EMAIL; ?></span></a></p>
                   
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class='bx bx-map'></i>
                    </div>
                    <h3>Location Here</h3>
                    <p><?php echo INFO_ADDRESS; ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class='bx bxs-phone-call'></i>
                    </div>
                    <h3>Call Here</h3>
                    <p><?php echo INFO_CONTACT_NUMBER; ?></p>
                    <p><?php echo INFO_PHONE_NUMBER; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-area pb-100">
    <div class="container">
        <div class="section-title">
            <h2>Ready To Get Started?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="contact-form">
            <form id="contactForm">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn">
                            Send Message
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<div id="map">
    <iframe src="https://maps.google.com/maps?q=vcg%20tire%20supply&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
</div>