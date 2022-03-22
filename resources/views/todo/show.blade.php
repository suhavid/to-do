@extends('todo.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Tampilkan Todo </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('todo.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $todo->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                {{ $todo->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                @if($todo->status =='1')         
                 <button type="button" class="btn btn-sm btn-warning">Waiting</button>   
                @elseif($todo->status =='2')         
                 <button type="button" class="btn btn-sm btn-primary">On Process</button>
                @elseif($todo->status =='3')
                 <button type="button" class="btn btn-sm btn-success">Done</button>      
                @endif
            </div>
        </div>
    </div>
<div class="container">
@endsection