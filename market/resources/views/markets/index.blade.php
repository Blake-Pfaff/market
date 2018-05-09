<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <ul>
        @foreach($markets as $market)
            <li>
               <a href="{{ route('markets.show', $market) }}">
                   {{ $market->name }}
               </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
