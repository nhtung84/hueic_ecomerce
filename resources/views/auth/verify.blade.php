@extends('layouts.front.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('auth.Verify Your Email Address')</div>

                <div class="card-body">

                    @include('includes.status')

                    @lang('auth.Before proceeding, please check your email for a verification link.')
                    @lang('If you did not receive the email'), <a href="{{ route('verification.resend') }}">@lang('click here to request another')</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
