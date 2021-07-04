@extends ('layouts.app')

@section('title-block')Messages @endsection

@section('content')
    <h1>Messages</h1>

    @foreach ($data as $el)
        <div class="alert alert-info">
            <h2>{{$el->name}}</h2>
            <h4>{{$el->email}}</h4>
            <h3>{{$el->subject}}</h3>
            <p><small>{{$el->created_at}}</small></p>
            <a href="{{ route('contact-data-one', $el->id) }}"><button class='btn btn-warning'>More</button></a>
        </div>
    @endforeach
@endsection

