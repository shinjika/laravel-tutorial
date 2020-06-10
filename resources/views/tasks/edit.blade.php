@extends('layouts.app')
@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h3>{{ $task->name }}の編集</h3>
        <hr />
      </div>
      <div class="col-md-6">
        <form action="{{ route('tasks.update', $task) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('put')
          @include('tasks._form')
        </form>
      </div>
    </div>
  </div>
@endsection
