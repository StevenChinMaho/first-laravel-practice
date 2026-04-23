<!DOCTYPE html>
<html>
<head lang="zh-TW">
    <meta charset="utf-8">
    {{-- @vite('resources/css/app.css') --}}
</head>
<body>
    <h1>咕嚕靈波~</h1>

    <form action="{{route("formsubmitted")}}" method="POST">
        @csrf
        <label for="fullname">Full name:</label>
        <input type="text" id="fullname" name="fullname" placeholder="Type your full name!" required>
        <br>
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email" placeholder="Type your e-mail!" required>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>