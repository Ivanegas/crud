@extends('layouts.app')

@section('template_title')
    {{ $platform->name ?? __('Show') . " " . __('Platform') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Platform</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('platforms.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $platform->name }}
                        </div>
                        <div class="form-group">
                            <strong>Activeaccounts:</strong>
                            {{ $platform->activeAccounts }}
                        </div>
                        <div class="form-group">
                            <strong>Inactiveaccounts:</strong>
                            {{ $platform->inactiveAccounts }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
