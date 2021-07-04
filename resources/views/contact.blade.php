@extends ('layouts.app')

@section('title-block')Contacts @endsection

@section('content')
<h1>Contacts</h1>  

<form action="{{ route('contact-form') }}" method="post">
@csrf

<div class="form-group">
    <label for="name">Name</label>
    <input type="text"name="name" placeholder="Name" id="name" class="form-control">
</div>

<div class="form-group">
    <label for="name">Email</label>
    <input type="text"name="email" placeholder="Email" id="email" class="form-control">
</div>

<div class="form-group">
    <label for="name">Subject</label>
    <input type="text"name="subject" placeholder="Subject" id="subject" class="form-control">
</div>

<div class="form-group">
    <label for="name">Message</label>
    <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
</div>

<button type="submit" class="btn btn-success mt-3">Submit</button>
</form>
@endsection
