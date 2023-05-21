<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="{{route('Client.store')}}">
        @csrf
        <lable> enter your name </lable>
    <input type="text" name="name" placeholder="enter your name " />
    <lable> enter your phone </lable>
    <input type="text" name="phone" placeholder="enter your phone " />
    <lable> enter your email </lable>

    <input type="text" name="email" placeholder="enter your  email" />
    <input type="submit" value="Send Request" />

    </form>
</body>
</html>