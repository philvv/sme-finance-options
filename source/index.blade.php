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
                        <a class="btn btn-success btn-lg" href="{{ $page->quoteUrl }}" role="button">Get Your Free
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
                <div class="col-12 col-md-3">
                    <div class="card usp-card">
                        <div class="card-body">
                            <i class="fa fa-tag fa-5x pb-3 text-primary" aria-hidden="true"></i>
                            <h5 class="key-headers">100% FREE TO USE</h5>
                            <p>We don’t charge a penny for using our online service.</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-12 col-md-3">
                    <div class="card usp-card">
                        <div class="card-body">
                            <i class="fa fa-list-ol fa-5x pb-3 text-primary" aria-hidden="true"></i>
                            <h5 class="key-headers">MULTIPLE FUNDERS</h5>
                            <p>Get matched to funders that can help your business.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card usp-card">
                        <div class="card-body">
                            <i class="fa fa-clock-o fa-5x pb-3 text-primary" aria-hidden="true"></i>
                            <h5 class="key-headers">NO PRESSURE</h5>
                            <p>Decide in your own time. There is absolutely no pressure.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
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
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="section-header">We help connect your business to the right providers</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-5">
                    <img class="img mb-5" width="100%" height="auto"
                         src="https://www.capalona.co.uk/include/images/step-1.png">
                </div>
                <div class="col-12 col-md-7">
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
                <div class="col-12 col-md-7 offset-md-5"><a class="btn btn-success btn-lg" href="{{ $page->quoteUrl }}"
                                                            role="button">Get Your
                        Free Quote</a></div>
            </div>
        </div>
    </section>
    <section id="loan-type-section">
        <div class="container" id="quote-header">
            <div class="row">
                <div class="col-6 bg-primary">
                    <h1>Grow your business with extra credit</h1>
                    <h3>Everyday we help businesses like yours expand by connecting you to suitable lenders that meet
                        your business goals.</h3>
                </div>
                <div class="col-6 bg-danger">

                </div>
            </div>
        </div>
    </section>
    <section id="quote-footer">
        <div class="container" id="quote-header">
            <div class="row">
                <div class="col-6 bg-primary">
                    <h1>Grow your business with extra credit</h1>
                    <h3>Everyday we help businesses like yours expand by connecting you to suitable lenders that meet
                        your business goals.</h3>
                </div>
                <div class="col-6 bg-danger">

                </div>
            </div>
        </div>
    </section>
@endsection
