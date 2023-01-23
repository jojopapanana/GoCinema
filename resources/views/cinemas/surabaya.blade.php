<x-layout title="Playing in SURABAYA">
    <div class="p-5">
        <div class="rounded shadow" style="background-color: gray; height: 40vh;"></div>
        <div class="d-flex gap-5 mt-5 row justify-content-evenly w-100 mx-auto">
            @foreach ($movies as $movie)
                @if($movie->status == 1)
                    <div class="rounded p-3 shadow col-2" style="height: 55vh" id="movies">
                        <a href="{{ URL::to('movies/' . $movie->id) }}" class="text-decoration-none" style="color: black">
                            <div class="rounded p-2">
                                <div class="rounded d-flex justify-content-center">
                                    <img src="/storage/images/movies/{{ $movie->picture }}" alt="" class="rounded" style="height: 35vh">
                                </div>
                                
                                <p class="fw-bold pt-2 text-center">{{ $movie->movieName }}</p>
                            </div>
                            <div class="d-flex gap-3 justify-content-center">
                                <div class="ps-2 pe-2 rounded" style="border-style: solid; border-width: 1px; border-color: rgb(235, 171, 93);">{{ $movie->movieRating }}</div>
                                <div class="ps-2 pe-2 rounded" style="border-style: solid; border-width: 1px; border-color: rgb(235, 171, 93);">{{ $movie->movieFormat }}</div>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    
    <div class="d-flex justify-content-center p-3">
        <a class="btn btn-primary fw-bold" style="width: 10vw; height: 5vh" href="{{ route('movies.create') }}">ADD MOVIE</a>
    </div>
    
</x-layout>