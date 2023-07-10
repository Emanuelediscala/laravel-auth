@extends('layouts.app')
@section('content')

<div>
    @foreach ($projects as $project)
        <li><a>{{$project->title}}</a></li>
    @endforeach
</div>

@endsection