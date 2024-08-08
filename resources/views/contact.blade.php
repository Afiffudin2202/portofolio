@extends('layouts.main')
@section('content')
    <div class="container-fluid" style="background: linear-gradient(to right, #F1E5D1, #fff);">
        <div class="row mx-0 py-5  justify-content-center ">
            <h2 class="text-center mb-3">CONTACT</h2>
            <div class="col-lg-6">
                <div class="container-card mb-5">
                    <div class="card rounded-0 border-0 shadow-lg mb-3 p-5">
                        <form action="{{ url('contact') }}" method="post">
                            @csrf
                            <div class="row m-0 p-0">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="firstname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="lastname">
                                    </div>
                                </div>
                            </div>
                            <div class="row m-0 p-0">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" class="form-control" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row m-0 p-0">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea name="message" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary m-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
