@extends('_layouts.master')

@section('body')
    <section id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-header pb-0 mb-0">Contact</h1>
                    <h3 class="text-center pb-5">We're here to help</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <form name="contact" method="POST" data-netlify="true" netlify-honeypot="bot-field"   id="contact-form">
                        <p class="hidden d-none">
                            <label>Don’t fill this out if you're human: <input name="bot-field"/></label>
                        </p>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="name-input">Name</label>
                                    <input type="text" class="form-control" id="name-input" aria-describedby="name"
                                           placeholder="Enter name" name="name" required>
                                </div>

                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="email-input">Email address</label>
                                    <input type="email" class="form-control" id="email-input"
                                           aria-describedby="email"
                                           placeholder="Email" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="subject-input">Subject</label>
                                    <input type="text" class="form-control" id="subject-input"
                                           aria-describedby="subject"
                                           placeholder="Subject" name="subject" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="message-input">Message</label>
                                    <textarea class="form-control" id="message-input" rows="3"
                                              name="message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block background-primary">Send
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="alert alert-primary alert-dismissible fade" role="alert">
            <strong>Contact form submitted successfully.</strong> We'll get back to you shortly.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    </section>

    <script>

        $('.alert').alert();

        $("#contact-form").submit(function(e) {

            e.preventDefault();

            var $form = $(this);
            $.post($form.attr("action"), $form.serialize()).then(function() {
                $(".alert").addClass('show');
            });
        });

    </script>
@endsection
