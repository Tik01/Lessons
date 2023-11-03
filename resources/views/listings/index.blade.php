<x-layout>
    <h1>{{$heading}}</h1>
    @include('partials.search')
    @unless(count($listings) == 0)

        @foreach($listings as $listing)
            <x-listing-card :listing="$listing"/>
        @endforeach

    @else
        <p>No List Found</p>
    @endunless

</x-layout>
