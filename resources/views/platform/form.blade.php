<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $platform->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('activeAccounts') }}
            {{ Form::text('activeAccounts', $platform->activeAccounts, ['class' => 'form-control' . ($errors->has('activeAccounts') ? ' is-invalid' : ''), 'placeholder' => 'Activeaccounts']) }}
            {!! $errors->first('activeAccounts', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inactiveAccounts') }}
            {{ Form::text('inactiveAccounts', $platform->inactiveAccounts, ['class' => 'form-control' . ($errors->has('inactiveAccounts') ? ' is-invalid' : ''), 'placeholder' => 'Inactiveaccounts']) }}
            {!! $errors->first('inactiveAccounts', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>