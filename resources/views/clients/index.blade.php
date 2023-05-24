<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

@if(Session::has('msg'))
<div class="alert alert-success">
{{  Session::get('msg')  }}
</div>

@endif

    <table class="table">
        <thead>
          <tr>
            <th scope="col">name</th>
            <th scope="col">phone</th>
            <th scope="col">email</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
         @foreach($clinets as $client)
          <tr>
            <td>{{$client->name}} </td>
            <td>{{$client->phone}} </td>
            <td>{{$client->email}} </td>
            <td>
                <form method="POST" action="{{route('clients.delete')}}">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="client_id" value="{{$client->id}}" >
                <button type="submit" class="btn btn-danger"> Delete </button>
                </form>
            </td>
            <td> <a href="/clients/edit/{{$client->id}}" class="btn btn-info"> Edit</a></td>

          </tr>
         @endforeach
        </tbody>
      </table>
</body>
</html>
