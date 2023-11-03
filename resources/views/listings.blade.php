@extends('layout')
@section('content')

<h1>{{$heading}}</h1>
@unless(count($listings) == 0)

 @foreach($listings as $listing)
   <x-listing-card :listing="$listing" />
@endforeach

@else
<p>No List Found</p>
@endunless

@endsection
