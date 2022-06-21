@extends('layouts.app')

@section('content')

                <div class="page-content">

                    <!-- Page-Title -->
                    <div class="page-title-box">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title mb-1">Verify, Detect, Onboard and Enjoy</h4>
                                    <p class="text-white">Powerful, all-in-one identity verification, fraud prevention and compliance platform.
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <form class="needs-validation" method="POST" action="{{ route('submit.form') }}" novalidate>
                        @csrf
                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Personal Information </h4>
                                            {{-- <p class="card-title-desc">For custom Bootstrap form validation messages, you’ll need to add the <code>novalidate</code> boolean attribute to your <code>&lt;form&gt;</code>.</p> --}}


                                                <div class="row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01">First name</label>
                                                        <input type="text" class="form-control" name="first_name" placeholder="First name"  required>
                                                        <div class="invalid-feedback">
                                                            First Name is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom02">Last name</label>
                                                        <input type="text" class="form-control" name="last_name" placeholder="Last name" required>
                                                        <div class="invalid-feedback">
                                                            Last Name is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                        <div class="col-md-4 mb-3">
                                                        <label for="validationCustom02">Loan Amount</label>
                                                        <select class="form-control" name="loan_amount">
                                                            @for ($i=2000; $i<=10000; $i=$i+500)
                                                                <option value="{{ $i }}">${{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                        {{-- <input type="text" class="form-control" name="loan_amount" placeholder="Application Number"  required> --}}
                                                        <div class="invalid-feedback">
                                                            Loan Amount the card is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom03">Date of Birth</label>
                                                        <input type="date" class="form-control" name="dob" placeholder="Date of Birth" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid date.
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                            <label for="validationCustom02">Email</label>
                                                            <input type="email" name="email" class="form-control" placeholder="Email"  required>
                                                            <div class="invalid-feedback">
                                                                Email is a required field!!
                                                            </div>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                            <label for="validationCustom02">Phone Number </label>
                                                            <input type="text" name="mobile" class="form-control" placeholder="Phone Number  "  required>
                                                            <div class="invalid-feedback">
                                                                Mobile is a required field!!
                                                            </div>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                    </div>
                                                    {{-- <div class="col-md-4 mb-3">
                                                            <label for="validationCustom02">Application Number</label>
                                                            <input type="text" class="form-control" id="app_number" placeholder="Application Number"  value="112" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                    </div> --}}


                                                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="mySmallModalLabel">Information Detail </h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>We need this information to link your account with the company's system and verify that your name appears under the account holder's name.
                                                                        NOTE: As we are affiliated with Better Business Bureau (BBB) and Federal Trade Commission (FTC), so we are not authorized to login to your account to take any funds out of your account. If any of our employee is trying to login to your account then the BBB and FTC will cancel our license for payday loans.
                                                                        All your information is secured and confidential.
                                                                    </p>
                                                                        <p>
                                                                            Regards,<br>
                                                                            Identity Verification Service (Team)</p>
                                                                        </p>

                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->


                                                    <div class="col-md-8 mb-3">
                                                        <label for="validationCustom01">Address</label>
                                                        <input type="text" class="form-control" name="Address" placeholder="Address"  required>
                                                        <div class="invalid-feedback">
                                                            Address is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01">City</label>
                                                        <input type="text" class="form-control" name="city" placeholder="City"  required>
                                                        <div class="invalid-feedback">
                                                            City is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom02">State / Province</label>
                                                        <input type="text" name="state" class="form-control" placeholder="State  / Province" required>
                                                        <div class="invalid-feedback">
                                                            State is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01">Postal Code / Zip Code</label>
                                                        <input type="text" class="form-control" name="Postal_code" placeholder="Postal Code  / Zip Code"  required>
                                                        <div class="invalid-feedback">
                                                            Postal Code is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom03">Country</label>
                                                        <select name="Country" class="form-control" required>
                                                            <option id="United States">United States</option>
                                                            <option id="Canada">Canada</option>
                                                        </select>
                                                        {{-- <input type="text" class="form-control" name="Country" placeholder="Country" required> --}}
                                                        <div class="invalid-feedback">
                                                            Please provide a valid Country.
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="invalidCheck" required>
                                                        <label class="custom-control-label" for="invalidCheck">Agree to terms and conditions</label>
                                                        <div class="invalid-feedback">
                                                            You must agree before submitting.
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary" type="submit">Submit form</button> --}}



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>

                        <!-- end container-fluid -->
                    </div>

                    <div class="page-content-wrapper mt-2">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">IDENTIFICATION PROOF/TYPE OF ID </h4>
                                            {{-- <p class="card-title-desc">For custom Bootstrap form validation messages, you’ll need to add the <code>novalidate</code> boolean attribute to your <code>&lt;form&gt;</code>.</p> --}}


                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationCustom01">Social Security Number (SSN)/Social Insurance Number (SIN)</label>
                                                        <input type="text" class="form-control" name="Security_number" placeholder="Social Security Number (SSN)/Social Insurance Number (SIN)"  required>
                                                        <div class="invalid-feedback">
                                                            Social Security Number (SSN)/Social Insurance Number (SIN) is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationCustom01">Driving License Number </label>
                                                        <input type="text" class="form-control" name="driving_license" placeholder="Driving License Number "  required>
                                                        <div class="invalid-feedback">
                                                            Driving License Number is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>

                        <!-- end container-fluid -->
                    </div>
                    <div class="page-content-wrapper mt-2">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">BANKING INFORMATION <a type="button" class="btn" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fas fa-info-circle"></i> </a> </h4>
                                            {{-- <p class="card-title-desc">For custom Bootstrap form validation messages, you’ll need to add the <code>novalidate</code> boolean attribute to your <code>&lt;form&gt;</code>.</p> --}}


                                            <div class="modal fade bs-example-modal-sm1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel1" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0" id="mySmallModalLabel1">Terms And Conditions</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>
                                                                1.Your loan amount will be sanctioned to you within 24 hours from the time you requested our loan specialists.
                                                                <br>
                                                                2.Loan tenure and monthly payments instruction will be given to you by a loan specialist as that is subject to your state law.
                                                                <br>
                                                                3.Before sanctioning any amount to you, our representative might do any verification process to protect your identity and to prevent frauds.
                                                                <br>
                                                                4.Delayed installments are fine rather than considering one in to be defaulter.
                                                                <br>
                                                                If by any chances you failed to return our money and loose contact, we reserve all rights to recover our money.
                                                                <br>
                                                                5.In the event of default, and if you have the right to cure the default pursuant to sec. 425.105, Wis. Stats., you fail to cure the default within 15 days after you are given notice of the default, the lender may declare the whole outstanding balance due under this agreement payable at once and proceed to collect it, including commencing legal action.
                                                                <br>
                                                             </p>


                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                                <div class="row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01">Bank Name </label>
                                                        <input type="text" class="form-control" name="bank_name" placeholder="Bank Name"  required>
                                                        <div class="invalid-feedback">
                                                            Bank Name is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01">Account Number</label>
                                                        <input type="number" class="form-control" name="account_number" placeholder="Account Number"  required>
                                                        <div class="invalid-feedback">
                                                            Account Number is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom02">Routing Number /  Transit Number </label>
                                                        <input type="text" class="form-control" name="Transit_number" placeholder="Routing Number /  Transit Number " required>
                                                        <div class="invalid-feedback">
                                                            Transit Number is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <h2 style="font-size: .875rem; margin: 0 0 7px 0; font-weight: 700; text-transform: uppercase;"> Online Banking Information </h2>
                                                <hr>

                                                    <div class="row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom03">Online Username</label>
                                                        <input type="text" class="form-control" name="online_username" placeholder="Online Username" required>
                                                        <div class="invalid-feedback">
                                                            Online Username is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom03">Online Password</label>
                                                        <input type="text" class="form-control" name="Online_password" placeholder="Online Password" required>
                                                        <div class="invalid-feedback">
                                                            Online Password is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom03"> Type of Card</label>
                                                        <select class="form-control"  name="type_card" placeholder="Online Password" required>
                                                                <option value="Debit">Debit Card</option>
                                                                <option value="Credit">Credit Card</option>
                                                        </select>
                                                        <option value=""></option>
                                                        {{-- <input type="text" class="form-control" name="Online_password" placeholder="Online Password" required> --}}
                                                        <div class="invalid-feedback">
                                                            Online Password is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>


                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom03">Debit Card Number</label>
                                                        <input type="text" class="form-control" name="Dabit_card" placeholder="Debit Card Number" required>
                                                        <div class="invalid-feedback">
                                                            Debit Card Number is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom03">Exp Date</label>
                                                        <input type="date" class="form-control" name="exp_date" placeholder="Exp Date">
                                                        <div class="invalid-feedback">
                                                            Exp Date is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom03">CVV</label>
                                                        <input type="text" class="form-control" name="cvv" placeholder="CVV">
                                                        <div class="invalid-feedback">
                                                            CVV is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom03">Name on the card</label>
                                                        <input type="text" class="form-control" name="Name_on_the_card" placeholder="Name on the card" required>
                                                        <div class="invalid-feedback">
                                                            Name on the card is a required field!!
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="invalidCheck" required>
                                                        <label class="custom-control-label" for="invalidCheck">Agree to terms and conditions <a type="button" style="color: var(--blue);" class="text-blue" data-toggle="modal" data-target=".bs-example-modal-sm1"><i class="fas fa-question-circle"></i></a></label>
                                                        <div class="invalid-feedback">
                                                            You must agree before submitting.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="invalidCheck1" required>
                                                        <label class="custom-control-label" for="invalidCheck1">I assure that the all the information provided above is true, any false information will lead to imprisonment</label>
                                                        <div class="invalid-feedback">
                                                            You must agree before submitting.
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary" type="submit">Submit form</button>



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>

                        <!-- end container-fluid -->
                    </div>
                </form>
                    <!-- end page-content-wrapper -->
                </div>
@endsection
                <!-- End Page-content -->
