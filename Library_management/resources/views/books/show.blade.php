<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bibliothèque Laravel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMV7WH0E3QtTWv0e49N8+TmkYh0kOhjcvR64qBk" crossorigin="anonymous">
  <style>
    .card {
      cursor: pointer;
      transition: transform 0.2s;
    }
    .card:hover {
      transform: scale(1.05);
    }
    .navbar{
        padding-left: 270px;
        padding-right: 150px;
        li{
            padding-left: 50px;
        }
    }
    .banner{
        background-image: url(data:image/jpeg;base64,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);
    }
  </style>
</head>

<body>
<nav class="navbar navbar-dark bg-dark navbar navbar-expand-lg navbar-light bg-light w-100">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav me-auto mb-4 mb-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Accueil</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#">Accueil</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link" href="#">Accueil</a>

      </li>
      <li class="nav-item">
      <a class="nav-link" href="#">Accueil</a>
      </li>
    </ul>
    <form class="d-flex"  method="GET">
      <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search" name="query">
      <button class="btn btn-outline-primary" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container my-5">
  <div class="row">
    <div class="col text-center">
        <div class="banner">

        </div>
      <hr>
      <a href="{{ route('books.create') }}" class="btn btn-primary mb-4">Enregistrer un livre</a>
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      <div class="row row-cols-1 row-cols-md-6 g-4">
        @foreach($books as $book)
          <div class="col">
            <a href="{{ route('books.more', $book->id) }}" class="text-decoration-none text-dark">
              <div class="card h-100">
                <img src="{{ $book->image }}" class="card-img-top" alt="{{ $book->title }}" style="height: 300px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">{{ $book->title }}</h5>
                  <p class="card-text flex-grow-1"><small class="text-muted">Résumé : {{ $book->description }}</small></p>
                  <p class="card-text"><small class="text-muted">Catégorie : {{ $book->category->title }}</small></p>
                </div>
              </div>
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha384-lZN37fLxoqAC6ABzH8E8XK4X3/AdHmy8Tlfk2Pz34uV1oLxefs/FiqFE5vNE6uZ9" crossorigin="anonymous"></script>
</body>
</html>
