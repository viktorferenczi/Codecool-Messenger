@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center font-weight-bold pb-4 h4">
        Add codecoolers to your friends to chat with them directly:
    </div>
    <div class="row pt-5">
        @foreach($users as $user)
            <div class="col-4 pb-5">
                <div class="card">
                    <div class="card-header">
                        {{$user->name}}
                        <img class="float-right" style="width: 40px; height: 20px" src="https://banner2.cleanpng.com/20180511/qze/kisspng-plus-and-minus-signs-computer-icons-clip-art-5af5a051563f07.7254595615260468013533.jpg" alt="add_friend">
                    </div>
                    <div class="card-body">
                        {{$user->email}}<br>
                        <i>{{$user->role}}, {{$user->office}}</i>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-12 d-flex justify-content-center">
            {{$users->links()}}
        </div>
    </div>
</div>
@endsection

