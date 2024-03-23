<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit an account</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($error->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

        @endif
    </div>
    <form method="post" action="{{route('account.update', ['account'=> $account])}}">
        @csrf
        @method('put')

        <div>
            <label>Name</label> <input type="text" name="name" placeholder="Name" value="{{$account->name}}"/>
        </div>

        <div>
            <label>Qty</label> <input type="text" name="qty" placeholder="Qty" value="{{$account->qty}}"/></div>

        <div>
            <label>Price</label> <input type="text" name="price" placeholder="Price" value="{{$account->price}}"/>
        </div>

        <div>
            <label>Description</label> <input type="text" name="description" placeholder="Description" value="{{$account->description}}"/>
        </div>

        <div>
            <input type="submit" value="Update" >
        </div>
    </form>
</body>
</html>
