@extends('layouts.admin')

@section('content')
    <div class="row mb-2">
        <div class="col-sm-1">
            <h1 class="m-0">Услиги</h1>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('admin.service.create') }}" type="button" class="btn btn-block btn-info">
                Добавить услугу
        </div>
    </div>
    </div>
@endsection
