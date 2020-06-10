@extends('layout')
@section('link')
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
@endsection

@section('content')
<body class="ok">
    <h2 class="cv"><i>Space News</i></h2>
    
    @auth
    <div class="block-2">
        <i>user followed</i>
        @if(auth()->user()->follows->isEmpty())
            <h5>no one is followed by you</h5>
        @else
            <ul>
                @foreach(auth()->user()->follows as $user)
                    <h5><a style=" color: white" href="/people/{{$user->name}}">{{$user->name}}</a></h5>
                @endforeach
            </ul>
        @endif
    </div>
    @endauth
    
    <div class="block-3">
        <!-- afficher chaque utilisateur inscrit-->
        <i>Users</i>
        <ul>
            @foreach($users as $user)
                <h5><a style=" color: white" href="/people/{{$user->name}}">{{$user->name}}</a></h5>
            @endforeach
        </ul>
    </div>

    <div class="block-4">
        <i>article</i>
        <h1></h1>
    </div>

</body>
@endsection