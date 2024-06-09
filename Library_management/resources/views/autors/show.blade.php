<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 20px;
            font-family: Arial, sans-serif;
        }
        .table-container {
            margin: 20px 0;
        }
        .table {
            background-color: #E0F7FA; /* Light blue color */
        }
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
        .btn-group .btn {
            margin: 0 5px;
        }
        .btn-group {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Auteurs</h1>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('autors.create') }}" class="btn btn-primary">Créer Auteur</a>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-container">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nom complet</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($autors as $autor)
                        <tr>
                            <td>{{ $autor->id }}</td>
                            <td>{{ $autor->name }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('autors.edit', $autor->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('autors.destroy', $autor->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
