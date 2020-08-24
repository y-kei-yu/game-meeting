@extends('layouts.admin')
@section('title', 'ゲーム集会所一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>ゲーム集会所一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\GamemeetingController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\GamemeetingController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">ゲーム名</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class= "row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">ゲーム名</th>
                                <th width="10%">人数</th>
                                <th width="25%">コメント</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $chat)
                                <tr>
                                    <th>{{ $chat->id }}</th>
                                    <td>{{ \Str::limit($chat->game_name, 100) }}</td>
                                    <td>{{ \Str::limit($chat->number, 100) }}</td>
                                    <td>{{ \Str::limit($chat->comment, 250) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection