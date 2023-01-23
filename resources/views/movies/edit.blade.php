<x-layout title="Update Movie">
    <div class="container p-5">
        <form method="POST" action="{{ route('movies.update', $movie->id) }}" enctype="multipart/form-data">
            @csrf
            @method('UPDATE')
            <div class="mb-3">
              <label for="movieName" class="form-label">Movie Name</label>
              <input type="text" class="form-control" name="movieName" value="{{ $movie->movieName }}">
            </div>
            <div class="mb-3">
                <label for="movieRating" class="form-label">Movie Rating</label>
                <input type="text" class="form-control" name="movieRating" value="{{ $movie->movieRating }}">
              </div>
              <div class="mb-3">
                <label for="movieFormat" class="form-label">Movie Format</label>
                <input type="text" class="form-control" name="movieFormat" value="{{ $movie->movieFormat }}">
              </div>
              <div class="mb-3">
                <label for="movieDuration" class="form-label">Movie Duration</label>
                <input type="text" class="form-control" name="movieDuration" value="{{ $movie->movieDuration }}">
              </div>
              <div class="mb-3">
                <label for="picture" class="form-label">Movie Poster</label>
                <input type="text" class="form-control" name="picture_old" value="{{ $movie->picture }}" hidden>
                <input type="file" class="form-control" name="picture_new">
              </div>
              <div class="mb-3">
                <label for="status" class="form-label">Movie Status</label>
                <input type="text" class="form-control" name="status" value="{{ $movie->status }}">
              </div>
              @method('PUT')
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</x-layout>