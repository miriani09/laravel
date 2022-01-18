@extends('auth.dashboard')

@section('content')
    <main class="signup-form container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card" style="margin-top: 100px">
                    <h3 class="card-header text-center">რედაქტირება</h3>
                    <div class="card-body">
                        <form action="{{ route('update.custom',['id'=>$user->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <input type="text" placeholder="სახელი" value="{{ $user->fname }}" id="name" class="form-control" name="fname"
                                       required autofocus>
                                @if ($errors->has('fname'))
                                    <span class="text-danger">{{ $errors->first('fname') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="გვარი" value="{{ $user->lname }}" id="lname" class="form-control" name="lname"
                                       required autofocus>
                                @if ($errors->has('lname'))
                                    <span class="text-danger">{{ $errors->first($lname) }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="ელ-მეილი" value="{{ $user->mail }}" id="mail" class="form-control" name="mail"
                                       required autofocus>
                                @if ($errors->has('mail'))
                                    <span class="text-danger">{{ $errors->first('mail') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="მობ.ნომერი" value="{{ $user->phone }}" id="phone" class="form-control" name="phone"
                                       required autofocus>
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>

                            <div class=" form-group mb-3" >
                                <button type="submit" class="btn btn-dark btn-block">რედაქტირება</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
