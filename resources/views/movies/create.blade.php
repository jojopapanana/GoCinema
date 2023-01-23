<x-layout title="Create Movie">
    <div class="container p-5">
        <form method="POST" action="{{ route('movies.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="movieName" class="form-label">Movie Name</label>
              <input type="text" class="form-control" name="movieName">
            </div>
            <div class="mb-3">
                <label for="movieRating" class="form-label">Movie Rating</label>
                <input type="text" class="form-control" name="movieRating">
              </div>
              <div class="mb-3">
                <label for="movieFormat" class="form-label">Movie Format</label>
                <input type="text" class="form-control" name="movieFormat">
              </div>
              <div class="mb-3">
                <label for="movieDuration" class="form-label">Movie Duration</label>
                <input type="text" class="form-control" name="movieDuration">
              </div>
              <div class="mb-3">
                <label for="picture" class="form-label">Movie Poster</label>
                <input type="file" class="form-control" name="picture">
              </div>
              <div class="mb-3">
                <label for="status" class="form-label">Movie Status</label>
                <input type="text" class="form-control" name="status">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</x-layout>