@extends('layouts.dashboard')

@section('content')
    
    @component('components.dashboard.section', [ 'title' => 'Profile' ])
        <div class="row">
            <div class="col-md-6">
                @component('components.dashboard.card', [ 'title' => 'Image de Profile' ])
                    
                @endcomponent
            </div> <!-- .col -->
            
            
            <div class="col-md-6">
                @component('components.dashboard.card', [ 'title' => 'Mot de Pass' ])
                    <form method="POST" action="{{ URL::to('/backoffice/password') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="password">Mot de pass</label>
                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" aria-describedby="password input">
                            
                            @if ($errors->has('password'))
                                <small class="text-danger">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirmation</label>
                            <input type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" aria-describedby="password confirmation input">
                            
                            @if ($errors->has('password_confirmation'))
                                <small class="text-danger">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </small>
                            @endif
                        </div>
                      
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Modifier le Mot de Pass
                            </button>
                        </div>
                    </form>
                @endcomponent
            </div> <!-- .col -->


            <div class="col-md-12 mt-4">
                @component('components.dashboard.card', [ 'title' => 'Information Profile' ])
                    <form method="POST" action="{{ route('profile') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="firstName">Nom</label>
                            <input type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" aria-describedby="First Name input" value="{{ old('firstName', $user->first_name) }}">
                            
                            @if ($errors->has('firstName'))
                                <small class="text-danger">
                                    <strong>{{ $errors->first('firstName') }}</strong>
                                </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="lastName">Prenom</label>
                            <input type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" aria-describedby="lastName input" value="{{ old('lastName', $user->last_name) }}">
                            
                            @if ($errors->has('lastName'))
                                <small class="text-danger">
                                    <strong>{{ $errors->first('lastName') }}</strong>
                                </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" aria-describedby="email input" placeholder="example@ensa.com" value="{{ old('email', $user->email) }}">
                            
                            @if ($errors->has('email'))
                                <small class="text-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="bio">Biographie</label>
                            <textarea class="form-control" name="bio" rows="10">{{ old('bio', $user->bio) }}</textarea>
                            
                            @if ($errors->has('bio'))
                                <small class="text-danger">
                                    <strong>{{ $errors->first('bio') }}</strong>
                                </small>
                            @endif
                        </div>
                      
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Modifier
                            </button>
                        </div>
                    </form>
                @endcomponent
            </div> <!-- .col -->

        </div> <!-- .row -->
    @endcomponent

@stop