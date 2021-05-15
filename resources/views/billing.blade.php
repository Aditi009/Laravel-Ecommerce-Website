@extends('layouts.app')
@section('title', 'Checkout')
@section('content')

<!-- start page content -->
<div class="container">
    <div class="row">
        <div class="col-md-5 offset-md-1">
            <hr>
            <h1 class="lead" style="font-size: 1.5em">Checkout</h1>
            <hr>
            <h3 class="lead" style="font-size: 1.2em; margin-bottom: 1.6em;">Billing details</h3>
            <form action="{{ route('checkout.billing') }}" method="POST">
                @csrf()
                <div class="form-group">
                    <label for="email" class="light-text">Email Address</label>
                    @guest
                        <input type="text" name="email" class="form-control my-input" required>
                    @else
                        <input type="text" name="email" class="form-control my-input" value="{{ auth()->user()->email }}" readonly required>
                    @endguest
                </div>
                <div class="form-group">
                    <label for="name" class="light-text">Name</label>
                    <input type="text" name="name" class="form-control my-input" required>
                </div>
                <div class="form-group">
                    <label for="address" class="light-text">Address</label>
                    <input type="text" name="address" class="form-control my-input" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city" class="light-text">City</label>
                            <input type="text" name="city" class="form-control my-input" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="province" class="light-text">Province</label>
                        <input type="text" name="province" class="form-control my-input" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="postal_code" class="light-text">Postal Code</label>
                            <input type="text" name="postal_code" class="form-control my-input" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="light-text">Phone</label>
                        <input type="text" name="phone" class="form-control my-input" required>
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">Save Billing Address</button>

            </form>
        </div>


    </div>
</div>
<!-- end page content -->

@endsection
