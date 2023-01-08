<x-layout title="Details">
    @foreach($movies as $movie)
        @if($id == $movie->id)
        <div class="p-3 text-center">
                <div class="pb-5 pt-5">
                    <img src="{{ asset ('images/avatar.jpg') }}" alt="" class="rounded" style="height: 45vh">
                </div>

                <p class="fw-bold fs-4">{{ $movie->movieName }}</p>
                <div class="d-flex gap-3 justify-content-center">
                    <p class="fw-semibold fs-5">{{ $movie->movieFormat }}</p>
                    <p class="fw-semibold fs-5">{{ $movie->movieRating }}</p>
                    <div class="d-flex gap-1">
                        <i class="bi bi-clock fw-bold pt-1"></i>
                        <p class="fw-semibold fs-5">192 minutes</p>
                    </div>
                </div>

            <div class="p-5">
                <h3 class="fw-bold fs-4 pb-5">SELECT THEATRE AND SHOW TIME</h3>
                <div class="d-flex justify-content-evenly p-3" style="border-bottom: 1px solid #8c8b8b;">
                    <div class="">
                        <p class="fs-5 text-start">EMPORIUM PLUIT MALL</p>
                        <div class="d-flex gap-3">
                            <span class="fs-5 p-2" style="border-style: solid; border-color: rgb(235, 171, 93); border-radius: 10px">11.00</span>
                            <span class="fs-5 p-2" style="border-style: solid; border-color: rgb(235, 171, 93); border-radius: 10px">12.00</span>
                            <span class="fs-5 p-2" style="border-style: solid; border-color: rgb(235, 171, 93); border-radius: 10px">13.00</span>
                        </div>
                    </div>
                    
                    <div class="d-flex gap-3">
                        <p class="fs-5">09-01-2023</p>
                        <p class="fs-5">Rp. 50.000</p>
                    </div>
                </div>
            </div>
        </div>
        
            
        @endif
    @endforeach
</x-layout>