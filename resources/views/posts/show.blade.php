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
      <h3 class="box-title">Show a Post</h3>
    </div>
    <!-- /.box-header -->
        <div class="box-body">
          
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" id="title" name='title' value="{{$post->title}}" disabled>
          
        </div>
        <div class="form-group">

          <label for="tax">Body</label>
          <textarea class="form-control" id="body" name='body' disabled>{{$post->body}}</textarea>
  
        </div>
        
        <div class="form-group">
            <label>Author*</label>
            <select class="form-control" name='user_id' disabled>
              @foreach ($users as $user)
              <option value="{{ $user->id }}" {{ $post->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
              @endforeach
            </select>
          </div>
      <!-- /.box-body -->

  <a href="{{ route('posts.index')}}" class="btn btn-primary">Voltar</a>
      </div>
    </form>
  </div>
</div>

</body>
</html>