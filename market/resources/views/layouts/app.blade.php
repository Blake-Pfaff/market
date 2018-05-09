<!DOCTYPE html>
<html>
<head>
    <title>Farm To Market</title>
</head>
<body>
   @if(count($errors) > 0)
        <ul>
            @foreach( $errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @yield('main')

</body>
</html>
