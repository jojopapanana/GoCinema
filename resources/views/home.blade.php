<x-layout title="Home">
    <div class="p-5">
        <div class="rounded shadow" style="background-color: gray; height: 40vh;"></div>
        <div class="d-flex gap-5 mt-5 row justify-content-evenly w-100 mx-auto">
            @foreach ($movies as $movie)
                @if($movie->status == 1)
                    <div class="rounded p-3 shadow col-2" style="height: 55vh" id="movies">
                        <a href="{{ route('details', ['id'=>$movie->id]) }}" class="text-decoration-none" style="color: black">
                            <div class="rounded p-2">
                                <img src="images/avatar.jpg" alt="" class="rounded mx-auto d-block" style="height: 35vh">
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
            

            {{-- <div class="rounded p-3 shadow col-2" style="height: 55vh" id="movies">
                <div class="rounded p-2">
                    <img src="images/iwdws.jpg" alt="" class="rounded mx-auto d-block" style="height: 35vh">
                    <p class="fw-bold pt-2 text-center">I WANNA DANCE WITH SOMEBODY</p>
                </div>
                <div class="d-flex gap-3 justify-content-center">
                    <div class="ps-2 pe-2 rounded" style="border-style: solid; border-width: 1px; border-color: rgb(235, 171, 93);">R13+</div>
                    <div class="ps-2 pe-2 rounded" style="border-style: solid; border-width: 1px; border-color: rgb(235, 171, 93);">2D</div>
                </div>
            </div>

            <div class="rounded p-3 shadow col-2" style="height: 55vh" id="movies">
                <div class="rounded p-2">
                    <img src="images/pussinboots.jpg" alt="" class="rounded mx-auto d-block" style="height: 35vh">
                    <p class="fw-bold pt-2 text-center">PUSS IN BOOTS: THE LAST WISH</p>
                </div>
                <div class="d-flex gap-3 justify-content-center">
                    <div class="ps-2 pe-2 rounded" style="border-style: solid; border-width: 1px; border-color: rgb(235, 171, 93);">SU</div>
                    <div class="ps-2 pe-2 rounded" style="border-style: solid; border-width: 1px; border-color: rgb(235, 171, 93);">2D</div>
                </div>
            </div>
            
            <div class="rounded p-3 shadow col-2" style="height: 55vh" id="movies">
                <div class="rounded p-2">
                    <img src="images/themenu.jpg" alt="" class="rounded mx-auto d-block" style="height: 35vh">
                    <p class="fw-bold pt-2 text-center">THE MENU</p>
                </div>
                <div class="d-flex gap-3 justify-content-center" style="position: relative; bottom: 0px">
                    <div class="ps-2 pe-2 rounded" style="border-style: solid; border-width: 1px; border-color: rgb(235, 171, 93);">D17+</div>
                    <div class="ps-2 pe-2 rounded" style="border-style: solid; border-width: 1px; border-color: rgb(235, 171, 93);">2D</div>
                </div>
            </div>

            <div class="rounded p-3 shadow col-2" style="height: 55vh" id="movies">
                <div class="rounded p-2">
                    <img src="images/blackpanther.jpg" alt="" class="rounded mx-auto d-block" style="height: 35vh">
                    <p class="fw-bold pt-2 text-center">BLACK PANTHER: WAKANDA FOREVER</p>
                    <div class="d-flex gap-3 justify-content-center">
                        <div class="ps-2 pe-2 rounded" style="border-style: solid; border-width: 1px; border-color: rgb(235, 171, 93);">SU</div>
                        <div class="ps-2 pe-2 rounded" style="border-style: solid; border-width: 1px; border-color: rgb(235, 171, 93);">2D</div>
                    </div>
                </div>
            </div>
            
            <div class="rounded p-3 shadow col-2" style="height: 55vh" id="movies">
                <div class="rounded p-2">
                    <img src="images/blackpanther.jpg" alt="" class="rounded mx-auto d-block" style="height: 35vh">
                    <p class="fw-bold pt-2 text-center">BLACK PANTHER: WAKANDA FOREVER</p>
                    <div class="d-flex gap-3 justify-content-center">
                        <div class="ps-2 pe-2 rounded" style="border-style: solid; border-width: 1px; border-color: rgb(235, 171, 93);">SU</div>
                        <div class="ps-2 pe-2 rounded" style="border-style: solid; border-width: 1px; border-color: rgb(235, 171, 93);">2D</div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    
</x-layout>