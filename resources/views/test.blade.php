<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <h1>Dane z bazy:</h1>
    @foreach ($industry as $elem)
        <p>id {{ $elem->industry_id }} name:{{ $elem->name }}</p>
    @endforeach
</body>
</html>