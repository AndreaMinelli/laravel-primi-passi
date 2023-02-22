<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Laravel</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        <header>
            <figure>
                <a href="{{ route($logo_link['link']) }}">
                    <img src="{{ URL::asset('img/boolean-logo.jpg') }}" alt="logo">
                </a>
            </figure>
            <ul>
                @foreach ($header_links as $link)
                    <li><a href="{{ $link['link'] }}">{{ $link['text'] }}</a></li>
                @endforeach
            </ul>
        </header>
        <h1>Home</h1>
    </div>
</body>

</html>
