@extends ('layouts.app')

@section('title-block')Main page @endsection

@section('content')
    <h1>Main page</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora dolorum esse tempore? Minus dicta eaque voluptatum
        cum, esse eos, dolore, optio totam enim excepturi voluptatibus dolorum voluptatem neque sit adipisci.</p>
@endsection

@section('aside')
    @parent
    <p>additional text</p>
@endsection
