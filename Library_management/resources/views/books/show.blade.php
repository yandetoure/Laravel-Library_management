<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD IN LARAVEL 11</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container my-5">
    <div class="row">
      <div class="col text-center">
        <h1>CRUD DANS LARAVEL 11</h1>
        <hr>
        <a href="{{ route('books.create') }}" class="btn btn-primary mb-4">Enregistrer un livre</a>
        @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif
        <div class="row">
          @foreach($books as $book)
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <img src="{{ $book->image }}" class="card-img-top" alt="{{ $book->title }}">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">{{ $book->title }}</h5>
                  <p class="card-text flex-grow-1"><small class="text-muted">{{ $book->description }}</small></p>
                  <p class="card-text"><small class="text-muted">{{ $book->category->title }}</small></p>
                  <p class="card-text"><small class="text-muted">{{ $book->shelf->title }}</small></p>
                  <p class="card-text"><small class="text-muted">{{ $book->publisher->name }}</small></p>
                  <div class="btn-group mt-auto" role="group">
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-info">Détails</a>
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Modifier</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
