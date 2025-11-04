<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Analyzer</title>
    <style>
        :root {
            --bg: #ffffff;
            --text: #111111;
            --muted: #666666;
            --border: #e5e5e5;
            --btn-bg: #000000;
            --btn-text: #ffffff;
            --btn-hover-bg: #222222;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background: var(--bg);
            color: var(--text);
            margin: 0;
            padding: 2rem;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            font-size: 1.75rem;
            text-align: center;
            font-weight: 600;
            margin-bottom: 2rem;
            letter-spacing: -0.5px;
        }

        .card {
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            background: #fff;
        }

        .card h4 {
            font-size: 1.2rem;
            margin-bottom: 0.75rem;
            font-weight: 600;
        }

        .card p {
            color: var(--muted);
            line-height: 1.6;
            white-space: pre-line;
        }

        form {
            margin-bottom: 2rem;
        }

        input[type="text"] {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid var(--border);
            border-radius: 6px;
            font-size: 0.95rem;
            color: var(--text);
            background: #fafafa;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #000;
        }

        .input-group {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.25rem;
        }

        .row {
            display: flex;
            gap: 3rem;
            margin-bottom: 1.25rem;
        }

        .col {
            flex: 1;
        }

        button, .btn {
            background: var(--btn-bg);
            color: var(--btn-text);
            border: none;
            border-radius: 6px;
            padding: 0.75rem 1.25rem;
            font-size: 0.95rem;
            cursor: pointer;
            transition: background 0.2s;
        }

        button:hover, .btn:hover {
            background: var(--btn-hover-bg);
        }

        .btn-secondary {
            background: transparent;
            color: var(--text);
            border: 1px solid var(--border);
        }

        .btn-secondary:hover {
            background: #f7f7f7;
        }

        .alert {
            padding: 0.75rem 1rem;
            border: 1px solid var(--border);
            border-radius: 6px;
            font-size: 0.95rem;
            color: var(--muted);
            background: #f9f9f9;
            margin-bottom: 2rem;
        }

        .btn-sort {
            display: inline-block;
            margin-bottom: 2rem;
            text-decoration: none;
        }

        footer {
            margin-top: 3rem;
            text-align: center;
            color: var(--muted);
            font-size: 0.85rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Text Analyzer</h1>

        <div class="card">
            <h4>{{ $article->title }}</h4>
            <p>{{ $article->content }}</p>
        </div>

        @if(isset($result))
            <div class="alert">{{ $result }}</div>
        @endif

        <form action="{{ route('text.search') }}" method="POST">
            @csrf
            <div class="input-group">
                <input type="text" name="keyword" placeholder="Cari kata..." required>
                <button>Cari</button>
            </div>
        </form>

        <form action="{{ route('text.replace') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <input type="text" name="old_word" placeholder="Kata lama" required>
                </div>
                <div class="col">
                    <input type="text" name="new_word" placeholder="Kata baru" required>
                </div>
                <div>
                    <button>Ganti</button>
                </div>
            </div>
        </form>

        <a href="{{ route('text.sort') }}" class="btn btn-sort">Urutkan Semua Kata (A-Z)</a>

        @if(isset($sortedWords))
            <div class="card">
                <h4>Hasil Pengurutan Kata</h4>
                <p>{{ implode(', ', $sortedWords) }}</p>
            </div>
        @endif

        <footer>© {{ date('Y') }} Developed by Fahril Hadi</footer>
    </div>
</body>
</html>