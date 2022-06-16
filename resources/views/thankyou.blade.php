<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Thanks For Feedback</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-primary bg-pattern" style="background-color: #acb68c!important;">

        <div class="account-pages my-5 pt-sm-5">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="mt-4 text-center">
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-6">
                                    <img src="assets/images/thanks.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>

                            <h1 class="mt-5 text-uppercase text-white font-weight-bold mb-3">Thanks for being awesome!</h1>
                            <h3 class="text-white-50">Thank you for filling out your information!</h3>
                            <h5  class="text-white-50">You have sucessfully summitted your information. One of our employee will get back in touch with you soon.
                                We’ve sent you an email with {{ $number }} at the email address you provided.</h5>
                                <h5  class="text-white-50">
                                    Regards,
                                </h5>
                                <h5  class="text-white-50">
                                    Identity Verification Services(Team)
                                </h5>

                            <div class="mt-5">
                                <a class="btn btn-success waves-effect waves-light" href="/">Back to Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>


        <script src="assets/js/app.js"></script>

    </body>
</html>
