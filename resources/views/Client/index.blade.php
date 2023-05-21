<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr> name </tr>
        <tr> phone </tr>
        <tr>  email</tr>
        @foreach($clinets as $client)
        <td>{$client.name} </td>
        <td>{$client.phone} </td>
        <td>{$client.email} </td>
        @endforeach

    </table>
</body>
</html>