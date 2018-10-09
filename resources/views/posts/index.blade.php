<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    
</head>
<body>
    <div class="container">
            <hr>

        <h1>Table of Posts</h1>

        <div class="box-footer clearfix">
            <a href="{{ route('posts.create') }}"><button type="submit" class="btn btn-primary">Add New Post</button></a>
         </div>
         <hr>

        <table id="posts" class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>created_at</th>
                    <th>action</th>
                          </tr>
            </thead>
        </table>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>  
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script>
    (function(){
    $('#posts').DataTable({
        processing: true,
        serverSide: true,
        ajax:{
            url: '{{ route('posts.datatables') }}',
          
        },
        columns: [
            {data: 'id'},
            {data: 'title'},
            {data: 'created_at'},
            { 
                data: 'id-post',
                render: function(data, type, row, meta) {
                    return '<a href="posts/' + data + '/show" class="btn btn-primary btn-sm">Detalhes</a> <a href="posts/' + data + '/edit" class="btn btn-warning btn-sm">Editar</a> <a href="posts/' + data + '/delete" class="btn btn-danger btn-sm">Remover</a>'
                } 
            },
        ]
    });
})();
    </script>
</body>
</html>