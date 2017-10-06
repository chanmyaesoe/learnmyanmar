<a href="{{$deleteurl}}/{{$id}}/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
<form action="{{$deleteurl}}/{{$id}}" method="POST" style="display: inline" onclick="return confirm('Are you sure want to Delete?');">
    <input type="hidden" name="_method" value="delete">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn btn-xs btn-danger"> <i class="glyphicon glyphicon-trash"></i> Delete</button>
</form>