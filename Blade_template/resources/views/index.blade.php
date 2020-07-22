<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Tasks</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Tasks List
        </div>

        @if (!isset($tasks))
            <h5 class="text-primary"> Dữ liệu không tồn tại</h5>
        @else
        <table class="table table-bordered">
            <thead>
                <tr>
                   <th scope="col">#</th>
                   <th scope="col">Task title</th>
                   <th scope="col">Content</th>
                   <th scope="col">Created</th>
                   <th scope="col">Dua date</th>
                </tr>
            </thead>
            <tbody>
                @if (count($tasks) == 0)
                <tr>
                    <td colspan="5">
                        <h5 class="text-primary">Hiện tại chưa có task nào được tạo</h5>
                    </td>
                </tr>
                @else
                @forelse ($tasks as $key => $item)
                <tr>
                    <td scope="row">{{ ++$key }}</td>
                    <td>{{ $item->Tasktitle }}</td>
                    <td>{{ $item->Content }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                <td><img style="width:150px ;" src="/storage/images/{{$item->image}}" alt="erorr"></td>
                <td><a href="{{ route('task.edit', $item->id) }}">Sửa</a></td>
                <td><a href="{{ route('task.destroy', $item->id) }}">Xóa</a></td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">
                        <h5 class="text-primary">Hiện tại chưa có task nào được tạo</h5>
                    </td>
                </tr>
                @endforelse
                @endif
            </tbody>
        </table>
        @endif
        <div class="links">
            <a href="{{ route('task.create') }}">ADD NEW TASK</a>
        </div>

    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>
