@extends('layouts/main')
<link rel="stylesheet" href="CSS/contact.css">

@section('container')
<div class="contain">
    <div class="startt">
        <h1>Contact Me</h1>
        <span>Feel free to reach out to me anytime if you need assistance or want to discuss anything. I am happy to help you.</span>
    </div>
   
    <div class="contact">
        <form action="https://api.web3forms.com/submit" method="POST" class="contact-email">
            <input type="hidden" name="access_key" value="14b64686-1560-470a-a47e-259da731f799">
            <div class="input">
                <input type="email" name = "email" placeholder = "Your Email" class="contact-inputs" required>
                <textarea name="message" placeholder="Your Message" class="contact-inputs"></textarea>
            </div>
            <button type="submit">Submit <img src="" alt=""></button>
        </form>
    </div>
</div>
@endsection