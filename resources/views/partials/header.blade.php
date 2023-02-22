<header>
    <figure>
        <a href="{{ route($logo_link['link']) }}">
            <img src="{{ URL::asset('img/boolean-logo.jpg') }}" alt="logo">
        </a>
    </figure>
    <ul>
        @foreach ($header_links as $link)
            <li><a href="{{ route($link['link']) }}">{{ $link['text'] }}</a></li>
        @endforeach
    </ul>
</header>
