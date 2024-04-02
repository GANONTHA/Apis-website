@extends('layouts.layout') 
  @section('content')
            @include('includes.topbar')
            @include('includes.navbar')

      <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Nous Contacter</h2>
                    </div>
                    <div class="col-12">
                        <a href="/">Accueil</a>
                        <a href="/contacts">Contacts</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->  

        <!-- Contacts Start -->
           <div class="contact partial-content">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Contact for any query</h2>
                </div>
                <div class="contact-img">
                    <img src="img/contact.jpg" alt="Image" />
                </div>
                <div class="contact-form">
                    <div id="success"></div>
                    <form
                        name="sentMessage"
                        id="contactForm"
                        novalidate="novalidate"
                    >
                        <div class="control-group">
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                placeholder="Your Name"
                                required="required"
                                data-validation-required-message="Please enter your name"
                            />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                placeholder="Your Email"
                                required="required"
                                data-validation-required-message="Please enter your email"
                            />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input
                                type="text"
                                class="form-control"
                                id="subject"
                                placeholder="Subject"
                                required="required"
                                data-validation-required-message="Please enter a subject"
                            />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea
                                class="form-control"
                                id="message"
                                placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"
                            ></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button
                                class="btn btn-custom"
                                type="submit"
                                id="sendMessageButton"
                            >
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Contacts End -->
@stop