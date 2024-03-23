<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Account</h1>
        <div>
            <div>
                @if (session()->has('success'))
                    <div>{{ session('success') }}</div>
                @endif
            </div>
            <div>
                <div>
                    <a href="{{route('account.create')}}">Create a account</a>
                </div>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Hming</th>
                    <th>Kum</th>
                    <th>Gender</th>
                    <th>Veng</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($accounts as $account)
                <tr>
                    <td>{{$account->id}}</td>
                    <td>{{$account->hming}}</td>
                    <td>{{$account->kum}}</td>
                    <td>{{$account->gender}}</td>
                    <td>{{$account->veng}}</td>
                    <td>
                        <a href="{{route('account.edit', ['account' => $account])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('account.destroy',[ 'account'=> $account ])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>

                @endforeach
            </table>
        </div>
        </div>
</body>
</html>
