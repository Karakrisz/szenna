@extends('layouts.app')

@section('content')
<h1>Kategóriák</h1>

<ul>
    @foreach($categories as $category)
    <li>{{ $category->name }}</li>
    @endforeach
</ul>
@endsection