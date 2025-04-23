<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Quote</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center min-vh-100">
    <div class="card shadow p-4" style="max-width: 600px; width: 100%;">
        @if(isset($quote))
            <h1 class="card-title text-center mb-4 h4">Quote of the Moment</h1>
            <blockquote class="blockquote text-center">
                <p class="mb-0">"{{ $quote['q'] }}"</p>
                <footer class="blockquote-footer mt-2">{{ $quote['a'] }}</footer>
            </blockquote>
        @else
            <div class="alert alert-danger text-center">
                Gagal mengambil quote.
            </div>
        @endif

        <div class="text-center mt-4">
            <a href="{{ route('quote.random.ui') }}" class="btn btn-primary">
                Refresh Quote
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
