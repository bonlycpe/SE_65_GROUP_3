<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contract</title>
    <link rel="shortcut icon" href="img/nt.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="css/templatemo-pod-talk.css" rel="stylesheet">
</head>

<body>

    <main>
    <?php echo $__env->make('topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <section class="section-padding" id="section_2">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-5 col-12 pe-lg-5">
                        <div class="contact-info">
                            <h3 class="mb-4">สำนักงาน...</h3>
                            <p>
                                <span>ที่อยู่ : 2XCR+P3 ตำบล กำแพงแสน อำเภอกำแพงแสน นครปฐม</span><br><br>
                                <span>โทรศัพท์ : 088-888-8888</span><br>
                                <span>อีเมล : Campaing@gmail.com</span><br><br>
                                <ul class="social-icon">
                                    <li class="social-icon-item">
                                       <a href="https://www.facebook.com/ruamkatanyufoundation" class="social-icon-link2 bi bi-facebook"> </a>                                     
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link2 bi-twitter"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link2 bi-whatsapp"></a>
                                    </li>
                                </ul>   

                            </p>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mt-5 mt-lg-0">
                        <iframe class="google-map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15483.92438921836!2d99.9996196026245!3d14.019134814007684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2ff768ac7422d%3A0xf6de78b818e98ec1!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiB4Lip4LiV4Lij4Lio4Liy4Liq4LiV4Lij4LmMIOC4p-C4tOC4l-C4ouC4suC5gOC4guC4leC4geC4s-C5geC4nuC4h-C5geC4quC4mQ!5e0!3m2!1sth!2sth!4v1678496789561!5m2!1sth!2sth"
                            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
            </div>
        </section>

        <section class="contact-section section-padding pt-0">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">ติดต่อสอบถาม</h4>
                        </div>

                        <form action="#" method="post" class="custom-form contact-form" role="form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="full-name" id="full-name" class="form-control"
                                            placeholder="Full Name" required="">

                                        <label for="floatingInput">Full Name</label>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            class="form-control" placeholder="Email address" required="">

                                        <label for="floatingInput">Email address</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="address" id="name" class="form-control"
                                            placeholder="Name" required="">

                                        <label for="floatingInput">Address</label>
                                    </div>

                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message"
                                            placeholder="Describe message here"></textarea>

                                        <label for="floatingTextarea">Message</label>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-12 ms-auto">
                                    <button type="submit" class="form-control">Send</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html><?php /**PATH C:\Users\user\Desktop\campaing\resources\views/contract.blade.php ENDPATH**/ ?>