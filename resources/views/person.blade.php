<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Person</title>
</head>
<body>
    <h1 style="color: {{ $color }}">Person</h1>
    <p>This is the person view!</p>
    <hr>
    <p><b>Name:</b> {{ $name }}</p>
    <p><b>Age:</b> {{ $age }}</p>
    <p><b>Address:</b> {{ $address }}</p>

    <hr>
    @if($age < 18)
        <p style="color: red">Cannot vote!</p>
    @else
        <p style="color: green">Can vote!</p>
    @endif

    <hr>
    <h3>Siblings</h3>
    <ol>
        @foreach($siblings as $sibling)
            <li>
                {{ $sibling }}
            </li>
        @endforeach
    </ol>
</body>
</html>
