@extends('layouts.app-master')

<div class="contact-container">
    <div class="body_item">

        <div class="images">
            <img src="{{asset('/img/news.jpg')}}" alt=" ">
        </div>
    </div>
    <div class="body_item contact_us">
        <div class="right_pannel">
            <div class="contact_part">
                <div class="contact">
                    <p>
                    <h1>Contact</h1>
                    </p>
                </div>
                <div>
                    <p>
                    <h3>Tourist Visits</h3>
                    </p>
                    Tuesday - Saturday ||
                    9:00 am - 5:00 pm PST
                    <hr>
                    <br>info@<br>
                    01729008<br>
                    019567898
                </div>
            </div>
            <div class="contact_part">
                <p>Constant Contact, Inc. is an online marketing company,
                    headquartered in Waltham, Massachusetts, with additional
                    offices in Loveland, Colorado; and New York, New York.</p>
            </div>
        </div>
    </div>
</div>

@section('content')
@endsection
