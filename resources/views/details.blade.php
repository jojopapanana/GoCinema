<x-layout title="Details">
    @foreach($movies as $movie)
        @if($id == $movie->id)
            <p>{{ $movie->movieName }}</p>
            <p>{{ $movie->movieFormat }}</p>
            <p>{{ $movie->movieRating }}</p>
        @endif
    @endforeach
</x-layout>