<?php

    include('include/header.php');
?>

<div class="container-fluid page-wrapper nopadding" data-barba="container">
    <main class="page-wrapper__content">
        <div class="container_xs-no-padding">
            <!-- section MASTHEAD -->
            <section class="section section-masthead section_pt-large text-center"
                data-os-animation="data-os-animation">
                <div class="section-masthead__inner container">
                    <header class="row section-masthead__header justify-content-center">
                        <div class="col">
                            <h1 class="js-text-to-fly split-text js-split-text section-masthead__heading"
                                data-split-text-type="lines, words, chars" data-split-text-set="chars">Contacts</h1>
                            <div class="section__headline"></div>
                        </div>
                    </header>
                </div>
                <div class="section-masthead__background section-masthead__background_fullscreen"
                    data-art-parallax="background" data-art-parallax-factor="0.1">
                    <div class="art-parallax__bg lazy-bg" data-src="img/assets/sectionIntro/coastalheader.jpg">
                    </div>
                    <div class="overlay overlay_dark section-masthead__overlay"></div>
                </div>
            </section>
            <!-- - section MASTHEAD -->
            <!-- section MAP -->
            <section class="section section-map bg-white  section_h-500">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3017.816411060365!2d29.28877991504711!3d40.85395437931665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cadc686936c86f%3A0xb3bd0b96c68d6adc!2sDenizciler%20Ticaret%20Merkez!5e0!3m2!1sen!2sng!4v1594808075464!5m2!1sen!2sng" width="100%" style="height: 100%;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </section>
            <!-- - section MAP -->
            <!-- section FORM -->
            <div class="bg-white">
                <section class="section section-form text-center section_pb-small section-offset_top">
                    <div class="container border-radius section-offset__content ">
                        <div class="row justify-content-center">
                            <div class="col-sm-10">
                                <form class="form form-contact js-ajax-form" action="mail.php" method="POST"
                                    data-message-success="Thanks for your message! We will reply you as soon as possible."
                                    data-message-error="Something went wrong :( Please contact me directly on cassio@example.com">
                                    <h3 class="form__heading">Get in Touch with Us!</h3>
                                    <div class="row form__row">
                                        <div class="col-lg-6 form__col">
                                            <label class="input-float js-input-float">
                                                <input class="input-float__input" type="text" name="visitor_name"
                                                    required="required" data-msg="Please enter your name" /><span
                                                    class="input-float__label">Your Name</span><span
                                                    class="form__error"></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-6 form__col">
                                            <label class="input-float js-input-float">
                                                <input class="input-float__input" type="email" name="visitor_email"
                                                    required="required" data-msg="Please enter a correct e-mail" /><span
                                                    class="input-float__label">Your E-mail</span><span
                                                    class="form__error"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row form__row">
                                        <div class="col form__col">
                                            <label class="input-float js-input-float">
                                                <textarea class="input-float__input input-float__input_textarea"
                                                    name="visitor_msg"></textarea><span class="input-float__label">Your
                                                    Message</span><span class="form__error"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row form__row">
                                        <div class="col form__col form__col_submit">
                                            <button
                                                class="button button_solid button_accent-secondary-2 button_fullwidth"
                                                type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- - section FORM -->

             <!-- section CALL TO ACTION -->
        <section
            class="section section-content section-cta section-image section_pt section_pb section_z-100 bg-dark-2 color-white text-center">
            <div class="section-cta__line"></div>
            <div class="section__content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <header class="section-cta__header">
                                <h2 class="section-cta__heading">Mailing List</h2>
                                <p>Subscribe your email to our Mailing List</p>
                            </header>
                            <form action="">
                                <div class="row form__row">
                                    <div class="col-lg-12 form__col">
                                        <label class="input-float js-input-float">
                                            <input class="input-float__input" type="email" name="visitor_email"
                                                required="required" data-msg="Please enter a correct e-mail" /><span
                                                class="input-float__label">Your E-mail</span><span
                                                class="form__error"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row form__row">
                                    <div class="col form__col form__col_submit">
                                        <button class="button button_solid button_accent-secondary-2 button_fullwidth"
                                            type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-image__wrapper section-image__wrapper_absolute" data-art-parallax="background"
                data-art-parallax-factor="0.1">
                <div class="art-parallax__bg lazy-bg" data-src="img/assets/sectionCTA/mailinglist.jpg"></div>
                <div class="section-image__overlay overlay overlay_dark"></div>
            </div>
        </section>
        <!-- - section CALL TO ACTION -->
        </div>
    </main>
<?php

    include('include/footer.php');
?>