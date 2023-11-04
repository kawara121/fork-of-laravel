@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>ToDoリスト</h1>

        <form method="POST" action="/todos">
            @csrf
            <div class="form-group">
                <input type="text" name="title" placeholder="新しいToDoを追加" class="form-control">
                <button type="submit" class="btn btn-primary">追加</button>
            </div>
        </form>

        <ul class="todo-list">
            @foreach ($todos as $todo)
                <li class="todo-item">
                    <label class="todo-label">
                        <input type="checkbox" {{ $todo->completed ? 'checked' : '' }} onchange="this.form.submit()">
                        {{ $todo->title }}
                    </label>
                    <form method="POST" action="/todos/{{ $todo->id }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger delete-button">削除</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
