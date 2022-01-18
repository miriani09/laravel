@extends('auth.dashboard')

@section('content')
    <main class="signup-form container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card" style="margin-top: 100px">
                        <h3 class="card-header text-center">რეგისტრაცია</h3>
                        <div class="card-body">

                            <form action="{{ route('register.custom') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="სახელი" id="name" class="form-control" name="fname"
                                           required autofocus>
                                    @if ($errors->has('fname'))
                                        <span class="text-danger">{{ $errors->first('fname') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <input type="text" placeholder="გვარი" id="lname" class="form-control" name="lname"
                                           required autofocus>
                                    @if ($errors->has('lname'))
                                        <span class="text-danger">{{ $errors->first('lname') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <input type="password" placeholder="პაროლი" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <input type="text" placeholder="ელ-მეილი" id="mail" class="form-control" name="mail"
                                           required autofocus>
                                    @if ($errors->has('mail'))
                                        <span class="text-danger">{{ $errors->first('mail') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <input type="text" placeholder="მობ.ნომერი" id="phone" class="form-control" name="phone"
                                           required autofocus>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label style="color: black"><input type="checkbox" name="remember"> დამახსოვრება</label>
                                    </div>
                                </div>

                                <div class=" form-group mb-3" >
                                    <button type="submit" class="btn btn-dark btn-block">რეგისტრაცია</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
