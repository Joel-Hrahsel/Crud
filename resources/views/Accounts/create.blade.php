<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>create a Detail</h1>
    <form method="post" action="{{route( 'church.list')}}">
        @csrf
        @method('post')
        <div>
            <label>Hming</label>
            <input type="text" name="hming" placeholder="Hming">
        </div>
        <div>
            <label>Kum </label>
            <input type="text" name="kum" placeholder="Kum">
        </div>
        <div>
            <label>Gender</label>
            <input type="text" name="gender" placeholder="Gender">
        </div>
        <div>
            <label>Veng </label>
            <input type="text" name="veng" placeholder="Veng">
        </div>
        <div>
            <input type="submit" value="Save New account" />
        </div>
    </form>
</body>
</html>
