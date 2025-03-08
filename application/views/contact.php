<!DOCTYPE html>
<html lang="zxx">

<head>

    <?php
   $this->load->view('components/header_links');
   ?>

</head>

<body>

    <!-- wrapper -->
    <div class="mil-wrapper" id="top">

        <!-- cursor -->
        <div class="mil-ball">
            <span class="mil-icon-1">
                <svg viewBox="0 0 128 128">
                    <path
                        d="M106.1,41.9c-1.2-1.2-3.1-1.2-4.2,0c-1.2,1.2-1.2,3.1,0,4.2L116.8,61H11.2l14.9-14.9c1.2-1.2,1.2-3.1,0-4.2	c-1.2-1.2-3.1-1.2-4.2,0l-20,20c-1.2,1.2-1.2,3.1,0,4.2l20,20c0.6,0.6,1.4,0.9,2.1,0.9s1.5-0.3,2.1-0.9c1.2-1.2,1.2-3.1,0-4.2	L11.2,67h105.5l-14.9,14.9c-1.2,1.2-1.2,3.1,0,4.2c0.6,0.6,1.4,0.9,2.1,0.9s1.5-0.3,2.1-0.9l20-20c1.2-1.2,1.2-3.1,0-4.2L106.1,41.9	z" />
                </svg>
            </span>
            <div class="mil-more-text">More</div>
            <div class="mil-choose-text">Сhoose</div>
        </div>
        <!-- cursor end -->

        <!-- preloader -->
        <?php
        $this->load->view("components/preloader");
        ?>
        <!-- preloader end -->

        <!-- scrollbar progress -->
        <div class="mil-progress-track">
            <div class="mil-progress"></div>
        </div>
        <!-- scrollbar progress end -->

        <!-- menu start-->
        <?php
        $this->load->view("components/header");
        ?>
        <!-- menu end-->

        <!-- curtain -->
        <div class="mil-curtain"></div>
        <!-- curtain end -->


        <!-- frame -->
        <?php
        $this->load->view("components/logo-frame");
        ?>
        <!-- frame end-->

        <!-- content -->
        <div class="mil-content">
            <div id="swupMain" class="mil-main-transition">

                <!-- banner -->
                <div class="mil-inner-banner mil-p-0-120">
                    <div class="mil-banner-content mil-center mil-up">
                        <div class="container">
                            <ul class="mil-breadcrumbs mil-center mil-mb-60">
                                <li><a href="<?=base_url()?>">Homepage</a></li>
                                <li><a>Contact</a></li>
                            </ul>
                            <h1 class="mil-mb-60">Get in touch!</h1>
                            <a href="#contact" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                                <span>Send message</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- banner end -->

                <!-- map -->
                <div class="mil-map-frame mil-up">
                    <div class="mil-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d393.284882306618!2d73.09209704073716!3d30.68911439442787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sSalma%20Khatoon%20Hospital%2C%20western%20road%2086%2F6-R%20Sahiwal!5e0!3m2!1sen!2s!4v1741430309187!5m2!1sen!2s"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- map end -->

                <!-- contact form -->
                <section id="contact">
                    <div class="container mil-p-120-90">
                        <h3 class="mil-center mil-up mil-mb-120">Let's <span class="mil-thin">Talk</span></h3>
                        <form class="row align-items-center">
                            <div class="col-lg-6 mil-up">
                                <input type="text" placeholder="What's your name *" name="userName" id="userName"
                                    required>
                            </div>
                            <div class="col-lg-6 mil-up">
                                <input type="email" placeholder="What's your Email *" name="userEmail" id="userEmail"
                                    required>
                            </div>
                            <div class="col-lg-12 mil-up">
                                <textarea placeholder="Tell us about our project *" name="userMsg"
                                    id="userMsg"></textarea>
                            </div>
                            <div class="col-lg-8">
                                <p class="mil-up mil-mb-30"><span class="mil-accent">*</span> We promise not to disclose
                                    your personal information to third parties.</p>
                            </div>
                            <div class="col-lg-4">
                                <div class="mil-adaptive-right mil-up mil-mb-30">
                                    <button type="submit" class="mil-button mil-arrow-place">
                                        <span>Send message</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                <!-- contact form end -->

                <!-- Footer start -->
                <?php
                 $this->load->view('components/footer');
                 ?>
                <!-- Footer end -->

            </div>
        </div>
        <!-- content -->
    </div>
    <!-- wrapper end -->

    <?php
        $this->load->view('components/footer_links');
    ?>

</body>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    form.querySelectorAll('[required]').forEach(field => {
        field.addEventListener('blur', () => validateField(field));
        field.addEventListener('input', () => validateField(field, true));
    });

    form.addEventListener('submit', function(e) {
        let isValid = true;
        form.querySelectorAll('[required]').forEach(field => {
            if (!validateField(field)) isValid = false;
        });

        if (!isValid) e.preventDefault();
    });

    function validateField(field, isTyping = false) {
        if (field.value.trim() === '') {
            field.style.borderColor = 'red';
            return false;
        } else {
            field.style.borderColor = isTyping ? 'green' : '';
            return true;
        }
    }
});
</script>

</html>