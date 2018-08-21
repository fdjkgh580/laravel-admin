<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="{{ $base }}">
</head>
<body>
    <form method="post" action="admin/login">
        @csrf

        @if (session('message'))
            <div>
                {{ session('message') }}
            </div>
        @endif

        <input type="email" name="email" placeholder="email" autofocus>
        <input type="password" name="password" placeholder="password">
        <button>登入</button>
    </form>
</body>
</html>