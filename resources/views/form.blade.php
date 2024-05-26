<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>

<body>
    {{-- Macam-macam directive untuk form --}}
    {{-- @checked(kondisi) --> untuk input checkbox --}}
    {{-- @selected(kondisi) --> untuk input option --}}
    {{-- @disabled(kondisi) --> input akan memiliki atribut disabled --}}
    {{-- @readonly(kondisi) --> input akan memiliki atribut readonly --}}
    {{-- @required(kondisi) --> input akan memiliki atribut required --}}

    <form action="">
        <input type="checkbox" @checked($user["premium"]) value="Premium"> <br/>
        <input type="text" value="{{$user['name']}}" @readonly(!$user["admin"])> <br/>
    </form>
</body>

</html>
