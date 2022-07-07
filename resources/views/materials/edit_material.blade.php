@extends('admin')
@section('content')
    <div class="container">
        <h1 class="my-md-5 my-4">Редактировать {{$material->name}}</h1>
        <div class="row">
            <div class="col-lg-5 col-md-8">
                <form action="{{route('edit_m',['id' =>$material->id ])}}" method="POST" class="needs-validation">
                    @csrf
                    <div class="form-floating mb-3">
                        <select name="type_id" class="form-select" id="floatingSelectType" required>
                            <option value="" selected>Выберите тип</option>
                            @foreach ($type as $item)
                                  @if ($item->id == $material->type_id)
                                      <option selected value="{{$item->id}}">{{$item->name}}</option>
                                  @else
                                      <option value="{{$item->id}}">{{$item->name}}</option>
                                  @endif
                                @endforeach
                        </select>
                        <label for="floatingSelectType">Тип</label>
                        <div class="invalid-feedback">
                            Пожалуйста, выберите значение
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="category_id" id="floatingSelectCategory" required>
                            <option value="" selected>Выберите категорию</option>
                            @foreach ($category as $item)
                                  @if ($item->id == $material->category_id)
                                      <option selected value="{{$item->id}}">{{$item->name}}</option>
                                @else
                                      <option value="{{$item->id}}">{{$item->name}}</option>
                                @endif
                            @endforeach
                        </select>
                        <label for="floatingSelectCategory">Категория</label>
                        <div class="invalid-feedback">
                            Пожалуйста, выберите значение
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" value="{{$material->name}}" name="name" class="form-control" required placeholder="Напишите название" id="floatingName">
                        <label for="floatingName">Название</label>
                        <div class="invalid-feedback">
                            Пожалуйста, заполните поле
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="author" value="{{$material->author}}" required class="form-control" placeholder="Напишите авторов" id="floatingAuthor">
                        <label for="floatingAuthor">Авторы</label>
                        <div class="invalid-feedback">
                            Пожалуйста, заполните поле
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                <textarea class="form-control" name="description" required placeholder="Напишите краткое описание" id="floatingDescription"
                            style="height: 100px">{{$material->description}}</textarea>
                        <label for="floatingDescription">Описание</label>
                        <div class="invalid-feedback">
                            Пожалуйста, заполните поле
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
@stop