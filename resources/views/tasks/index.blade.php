@extends('layouts.app')
@section('content')
  <h3>タスク一覧</h3>
  <hr />
  @if (count($tasks) > 0)
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>タスク名</th>
          <th>ステータス</th>
          <th>期限</th>
          <th>更新日時</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tasks as $task)
          <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->name }}</a></td>
            <td>{{ $task->status}}</td>   ->description
            <td>{{ $task->deadline}}</td>
            <td><a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">編集</a>
              <form action="{{ route('tasks.destroy', $task->id) }}" method="post" class="d-inline ml-3">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger" onclick="return confirm('本当に削除してもよろしいですか？');">削除</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
<a href="{{ route('tasks.create') }}" class="btn btn-primary">新規登録</a>
@endsection
