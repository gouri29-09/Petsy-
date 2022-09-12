<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Appointment Form</title>
    
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
        <!-- custom css file link  -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="index.html">
        
        <link rel="stylesheet" href="bootstrap.min.css">
        
            <link rel="stylesheet" href="appointment.css">
        
    
    </head>
    <body>
        
    <!-- header section starts  -->
    
    <header class="header">
    
        <a href="index.html" class="logo"> <i class="fas fa-paw"></i> Petsy <br><small>we love them like you do</small> </a>
    
        <nav class="navbar">
            <a href="index.html">home</a>
            <a href="about.html">about</a>
            <a href="index.html">shop</a>
            <a href="services.html">services</a>
            <a href="index.html">plan</a>
            <a href="form.html">contact</a>
        </nav>
    
        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <a href="#" class="fas fa-shopping-cart"></a>
            <div class="fas fa-user" id="login-btn"></div>
        </div>
    
        <form action="app.php" class="login-form">
            <h3>sign in</h3>
            <input type="email" name="" placeholder="enter your email" id="" class="box">
            <input type="password" name="" placeholder="enter your password" id="" class="box">
            <div class="remember">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">remember me</label>
            </div>
            <input type="submit" value="sign in" class="btn">
            <div class="links">
                <a href="#">forget password</a>
                <a href="login.html">sign up</a>
            </div>
        </form>
    
    </header>
    
    <!-- header section ends -->

    <img src="./image/app.jpg" style=width:100vw; padding-top: 0px;>
    

    <h1> Appointment Form</h1>

<div class="landing-page">
    <div class="form-appointment">
        <div class="wpcf7" id="wpcf7-f560-p590-o1">
            <form action="code.php" method="post" class="wpcf7-form" novalidate="novalidate" _lpchecked="1">
                <div style="display: none;">
                    <input type="hidden" name="_wpcf7" value="560">
                    <input type="hidden" name="_wpcf7_version" value="3.5">
                    <input type="hidden" name="_wpcf7_locale" value="">
                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f560-p590-o1">
                    <input type="hidden" name="_wpnonce" value="dbb28877d5">
                </div>

                <div class="group">
                    <div style="width: 48%; float: left;">
                        <span class="wpcf7-form-control-wrap text-680"><input type="text" name="name" value="" size="45" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" placeholder="Name"></span><br>
                        <span class="wpcf7-form-control-wrap email-680"><input type="email" name="email" value="" size="45" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" placeholder="Email"></span><br>
                        <span class="wpcf7-form-control-wrap tel-630"><input type="tel" name="number" value="" size="45" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" placeholder="Phone"></span><br>
                        <span class="wpcf7-form-control-wrap textarea-398"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Special notes, concerns, or requirements"></textarea></span></div>
                        <div style="width: 48%; float: right;">
                        <h4>What is the best way to reach you?</h4>
                        <p>
                            <span class="wpcf7-form-control-wrap radio-98">
                                <span class="wpcf7-form-control wpcf7-radio">
                                    <span class="wpcf7-list-item">
                                      <label>
                                         <input type="radio" name="mode_cnt" value="Phone">&nbsp;
                                         <span class="wpcf7-list-item-label">Phone</span>
                                      </label>
                                    </span>
                                    <span class="wpcf7-list-item">
                                        <label>
                                            <input type="radio" name="mode_cnt" value="Email">&nbsp;
                                            <span class="wpcf7-list-item-label">Email</span>
                                        </label>
                                    </span>
                                </span>
                            </span>
                        </p>

                        <h4>Days of the week you are available for appointment:</h4>

                        <p>
                            <span class="wpcf7-form-control-wrap checkbox-465">
                                <span class="wpcf7-form-control wpcf7-checkbox">
                                    <span class="wpcf7-list-item">
                                        <label>
                                            <input type="checkbox" name="day[]" value="Monday">&nbsp;
                                            <span class="wpcf7-list-item-label">Monday</span>
                                        </label>
                                    </span>
                                    <span class="wpcf7-list-item">
                                        <label>
                                            <input type="checkbox" name="day[]" value="Tuesday">&nbsp;
                                            <span class="wpcf7-list-item-label">Tuesday</span>
                                        </label>
                                    </span>
                                    <span class="wpcf7-list-item">
                                        <label>
                                            <input type="checkbox" name="day[]" value="Wednesday">&nbsp;
                                            <span class="wpcf7-list-item-label">Wednesday</span>
                                        </label>
                                    </span>
                                    <span class="wpcf7-list-item">
                                        <label>
                                            <input type="checkbox" name="day[]" value="Thursday">&nbsp;
                                            <span class="wpcf7-list-item-label">Thursday</span>
                                        </label>
                                    </span>
                                    <span class="wpcf7-list-item">
                                        <label>
                                            <input type="checkbox" name="day[]" value="Friday">&nbsp;
                                            <span class="wpcf7-list-item-label">Friday</span>
                                        </label>
                                    </span>
                                </span>
                            </span>
                        </p>
                        <h4>Best time of day for your appointment:</h4>

                        <p>
                            <span class="wpcf7-form-control-wrap checkbox-246">
                                <span class="wpcf7-form-control wpcf7-checkbox">
                                    <span class="wpcf7-list-item">
                                        <label>
                                            <input type="checkbox" name="time[]" value="Morning">&nbsp;
                                            <span class="wpcf7-list-item-label">Morning</span>
                                        </label>
                                    </span>
                                    <span class="wpcf7-list-item">
                                        <label>
                                            <input type="checkbox" name="time[]" value="Afternoon">&nbsp;
                                            <span class="wpcf7-list-item-label">Afternoon</span>
                                        </label>
                                    </span>
                                </span>
                            </span>
                        </p>
                    </div>
                </div>

                <div style="text-align: center; padding-top: 2em; border-top: 1px solid rgb(153, 202, 129); margin-top: 1em;">
                    <input type="submit" name="request" value="Request My Appointment" class="wpcf7-form-control wpcf7-submit">
                    <img class="ajax-loader" src="http://www.professionalaudiologicalservices.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;"></div>
                <div class="wpcf7-response-output wpcf7-display-none">
            </div>
            </form>
        </div>
    </div>
</div>

    <script src="appointment.js"></script>
    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>

</body>
</html>