@extends('layouts.app')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="img/carousel-1.png" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Global Online Identity Verification Services</h5>
                            <h1 class="text-white mb-md-4">IDENTITY VERIFICATION SERVICES Global Gateway is the world's leading Identity verification marketplace. </h1>
                            <a href="/contact" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Verify Now</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="img-fluid" src="img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Businesses Worldwide</h5>
                            <h1 class="text-white mb-md-4" style="FONT-SIZE: 25PX;">Our firm is affiliated with several platforms including loan companies, businesses and education sector. We include the verification for employees and students with the Bio-metric scanners and Id verification software's. Applicants of loan companies will have to fill the verification form manually. For more information you can contact us. </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->

    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5 mb-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x fa-laptop-code text-primary mr-4"></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">Credit Check</h4>
                                    <p>Credit reports list your bill payment history, loans, current debt, and other financial information. They show where you work and live and whether you've been sued, arrested, or filed for bankruptcy.</p>
                                    {{-- <a class="font-weight-semi-bold" href="">Read More <i class="fa fa-angle-double-right"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x fa-user text-primary mr-4"></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">Student Background Check</h4>
                                    <p>Student background checks are designed specifically to meet screening requirements for healthcare students in the clinical environment. Our student screening platform brings together students, schools, and clinical sites to manage background screening, drug testing, and immunization tracking requirements for students in clinical rotation programs.</p>
                                    {{-- <a class="font-weight-semi-bold" href="">Read More <i class="fa fa-angle-double-right"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x fa-envelope-open-text text-primary mr-4"></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">Marketing</h4>
                                    <p>A background investigation generally involves determining whether an applicant may be unqualified for a position due to a record of criminal conviction, motor vehicle violations, poor credit history, or misrepresentation regarding education or work history. A reference check generally involves contacting applicants' former employers, supervisors, co-workers and educators to verify previous employment and to obtain information about the individual's knowledge, skills, abilities and character.</p>
                                    {{-- <a class="font-weight-semi-bold" href="">Read More <i class="fa fa-angle-double-right"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->



@endsection

