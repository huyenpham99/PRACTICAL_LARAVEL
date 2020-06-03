<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practical - Library</title>
    <style>* {
            box-sizing: border-box;
        }

        /* Style the search field */
        form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: #f1f1f1;
        }

        /* Style the submit button */
        form.example button {
            float: left;
            width: 20%;
            padding: 10px;
            background: #2196F3;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none; /* Prevent double borders */
            cursor: pointer;
        }

        form.example button:hover {
            background: #0b7dda;
        }

        /* Clear floats */
        form.example::after {
            content: "";
            clear: both;
            display: table;
        }</style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Load icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="card">
    <div class="card-body table-responsive p-0">
        <form class="example" action="{{url("/search")}}" style="margin:auto;max-width:200px;  margin-left: 1150px">
            <input type="text" placeholder="Search.." name="search2">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>

        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>ISBN</th>
                <th>Public Year</th>
                <th>Available</th>
                <th>Author ID</th>
                <th>Create At</th>
                <th>Update At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books  as $book)
                <tr>
                    <td>{{$book->__get("id")}}</td>
                    <td>{{$book->__get("title")}}</td>
                    <td>{{$book->__get("ISBN")}}</td>
                    <td>{{$book->__get("pub_year")}}</td>
                    <td>{{$book->__get("available")}}</td>
                    <td>{{$book->__get("authorid")}}</td>
                    <td>{{$book->__get("created_at")}}</td>
                    <td>{{$book->__get("updated_at")}}</td>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
