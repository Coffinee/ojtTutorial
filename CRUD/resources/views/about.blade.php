<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div name="Container">
        <header>
        <h1>PHP NATIVE TUTORIAL</h1>
        <a id="create" class="fa-sharp fa-solid fa-plus">  Create</a>
        </header>

        <table>
            <tr>
                <th>#</th>
                <th>First</th>
                <th>Last</th>
                <th>Occupation</th>
                <th>Action</th>

            </tr>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td><i id="edit"class="fa-solid fa-pencil">  Edit</i><i id="delete"class="fa-solid fa-delete-left">  Delete</i></td>
            </tr>

        </table>
    </div>

</body>
</html>
