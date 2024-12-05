@extends('_layouts.master')

@section('title', 'Search Results')

@section('content')
    <h1>Search Results for "{{ $query }}"</h1>
    <hr>
    @if($results->isEmpty())
        <p>No results found.</p>
    @else
        <ul>
            @foreach ($results as $result)
                <li>{{ $result->title }}</li>
            @endforeach
        </ul>
    @endif
@endsection
