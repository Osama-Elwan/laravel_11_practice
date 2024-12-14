<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <div>
        @foreach ($users as $user)
            <h4>{{ $user->name }}</h4>
            <p>Address : {{ $user->address->country }}</p>
            <hr>
        @endforeach
    </div>
    <br>
    <hr>
    <div>
        @foreach ($addresses as $address)
            <h4>{{ $address->country }}</h4>
            <p>User : {{ $address->user->name  ." - ". $address->user->email   }}</p>
            <hr>
        @endforeach
    </div> --}}
    <div>
        @foreach ($users as $user)
            <h4>{{ $user->name }}</h4>
            @foreach ($user->addresses as  $userAddress)
                <p>Address : {{ $userAddress->country }}</p>
            @endforeach
            <hr>
        @endforeach
    </div>
    <br>
    <hr>
    {{-- <div>
        @foreach ($addresses as $address)
            <h4>{{ $address->country }}</h4>
            <p>User : {{ $address->users->name  ." - ". $address->users->email   }}</p>
            <hr>
        @endforeach
    </div> --}}
</body>
</html>
