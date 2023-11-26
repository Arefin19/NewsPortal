@extends('layouts.app-master')

@section('content')
<div>
    <div class="first-column">

            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">Mushfiq</span>
                <span class="text-black-50">mushfiqalam71@proton.me</span>
                <span> </span>
            </div>
        
    </div>

        <div class="second-column">

            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="Enter First name" value=""></div>
                    <div class="col-md-6"><label class="labels">Lastname</label><input type="text" class="form-control" value="" placeholder="Enter Last Name"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="Enter Phone Number" value=""></div>

                    <div class="col-md-6"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="Enter Email id" value=""></div>

                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="Enter Your Address" value=""></div>

                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="Enter Country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="Enter State"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary" type="button">Save Profile</button></div>
            </div>
        
    </div>
    <div class="third-column">
        <div class="mt-5 text-center"><button class="btn btn-danger" type="button">Log Out</button></div>
    </div>
             
</div>
@endsection