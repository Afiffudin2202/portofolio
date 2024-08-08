@extends('layouts.main')
@section('content')
    <section id="intro" class="py-5 container-fluid">
        <div class="container">
            <div class="row m-0 p-0 justify-content-center">
                <div class="col-lg-6 ">
                    <div class="card-container ">
                        <div class="row m-0 h-100">
                            <div class="col-lg-6  col-sm-12 px-0 pb-0 pt-5 left-box">
                                <div class="image ">
                                    <img src="https://i.pinimg.com/originals/e8/82/72/e8827292777dca5378d3c75899029883.jpg"
                                        alt="">
                                </div>
                                <div class="name">
                                    <h3 class="text-center">AFIFFUDIN</h3>
                                </div>
                                <div class="position">
                                    <p class="text-center">WEB DEVELOPER</p>
                                </div>
                                <div class="footer-sosmed">
                                    <a href="https://www.linkedin.com/in/afiffudin22/"><i class="bi bi-linkedin"></i></a>
                                    <a href="https://www.instagram.com/afiffudin.22/"><i class="bi bi-instagram"></i></a>
                                    <a href="https://api.whatsapp.com/send/?phone=6282127021230"><i class="bi bi-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6  col-sm-12 right-box px-5 pb-0 pt-5">
                                <h2>Hallo</h2>
                                <p>Here's Who Im and What I Do</p>
                                <div class="button">
                                    <button class="btn btn-dark" onclick="window.location='{{ url('resume') }}'">Resume</button>
                                    <button class="btn btn-outline-dark" onclick="window.location='{{ url('project') }}'">Project</button>
                                </div>
                                <p class="mt-3 ">I am a freshgraduate and have an interest in the IT field.
                                    I have 5 months of internship experience as a fullstack developer (Laravel) and
                                    experience working as a junior IT programmer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
