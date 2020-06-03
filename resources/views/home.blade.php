<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practical - Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="card">
{{--    <div class="card-header">--}}
{{--        <h3 class="card-title">Book</h3>--}}
{{--        <a href="{{url("new-book")}}" class="btn btn-outline-success ml-3">+</a>--}}
{{--        <div class="card-tools">--}}
{{--            <div class="input-group input-group-sm" style="width: 150px;">--}}
{{--                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">--}}

{{--                <div class="input-group-append">--}}
{{--                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
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
                    <td>{{$book->__get("IDBN")}}</td>
                    <td>{{$book->__get("pub_year")}}</td>
                    <td>{{$book->__get("available")}}</td>
                    <td>{{$book->__get("authorid")}}</td>
                    <td>{{$book->__get("created_at")}}</td>
                    <td>{{$book->__get("updated_at")}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
</body>
</html>
