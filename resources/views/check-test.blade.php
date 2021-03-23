<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <title>Document</title>
</head>
<body>

<h1>csdjbcskdjbcksjb</h1>


    <form action="{{ route('check2') }}" method="POST">
@csrf

    <div>
    

    <div name="user_id">{{ $user['id'] }}</div>
    <input type="text" name="userd_id" value="{{ $user['id'] }}">

    <input type="submit">
</div>
</form>
</body>
</html>
    