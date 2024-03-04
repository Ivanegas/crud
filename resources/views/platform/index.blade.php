@extends('layouts.app')

@section('template_title')
    Platform
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Platform') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('platforms.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Activeaccounts</th>
										<th>Inactiveaccounts</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($platforms as $platform)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $platform->name }}</td>
											<td>{{ $platform->activeAccounts }}</td>
											<td>{{ $platform->inactiveAccounts }}</td>

                                            <td>
                                                <form action="{{ route('platforms.destroy',$platform->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('platforms.show',$platform->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('platforms.edit',$platform->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $platforms->links() !!}
            </div>
        </div>
    </div>
@endsection
