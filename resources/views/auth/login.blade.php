<x-logout-layout>

{!! Form::open(['url' => route('login')]) !!}

<p>AtlasSNSへようこそ</p>

{{ Form::label('email', 'メールアドレス') }}
{{ Form::email('email', old('email'), ['class' => 'input', 'required']) }}

{{ Form::label('password', 'パスワード') }}
{{ Form::password('password', ['class' => 'input', 'required']) }}

{{ Form::submit('ログイン') }}

<p><a href="{{ route('register') }}">新規ユーザーの方はこちら</a></p>

<form method="POST" action="{{ route('logout') }}">
@csrf
<button type="submit">ログアウト</button>
</form>


{!! Form::close() !!}

</x-logout-layout>
