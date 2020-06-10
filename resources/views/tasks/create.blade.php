@extends('layouts.app')
@section('content')

  <h3>新規タスク登録</h3>
  <hr />
  <div class="row">
    <div class="col-6">
      <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        @include('tasks._form')
      </form>
    </div>
  </div>

@endsection
