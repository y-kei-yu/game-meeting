{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'gamemeeting'を埋め込む --}}
@section('title', '集会所作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>集会所作成</h2>
                <form action="{{ action('Admin\GamemeetingController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <lavel class="col-md-2" for="game name">ゲーム名(game name)</lavel>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="game name" value="{{ old('game name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <lavel class="col-md-2" for="number">人数(number)</lavel>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="number" value="{{ old('number') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <lavel class="col-md-2" for="comment">コメント(comment)</lavel>
                        <div class="col-md-10">
                            <textarea class="form-control" name="comment" rows="20">{{ old('comment') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="送信">
                </form>
            </div>
        </div>
    </div>
@endsection