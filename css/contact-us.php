<?php include("external_pages/header.php"); ?>


<section class="donate_section donate_section2">
    <div class="contact3 py-5">
        <div class="row no-gutters">
            <div class="container white_box">
                <div class="row">


                    <div class="col-lg-12">
                        <div class="card mt-4 border-0 mb-4">
                            <div class="row">

                                <div class="col-lg-4 col-md-4">
                                    <div class="card-body d-flex align-items-center c-detail pl-0 card-body-custom">
                                        <div class="mr-3 align-self-center">
                                            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon1.png">
                                        </div>
                                        <div class="">
                                            <h6 class="font-weight-medium black_color">Address</h6>
                                            <p class="black_color">WZ-49/2A F/F, Budella Village, Near Community Hall, Vikas Puri, New Delhi - 110018</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="card-body d-flex align-items-center c-detail pl-0 card-body-custom">
                                        <div class="mr-3 align-self-center">
                                            <img src="img/whatsapp.png">
                                        </div>
                                        <div class="">
                                            <h6 class="font-weight-medium black_color"> whatsApp Only</h6>
                                            <p class="black_color">+91 7701927625,<br>+91 9654793872</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="card-body d-flex align-items-center c-detail pl-0 card-body-custom">
                                        <div class="mr-3 align-self-center">
                                            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon3.png">
                                        </div>
                                        <div class="">
                                            <h6 class="font-weight-medium black_color">Email</h6>
                                            <p class="black_color">myangelsacademy@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-box ml-3">
                            <h1 class="font-weight-light mt-2">Quick Contact</h1>
                            <?php if (isset($_GET['response']) && $_GET['response'] == "success") { ?>
                                <div class="alert alert-success" role="alert">
                                    Thanks for contact with us. We will contact you as soon as possible
                                </div>
                            <?php } elseif (isset($_GET['response']) && $_GET['response'] == "error") { ?>
                                <div class="alert alert-danger" role="alert">
                                    Opps server error. Please try after some time
                                </div>
                            <?php } elseif (isset($_GET['response']) && $_GET['response'] == "validation") { ?>
                                <div class="alert alert-danger" role="alert">
                                    Please validate Captcha.
                                </div>
                            <?php } ?>

                            <form class="mt-4" id="captcha_form" action="process_data.php" method="Post">

                                <input type="hidden" name="action" value="contact_us_now">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input class="form-control" name="name" required type="text" placeholder="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input class="form-control" name="email" required type="email" placeholder="email address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input class="form-control" name="phone" require type="text" placeholder="phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <textarea class="form-control" name="message" rows="3" placeholder="message"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="g-recaptcha" data-sitekey="6Lf39UAaAAAAABsLD3lVvlYBGDaq7xt5BivM1E1i"></div>
                                            <span id="captcha_error" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-success mt-3 text-white border-0 px-3 py-2"  name="submit" id="register" value="send"><span> SUBMIT</span></button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="card-shadow">

                            <iframe src="https://www.google.com/maps/d/embed?mid=1gv192P0mIF_B0WE98D_n_Y1po0rH7lBo&hl=en" width="100%" height="450" class="map_shadow"></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<script>
    $(document).ready(function () {

        $('#captcha_form').on('submit', function (event) {
            $("#captcha_error").html("");

            if (grecaptcha.getResponse() == "") {
                event.preventDefault();
                $("#captcha_error").html("Captcha is required!");
                // return false;
            } else {
                $('form').submit();
            }
        });

    });
</script>

<?php include("external_pages/footer.php"); ?>