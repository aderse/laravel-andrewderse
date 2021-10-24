@extends('layouts.app')

@section('content')
<main>
    <section id="sub-header">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-12 text-center p-5">
                    <h2>Contact Me</h2>
                    <p><a href="tel:6084087169">(608) 408-7169</a> - <a href="mailto:andrew.derse@madcitycoders.com">andrew.derse@madcitycoders.com</a></p>
                    <p>521 S Park Street, Reedsburg, WI 53959</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mb-5">
            <div class="row">
                <div class="col-6">
                    <h2>Tell me about your project</h2>
                    <p>I love to help people!</p>
                    <p>If you are like most people, you have at least one brilliant idea, but you don't know how to get that idea out of your head and turn it into a website. You may feel weighed down with the idea of building a website or focusing on something that is not your strong suit.</p>
                    <p>No worries, tell me about your project and I will help make that a reality. Help take the stress out of our project and focus on what really matters the most to you.</p>
                    <p>Have a website developed years ago and need to make it responsive or more "up to date"? Perfect, I can help with that!</p>
                    <p>I look forward to working with you!</p>
                </div>
                <div class="col-6">
                    <form id="contact-form" method="post">
                        <h4>Name:</h4>
                        <input type="text" style="height:35px;" id="name-input" placeholder="Enter name here…" class="form-control" style="width:100%;" /><br/>
                        <h4>Email:</h4>
                        <input type="email" style="height:35px;" id="email-input" placeholder="Enter email here…" class="form-control" style="width:100%;"/><br/>
                        <h4>How can we help you?</h4>
                        <textarea id="description-input" rows="3" placeholder="Enter your message…" class="form-control" style="width:100%;"></textarea><br/>
                        <div class="g-recaptcha" data-sitekey="6Lc7cVMUAAAAAM1yxf64wrmO8gvi8A1oQ_ead1ys" class="form-control" style="width:100%;"></div>
                        <button type="button" onClick="submitToAPI(event)" class="btn btn-lg contact-btn" style="margin-top:20px;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection