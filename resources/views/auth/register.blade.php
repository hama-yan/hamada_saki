<x-logout-layout>


{!! Form::open(['url' => route('register')]) !!}

<h2>新規ユーザー登録</h2>

{{ Form::label('username', 'ユーザー名') }}
{{ Form::text('username', old('username'), ['class' => 'input', 'required']) }}

{{ Form::label('email', 'メールアドレス') }}
{{ Form::email('email', old('email'), ['class' => 'input', 'required']) }}

{{ Form::label('password', 'パスワード') }}
{{ Form::password('password', ['class' => 'input', 'required']) }}

{{ Form::label('password_confirmation', 'パスワード確認') }}
{{ Form::password('password_confirmation', ['class' => 'input', 'required']) }}

{{ Form::submit('登録') }}

<p><a href="{{ route('login') }}">ログイン画面へ戻る</a></p>

{!! Form::close() !!}


</x-logout-layout>
