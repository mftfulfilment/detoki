<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">

    <title>website</title>
</head>

<body>

    <section class="top_header">
        <h3>Fast Shipping. FREE Delivery. Pay on Delivery!</h3>
    </section>
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="logo_here">
                        <img src="img/logo.png" class="img-responsive">
                    </div>
                </div>

                <div class="col-6">
                    <div class="srch">
                        <ul>
                            <li><a href="javascript:void(0);"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="product_detail">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="roduct_image">
                        <div class="show2" href="img/pdct.png">
                            <img src="img/pdct.png" id="show-img">
                        </div>
                        <div class="small-img">
                            <div class="small-container">
                                <div id="small-img-roll">
                                    <img src="img/pdct-2.jpg" class="show-small-img" alt="">
                                    <img src="img/pdct-3.jpg" class="show-small-img" alt="">
                                    <img src="img/pdct.png" class="show-small-img" alt="">
                                    <img src="img/pdct-2.jpg" class="show-small-img" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="buy_pdct">
                            <ul>
                                <li><img src="img/pdct.png" class="img-responsive"></li>
                                <li>+</li>
                                <li><img src="img/pdct.png" class="img-responsive"></li>
                                <li>=</li>
                                <li>Get 3</li>
                                <li><img src="img/pdct.png" class="img-responsive"></li>
                                <li>at the same price of 5500 Ksh</li>
                            </ul>

                            <ul>
                                <li><img src="img/pdct.png" class="img-responsive"></li>
                                <li>+</li>
                                <li><img src="img/pdct.png" class="img-responsive"></li>
                                <li>+</li>
                                <li><img src="img/pdct.png" class="img-responsive"></li>
                                <li>+</li>
                                <li><img src="img/pdct.png" class="img-responsive"></li>
                                <li>=</li>
                                <li>Get 5</li>
                                <li><img src="img/pdct.png" class="img-responsive"></li>
                                <li>at the same price of 11,000 Ksh</li>
                            </ul>
                        </div>

                        <!--
                        <div class="blnk">
                            <ul>
                                <li><span class="blink_text">Buy 3 at the price of 2</span>
                                </li>
                                <li><span class="blink_text">Buy 5 at the price of 4</span>
                                </li>
                            </ul>
                        </div>
