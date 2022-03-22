@extends('todo.layout')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>To do List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('todo.create') }}"> Input Data</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Detail</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($todo as $bio)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $bio->title }}</td>
            <td>{{ $bio->detail }}</td>
            <td>
                @if($bio->status =='Waiting')         
                 <button type="button" class="btn btn-sm btn-warning">Waiting</button>   
                @elseif($bio->status =='On Process')         
                 <button type="button" class="btn btn-sm btn-primary">On Process</button>
                @elseif($bio->status =='Done')
                 <button type="button" class="btn btn-sm btn-success">Done</button>      
                @endif
            </td>
            <td>
                <form action="{{ route('todo.destroy',$bio->id) }}" method="POST">
   
                    <a class="btn btn-sm btn-info" href="{{ route('todo.show',$bio->id) }}">View</a>
    
                    <a class="btn btn-sm btn-primary" href="{{ route('todo.edit',$bio->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
  
    {!! $todo->links() !!}
      
@endsection