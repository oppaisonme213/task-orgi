@extends('layout')

@section('main-content')
    <div>
        <div class="float-start">
            <h4 class="pb-3">My Tasks</h4>
        </div>
        <div class="float-end">
            <a href="{{ route('task.create') }}" class="btn btn-info">
                Create Task
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
    

    <div class="card">
        <div class="card-header">
            First Task
            <span class="badge rounded-pill bg-warning text-dark">time</span>
        </div>
        <div class="card-body">
            <div class="card-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, vitae molestiae. Veritatis cumque saepe illum ullam eius dignissimos hic inventore asperiores! 
                <br>
                <span class="badge rounded-pill bg-info text-dark">Todo</span>
                <small>Last Updated : </small>
            </div>
        </div>
    </div>
@endsection