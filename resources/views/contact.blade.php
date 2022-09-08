@extends('layout.master')
@section('title', 'Home - Legalito')
@section('description')

@section('content')
    <div class="container py-5 py-md-6">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="display-3">Contact us</h1>
                <div class="border border-2 border-light w-15 my-4"></div>
                <p class="lead text-light mb-4">Ask us anything, or share your feedback.</p>
            </div>
        </div>
    </div>

    <!-- Form -->
    <div class="bg-white text-black">
        <div class="container py-3">
            <div class="bg-white mt-n5 mt-md-n6 px-3 px-md-0">
                <div class="row justify-content-center py-4 py-lg-5">
                    <div class="col-md-10 col-lg-8">
                        <p>Fields marked with an <span class="text-secondary">*</span> are required.</p>
                        <form class="py-3">
                            <div class="mb-4">
                                <label for="inputName" class="form-label">Name <span class="text-secondary">*</span></label>
                                <input type="text" class="form-control" id="inputName" placeholder="Enter your name"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="inputEmail" class="form-label">Email <span
                                        class="text-secondary">*</span></label>
                                <input type="email" class="form-control" id="inputEmail"
                                    placeholder="Enter your email address" required>
                            </div>
                            <div class="mb-4">
                                <label for="messageTetxarea" class="form-label">Message <span
                                        class="text-secondary">*</span></label>
                                <textarea class="form-control" id="messageTetxarea" rows="9" placeholder="Enter your message" required></textarea>
                            </div>
                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="inputCheck">
                                <label class="form-check-label small" for="inputCheck">I agree with the <a href="#"
                                        class="link-underline">privacy policy</a></label>
                            </div>
                            <button type="submit" class="btn btn-pill btn-secondary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
