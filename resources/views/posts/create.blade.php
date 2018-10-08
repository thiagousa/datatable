<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a Post</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    
</head>
<body>

<div class="col-md-6">

<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Create a Post</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="{{ route('posts.store') }}" method="post" id="form-cadastro-categoria">
            {{ csrf_field() }}

       <div class="box-body">
          
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" id="title" name='title' value="{{old('title')}}">
          @if($errors->has('title'))
          <span class="help-block alert alert-danger">
            <strong>{{$errors->first('title')}}</strong>
          </span>
        @endif
        </div>
        <div class="form-group">

          <label for="tax">Body</label>
          <textarea class="form-control" id="body" name='body'>{{old('body')}}</textarea>
          @if($errors->has('body'))
          <span class="help-block alert alert-danger">
            <strong>{{$errors->first('body')}}</strong>
          </span>
        @endif
        </div>
        
        <div class="form-group">
            <label>Author*</label>
            <select class="form-control" name='user_id'>
              @foreach ($users as $user)
                  <option value='{{$user->id}}'>{{$user->name}}</option>
              @endforeach
            </select>
          </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </form>
  </div>
</div>

</body>
</html>