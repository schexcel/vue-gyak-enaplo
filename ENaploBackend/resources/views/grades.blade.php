<!doctype html>
<html lang="hu">
<head>
    <title>Enaplo</title>
</head>
<body>
    <h1>Osztályzatok</h1>
    <hr>
    <ul>
        @foreach($grades as $grade)
            <li>{{$grade->grade}} (x{{$grade->weight}}) [{{$grade->comment}}]
                <ul>
                    <li>{{$grade->student->name}}</li>
                </ul>
            </li>
       @endforeach
    </ul>
</body>
</html>
