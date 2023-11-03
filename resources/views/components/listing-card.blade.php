@props(['listing'])

<h2>
    <a href="/listing/{{$listing['id']}}">{{$listing['title']}}</a>
</h2>

<h4>
    {{$listing['tags']}}
</h4>
<p>{{$listing['description']}}</p>
