<h1>Contact Form Submission</h1>
<!-- Embedding the logo -->
<img src="{{ public_path('assets/img/logo.png') }}" alt="Company Logo" style="max-width: 200px;">
<p>Name: {{ $details['names'] }}</p>
<p>Email: {{ $details['email'] }}</p>
<p>subject: {{ $details['subject'] }}</p>
<p>phone: {{ $details['phone'] }}</p>
<p>Message: {{ $details['messages'] }}</p>
