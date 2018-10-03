
<table border="1">
<tr>
    <td>ID</td>
    <td>Name</td>
    <td>E-mail</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{$user->id}}</td>
<td>{{$user->name}}</td>
<td>{{$user->email}}</td>
</tr>
    
@endforeach

</table>