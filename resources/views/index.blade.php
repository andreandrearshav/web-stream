<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet">
    <title>Film List</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Film List</h1>

        <a href="{{ route('films.create') }}" class="btn btn-success mb-4">Add New Film</a>
        
        <div class="row">
            @foreach($films as $film)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if($film->poster)
                            <img src="{{ asset('posters/' . $film->poster) }}" class="card-img-top p-3 mb-3 rounded" alt="Poster" style="height: 250px; object-fit: cover;">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $film->title }}</h5>
                            <p class="card-text">{{ Str::limit($film->description, 100) }}</p>
                            <p><strong>Genre:</strong> {{ $film->genre }}</p>
                            @if($film->video)
                                <video width="100%" controls>
                                    <source src="{{ asset('videos/' . $film->video) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://vjs.zencdn.net/7.15.4/video.js"></script>
</body>
</html>
