<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
           border-collapse: collapse ;
        }
        table ,td  ,th {
            border: 1px solid black ;
        }

    </style>
</head>
<body>
    <table>
        <tr>
            <th>#</th>
            <th>tên</th>
            <th>thể loại</th>
            <th>created</th>
            <th>Dua date</th>
        </tr>
            @forelse ( $data as $key => $item)
            <tr>
                <td>{{ ++$key}}</td>
                <td>{{ $item->name}}</td>
                <td>{{ $item->categori}}</td>
                <td>{{  $item->created_at}}</td>
                <td>{{  $item->updated_at}}</td>
            </tr>
            @empty
                <tr>
                    <td>
                        <h4>
                            không tồn tại dánh sách Categories
                        </h4>
                    </td>
                </tr>
            @endforelse

    </table>
</body>
</html>
