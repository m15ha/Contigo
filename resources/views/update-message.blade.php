@extends ('layouts.app')

@section('title-block')Edit message @endsection

@section('content')
<h1>Edit message</h1>  

<form action="{{ route('contact-update-submit', $data->id) }}" method="post">
@csrf

<div class="form-group">
    <label for="name">Name</label>
    <input type="text"name="name" placeholder="Name" value="{{$data->name}}" id="name" class="form-control">
</div>

<div class="form-group">
    <label for="name">Email</label>
    <input type="text"name="email" placeholder="Email" value="{{$data->email}}" id="email" class="form-control">
</div>

<div class="form-group">
    <label for="name">Subject</label>
    <input type="text"name="subject" placeholder="Subject" value="{{$data->subject}}" id="subject" class="form-control">
</div>

<div class="form-group">
    <label for="name">Message</label>
    <textarea name="message" id="message" placeholder="Message"  class="form-control">{{$data->message}}</textarea>
</div>

<button type="submit" class="btn btn-success mt-3">Update</button>
</form>
@endsection