-->

                        <div class="enqry_frm">
                            <h3>Enquiry Form</h3>
                            
                             <?php if (isset($_GET['response']) && $_GET['response'] == "success") { ?>
                                <div class="alert alert-success" role="alert">
                                    Thanks for contact with us. We will contact you as soon as possible
                                </div>
                            <?php } elseif (isset($_GET['response']) && $_GET['response'] == "error") { ?>
                                <div class="alert alert-danger" role="alert">
                                    Opps server error. Please try after some time
                                </div>
                            <?php } ?>
                            
                            
                            <form action="submit.php" method="Post">
                            <input type="hidden" name="action" value="contact_us_now">

                                <div class="form-group">
                                    <input type="name" class="form-control" name="name" id="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="phone" id="phn" placeholder="Phone">
                                </div>

                                <div class="form-group" id="msges">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <button type="submit" class="btn btn-default" id="sbmt">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="product_cntnt">
                        <div class="product">
                            <h3>Detoki Detoxifying Foot Patches</h3>
                            <h6>KOMFY SHOP</h6>
                            <h5>KSh2,750.00</h5>
                            <p>Shipping calculated at checkout.</p>
                        </div>
                        <form action="/action_page.php">
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="number" min="0" class="form-control" id="nmbrl" placeholder="1">
                            </div>

                            <button type="button" class="btn btn-default"><a href="javascript:void(0);">Add to cart</a></button>
                            <button type="button" class="btn btn-primary"><a href="https://komfy-shop.com/56275075265/checkouts/0acd4252a9cf238d3accde6c70ff071a?locale=en&skip_shopify_pay=true" target="_blank">Buy it now</a></button>
                        </form>

                        <div class="delivery">
                            <img src="img/delivery.jpg" class="img-responsive">
                        </div>
                        <div class="product_description">
                            <h3>Product Description</h3>
                            <p>Detoki is a set of toxin-cleansing foot patches that wash out all poisons from your blood vessels, intestines, and liver, thus improving your health and enhancing your energy. All you have to do is stick the Detoki patches to your foot at night and remove them in the morning. What you will see is that the white pads are dark and oily with the products and bacteria from your body that they sucked out through the acupuncture points on your feet.</p>
                            <p>A bit unconventional detoxifying method, based on the theory of traditional Chinese medicine, has been recently invented. Detoxifying pads Detoki, applied on feet, can be used as a natural remedy for cleansing the body from harmful substances. The mixture of bamboo vinegar, detox herb extract, wood vinegar, and vitamin C, is designed to improve blood circulation, accelerate metabolism, and strengthen immunity.</p>
                            <p>Detoki pads are packed in a box and each box contains 10 pieces. A pad should be used at night for 6-12 hours, so one Detoki pack is enough for 5 to 10 days usage.</p>

                        </div>

                        <div class="effect">
                            <img src="img/effects.png" class="img-responsive">
                            <h3>How to use detoki patches?</h3>
                            <ul>
                                <li>1.take off the protective layer from the pad</li>
                                <li>2.place in the center of the pad a sachet with biologically active substances so there are inscriptions on the sticky sides.</li>
                                <li>3.stick the pad in the foot and press</li>
                                <li>4.allow the pad to work all night (6-12 hours), then peel it off and rub it over with a damp cloth</li>
                            </ul>
                        </div>

                        <div class="youtube">
                            <iframe width="100%" height="398" src="https://www.youtube.com/embed/CTupg6vUMc0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="ftr_head">
                        <h4>KOMFY SHOP</h4>
                        <ul>
                            <li><a href="javascript:void(0);">About</a></li>
                            <li><a href="javascript:void(0);">FAQs about Covid-19</a></li>
                            <li><a href="javascript:void(0);">Contacts</a></li>
                            <li><a href="javascript:void(0);">Terms of Service</a></li>
                            <li><a href="javascript:void(0);">Refund policy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="ftr_head">
                        <h4>TERMS</h4>
                        <ul>
                            <li><a href="javascript:void(0);">Privacy Policy</a></li>
                            <li><a href="javascript:void(0);">T&Cs</a></li>
                            <li><a href="javascript:void(0);">Return & Refund Policy</a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="ftr_head">
                        <h4>TALK TO US</h4>
                        <ul>
                            <li><a href="tel:+254716316903">WhatsApp:</a></li>
                            <li><a href="javascript:void(0);">Email: hello@komfy-shop.com</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="ftr_head">
                        <h4>STAY UPDATED</h4>
                        <form action="/action_page.php">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="email address">
                            </div>
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<!--
    <section class="left_sidebar">
        <div class="container demo">
            <div class="text-center">
                <button type="button" class="btn btn-demo" data-toggle="modal" data-target="#myModal2">
                    <h2>Enquiry Form</h2>
                </button>
            </div>
            <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel2">Enquiry Form</h4>
                        </div>
                        
                             <?php if (isset($_GET['response']) && $_GET['response'] == "success") { ?>
                                <div class="alert alert-success" role="alert">
                                    Thanks for contact with us. We will contact you as soon as possible
                                </div>
                            <?php } elseif (isset($_GET['response']) && $_GET['response'] == "error") { ?>
                                <div class="alert alert-danger" role="alert">
                                    Opps server error. Please try after some time
                                </div>
                            <?php } ?>
                            

                        <div class="modal-body">
                            <form action="submit.php" method="post">
                                <input type="hidden" name="action" value="contact_us_now">
                                <div class="form-group">
                                    <input type="name" class="form-control" name="name" id="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="phone" id="phn" placeholder="Phone">
                                </div>

                                <div class="form-group" id="msges">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-default" id="sbmt">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->


    <div class="icon-bar-footer">
        <a href="https://api.whatsapp.com/send?phone=+254716316903&amp;text=Hi" class=""><i class="fa fa-whatsapp whatsapp_footer"></i></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/zoom-image.js"></script>
    <script>
        $('.show2').zoomImage();

    </script>

    <script>
        $('.show-small-img:first-of-type').css({
            'border': 'solid 1px #951b25',
            'padding': '2px'
        })
        $('.show-small-img:first-of-type').attr('alt', 'now').siblings().removeAttr('alt')
        $('.show-small-img').click(function() {
            $('#show-img').attr('src', $(this).attr('src'))
            $('#big-img').attr('src', $(this).attr('src'))
            $(this).attr('alt', 'now').siblings().removeAttr('alt')
            $(this).css({
                'border': 'solid 1px #951b25',
                'padding': '2px'
            }).siblings().css({
                'border': 'none',
                'padding': '0'
            })
            if ($('#small-img-roll').children().length > 4) {
                if ($(this).index() >= 3 && $(this).index() < $('#small-img-roll').children().length - 1) {
                    $('#small-img-roll').css('left', -($(this).index() - 2) * 76 + 'px')
                } else if ($(this).index() == $('#small-img-roll').children().length - 1) {
                    $('#small-img-roll').css('left', -($('#small-img-roll').children().length - 4) * 76 + 'px')
                } else {
                    $('#small-img-roll').css('left', '0')
                }
            }
        })

    </script>
</body>

</html>
