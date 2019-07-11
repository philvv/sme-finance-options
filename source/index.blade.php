@extends('_layouts.master')

@section('body')
    <section id="quote-section">
        <div class="container" id="quote-header">
            <div class="jumbotron bg-light">
                <div class="row">
                    <div class="col-12 col-lg-5 text-column">
                        <h1>Get the right funding for your business</h1>
                        <p class="lead">Everyday we help lots of businesses just like yours get the funding they need.
                            From start-ups to well established companies, we can help your business grow.</p>
                        <a class="btn btn-success btn-lg mobile-block" href="{{ $page->quoteUrl }}" role="button">Get
                            Your Free
                            Quote</a>
                    </div>
                    <div class="col-0 col-lg-7 img-column">
                        <div class="business-img"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col section-header">
                    <h3>A transparent service that leaves you in control</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card usp-card">
                        <div class="card-body">
                            <i class="fa fa-tag fa-5x pb-3 text-primary" aria-hidden="true"></i>
                            <h5 class="key-headers">100% FREE TO USE</h5>
                            <p>We don’t charge a penny for using our online service.</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card usp-card">
                        <div class="card-body">
                            <i class="fa fa-list-ol fa-5x pb-3 text-primary" aria-hidden="true"></i>
                            <h5 class="key-headers">MULTIPLE FUNDERS</h5>
                            <p>Get matched to funders that can help your business.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card usp-card">
                        <div class="card-body">
                            <i class="fa fa-clock-o fa-5x pb-3 text-primary" aria-hidden="true"></i>
                            <h5 class="key-headers">NO PRESSURE</h5>
                            <p>Decide in your own time. There is absolutely no pressure.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card usp-card">
                        <div class="card-body">
                            <i class="fa fa-handshake-o fa-5x pb-3 text-primary" aria-hidden="true"></i>
                            <h5 class="key-headers">TRUSTED PROVIDERS</h5>
                            <p>We partner with trusted UK business providers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="connect-section">
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center">
                <div class="col-12">
                    <h3 class="section-header">We help connect your business to the right providers</h3>
                </div>
                <div class="col-12 col-lg-5">
                    <img class="img mb-5" width="100%" height="auto"
                         src="https://www.capalona.co.uk/include/images/step-1.png">
                </div>
                <div class="col-12 col-lg-7">
                    <ul class="steps">
                        <li><h5 class="key-headers">Apply for business funding in minutes</h5>
                            <p>To start your search for business funding, simply complete the online questionnaire about
                                you, your business and your funding needs. It's absolutely free to use and only take a
                                few minutes!.</p></li>
                        <li><h5 class="key-headers">Receive your quotes</h5>
                            <p>We will match your business needs to suitable providers on our panel who may be able to
                                fund you. These funding providers will contact you direct and provide you with your free
                                competitive quotation. This won’t impact your business credit rating.</p></li>
                        <li><h5 class="key-headers">Decide in your own time</h5>
                            <p>There's absolutely no obligation and no pressure. Decide when you’re ready!</p></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-7 offset-lg-5"><a class="btn btn-success btn-lg mobile-block"
                                                            href="{{ $page->quoteUrl }}"
                                                            role="button">Get Your
                        Free Quote</a></div>
            </div>
        </div>
    </section>
    <section class="loan-type-section" id="loans">
        <div class="container" id="quote-header">
            <div class="row justify-content-center align-self-center text-center">
                <div class="col-12">
                    <h3 class="section-header">Featured Products</h3>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card loan-type-card">
                        <div class="card-body text-center">
                            <div><i class="fa fa-unlock fa-5x text-primary" aria-hidden="true"></i></div>
                            <h2 class="key-headers">Unsecured Loan Finance</h2>
                            <p>An unsecured business loan offers a straightforward funding solution for UK businesses;
                                you could
                                borrow up to £500,000 or more without having to secure the loan against company assets,
                                such as
                                property, land or equipment.</p>
                            <a class="btn btn-success btn-lg" href="{{ $page->quoteUrl }}" role="button">Get Your Free
                                Quote</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-none d-lg-block">
                    <div id="unsecured-img" class="rounded-sm"></div>
                </div>
                <div class="col-12 col-lg-6 d-none d-lg-block">
                    <div id="advance-img" class="rounded-sm"></div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card loan-type-card">
                        <div class="card-body text-center">
                            <i class="fa fa-credit-card-alt fa-5x text-primary" aria-hidden="true"></i>
                            <h2 class="key-headers">Business Cash Advance</h2>
                            <p>A Business Cash Advance, also known as a Merchant Cash Advance or PDQ loan, is a
                                short
                                term
                                unsecured cash injection that is loaned against your business’ future credit and
                                debit
                                card
                                sales.</p>
                            <a class="btn btn-success btn-lg" href="{{ $page->quoteUrl }}" role="button">Get Your
                                Free
                                Quote</a>
                        </div>
                    </div>
                </div>
                <div class="col-12"><h3 class="section-header">Other funding options</h3></div>
                <div class="col-6 col-lg-2">
                    <div class="card funding-card">
                        <div class="card-body">
                            <i class="fa fa-unlock fa-3x text-primary" aria-hidden="true"></i>
                            <h5 class="key-headers">Unsecured Business Loan</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div class="card funding-card">
                        <div class="card-body">
                            <i class="fa fa-credit-card-alt fa-3x text-primary" aria-hidden="true"></i>
                            <h5 class="key-headers">Business Cash Advance</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div class="card funding-card">
                        <div class="card-body">
                            <i class="fa fa-lock fa-3x text-primary" aria-hidden="true"></i>
                            <h5 class="key-headers">Secured Business Loan</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div class="card funding-card">
                        <div class="card-body">
                            <i class="fa fa-wrench fa-3x text-primary" aria-hidden="true"></i>
                            <h5 class="key-headers">Asset Finance</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div class="card funding-card">
                        <div class="card-body">
                            <i class="fa fa-industry fa-3x text-primary" aria-hidden="true"></i>
                            <h5 class="key-headers">Commercial Property Finance</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div class="card funding-card">
                        <div class="card-body">
                            <i class="fa fa-university fa-3x text-primary" aria-hidden="true"></i>
                            <h5 class="key-headers">VAT and Tax Finance</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div class="card funding-card">
                        <div class="card-body">
                            <i class="fa fa-users fa-3x text-primary" aria-hidden="true"></i>
                            <h5 class="key-headers">JV Property Development Finance</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6  col-lg-2">
                    <div class="card funding-card">
                        <div class="card-body">
                            <i class="fa fa-building-o fa-3x text-primary" aria-hidden="true"></i>
                            <h5 class="key-headers">Commercial Mortgages</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                </div>
            </div>
        </div>
    </section>

@endsection
