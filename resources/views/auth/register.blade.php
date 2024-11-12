@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- service number -->
                        <div class="row mb-3">
                            <label for="svc_no" class="col-md-4 col-form-label text-md-end">{{ __('Service _Number/National id') }}</label>

                            <div class="col-md-6">
                                <input id="svc_no" type="number" class="form-control @error('svc_no') is-invalid @enderror" name="svc_no" value="{{ old('svc_no') }}" required autocomplete="svc_no" autofocus placeholder="Enter your service number" style="font-style:italic" required>

                                @error('Service _Number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- rank -->
                        <div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Level') }}</label>
                        <div class="col-md-6">

                            <select name="role" id="role" required>
                            <option value=""style="font-style:italic">--Please choose your level from list below-- </option>
                            
                                <option value="0">Developer </option>
                                <option value="1">O C</option>
                                <option value="2">si</option>
                           

                            </select>
                            @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="rank" class="col-md-4 col-form-label text-md-end">{{ __('Rank') }}</label>

                            <div class="col-md-6">

                                <select name="rank" id="rank" required>
                                <option value=""style="font-style:italic">--Please choose your rank from list below-- </option>
                                  
                                    <option value="cpl">Corporal</option>
                                    <option value="sgt">Sergeant</option>
                                    <option value="ssgt">Senior Sergeant</option>
                                    <option value="wo11">Warant Officer 11</option>
                                    <option value="Wo1">warrant officer 1</option>
                                    <option value="Capt">Captain</option>
                                    <option value="Maj">Major</option>
                                    <option value="Lt.Col">lieutenant colonel</option>
                                
                                </select>
                                    <!-- <input id="rank" type="text" class="form-control @error('rank') is-invalid @enderror" name="name" value="{{ old('rank') }}" required autocomplete="rank" autofocus> -->

                                    @error('rank')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <!-- name -->
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus  placeholder="Enter your official name" style="font-style:italic">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <!-- phone number -->
                        <div class="row mb-3">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus  placeholder="Enter phone number starting with 7" style="font-style:italic">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter registerd email address" style="font-style:italic">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password of atleast 8 characters" style="font-style:italic">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter the same password as above" style="font-style:italic">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
