<div class="form-group">
  <label>ステータス</label>
  <select name="status" class="form-control">
    @foreach (\App\Enums\Status::getInstances() as $status)
      <option value="{{ $status->value }}" {{ $task->$status && $status->value === old('$status', $task->$status->value) ? 'selected' : '' }}>{{ $status->description }}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label>名前</label>
  <input type="text" name="name" class="form-control" value="{{ old('name', $task->name) }}" />
</div>
<div class="form-group">
  <label>期限</label>
  <input type="text" name="deadline" class="form-control" value="{{ old('deadline', $task->deadline) }}" />
</div>
<div class="form-group">
  <button class="btn btn-primary">保存</button>
</div>
