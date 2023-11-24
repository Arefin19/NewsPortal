@extends('layouts.app-master')

<div class="contact-container">
    <div class="body_item">

        <div class="images">
            <img src="{{asset('/img/news.jpg')}}" alt=" ">

        </div>
    </div>

    <div class="body_item contact_us">
        <nav>
            <a href="index.html">Inside Story</a>
            <a href="contact.html">Visit Us</a>
            <a href="contact.html">Commercial Use</a>
            <a href="contact.html">Contact Us</a>
        </nav>

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

                <div class="commercial">
                    <h1> Commercial Requests
                </div>
                <form>
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name">


                    <label for="name">Email:</label>
                    <input type="text" id="name" name="name">

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" cols="50"></textarea>
                </form>

                <p>
                <form action="/submit" method="post">
                    </p>
                    <input type="submit" value="Submit Request">
                </form>

            </div>
        </div>
    </div>
</div>

@section('content')
@endsection
