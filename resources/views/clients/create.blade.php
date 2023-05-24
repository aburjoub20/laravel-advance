<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    {{-- traditional steps to show error message --}}
    {{-- @if ($errors->any())
    @foreach ($errors->all() as $error )
    <p class="text-danger"> {{$error}}</p>
    @endforeach

    @endif --}}

    <form method="POST" action="{{route('clients.store')}}">
        @csrf
@include('clients._form')


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
<script src="path/to/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>
