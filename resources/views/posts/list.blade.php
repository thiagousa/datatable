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
<div class="col-md-6">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Posts</h3>
            <div class="box-title">
               
              </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <tbody><tr>
                    <th style="width: 10px">ID</th>
                    <th>Title</th>
                    <th style="width: 30px">Editar</th>
                    <th style="width: 30px">Delete</th>
                    </tr>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><a href="{{ route('posts.show', ['id' => $post->id]) }}" >{{$post->title}}</a></td>
                    <td><a href="{{ route('posts.edit', ['id' => $post->id]) }}" > Edit </a></td>
                    <td><a href = '{{ route('posts.delete', ['id' => $post->id]) }}'  >Delete</a></td>
                </tr>
                @endforeach
                </tbody></table>
        </div>
                
         <div class="box-footer clearfix">
           <a href="{{ route('posts.create') }}"><button type="submit" class="btn btn-primary">Add New Post</button></a>
        </div>
    </body>
    </html>