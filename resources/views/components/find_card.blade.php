@props(['listing'])

<x-layout>

    <h2>{{$listing['title']}} </h2>
    <h4>{{$listing['tags']}} </h4>
    <p>{{$listing['description']}}</p>
</x-layout>
