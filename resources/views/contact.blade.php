@extends('layouts.app')

@section('content')

                <div class="page-content">

                    <!-- Page-Title -->
                    <div class="page-title-box">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title mb-1">Form Validation</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Form Validation</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-right d-none d-md-block">
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-settings-outline mr-1"></i> Settings
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Personal Information</h4>
                                            {{-- <p class="card-title-desc">For custom Bootstrap form validation messages, you’ll need to add the <code>novalidate</code> boolean attribute to your <code>&lt;form&gt;</code>.</p> --}}

                                            <form class="needs-validation" novalidate>
                                                <div class="row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01">First name</label>
                                                        <input type="text" class="form-control" id="first_name" placeholder="First name"  required>
                                                        <div class="invalid-feedback">
                                                            First Name is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom02">Last name</label>
                                                        <input type="text" class="form-control" placeholder="Last name" required>
                                                        <div class="invalid-feedback">
                                                            Last Name is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom03">Date of Birth</label>
                                                        <input type="date" class="form-control" id="dob" placeholder="Date of Birth" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid date.
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                            <label for="validationCustom02">Email</label>
                                                            <input type="email" class="form-control" placeholder="Email"  required>
                                                            <div class="invalid-feedback">
                                                                Email is a required field!!
                                                            </div>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                            <label for="validationCustom02">Mobile</label>
                                                            <input type="text" class="form-control" placeholder="Mobile Number"  required>
                                                            <div class="invalid-feedback">
                                                                Mobile is a required field!!
                                                            </div>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                            <label for="validationCustom02">Application Number</label>
                                                            <input type="text" class="form-control" id="app_number" placeholder="Application Number"  value="112" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="invalidCheck" required>
                                                        <label class="custom-control-label" for="invalidCheck">Agree to terms and conditions</label>
                                                        <div class="invalid-feedback">
                                                            You must agree before submitting.
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary" type="submit">Submit form</button>


                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end container-fluid -->
                    </div>
                    <!-- end page-content-wrapper -->
                </div>
@endsection
                <!-- End Page-content -->
