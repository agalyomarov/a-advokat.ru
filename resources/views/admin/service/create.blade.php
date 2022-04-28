@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-6">
            <h1>Добавить услиги</h1>
        </div>
        <div class="col-9 mt-3">
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ route('admin.service.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="textphp" class="form-control" placeholder="Заголовок" name="title">
                </div>
                <div class="form-group">
                    <textarea id="creare_service_summernote" name="content"></textarea>
                </div>
                <div class="form-group col-3">
                    <label for="price">Цена</label>
                    <input type="number" class="form-control" id="price" placeholder="Цена" name="price">
                </div>
                <div class="form-group">
                    <label>Продолжительность услуги</label>
                    <select class="form-control col-3" name="duration">
                        <option value="0">0</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="45" selected>45</option>
                        <option value="60">60</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" checked="" name="publishing">
                        <label class="form-check-label">
                            Опубликовано
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary col-2">Добавить</button>
                    <a href="" class="btn btn-success col-2 offset-7">Главная</a>
                </div>
            </form>
        </div>
    </div>
@endsection
