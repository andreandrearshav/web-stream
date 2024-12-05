<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Upload Film</h1>

        <form action="{{ route('films.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Film Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Film Description</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" name="genre" id="genre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="poster" class="form-label">Upload Poster</label>
                <input type="file" name="poster" id="poster" class="form-control" accept="image/*">
            </div>

            <div class="mb-3">
                <label for="video" class="form-label">Upload Video</label>
                <input type="file" name="video" id="video" class="form-control" accept="video/*" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Save Film</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
