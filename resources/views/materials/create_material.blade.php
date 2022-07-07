@extends('admin')
@section('content')
    <div class="container">
        <h1 class="my-md-5 my-4">Добавить материал</h1>
        <div class="row">
            <div class="col-lg-5 col-md-8">
                <form action="{{route('create_m')}}" method="POST" class="needs-validation">
                    @csrf
                    <div class="form-floating mb-3">
                        <select name="type_id" class="form-select" id="floatingSelectType" required>
                            <option value="" selected>Выберите тип</option>
                            <option value="1">Книга</option>
                            <option value="2">Статья</option>
                            <option value="3">Видео</option>
                            <option value="4">Сайт/Блог</option>
                            <option value="5">Подборка</option>
                            <option value="6">Ключевые идеи книги</option>
                        </select>
                        <label for="floatingSelectType">Тип</label>
                        <div class="invalid-feedback">
                            Пожалуйста, выберите значение
                        </div>
                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="category_id" id="floatingSelectCategory" required>
                            <option value="" selected>Выберите категорию</option>
                            <option value="1">Деловые/Найм</option>
                            <option value="2">Деловые/Реклама</option>
                            <option value="3">Деловые/Управление бизнесом</option>
                            <option value="4">Деловые/Управление людьми</option>
                            <option value="5">Деловые/Управление проектами</option>
                            <option value="6">Детские/Воспитание</option>
                        </select>
                        <label for="floatingSelectCategory">Категория</label>
                        <div class="invalid-feedback">
                            Пожалуйста, выберите значение
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" required placeholder="Напишите название" id="floatingName">
                        <label for="floatingName">Название</label>
                        <div class="invalid-feedback">
                            Пожалуйста, заполните поле
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="author" required class="form-control" placeholder="Напишите авторов" id="floatingAuthor">
                        <label for="floatingAuthor">Авторы</label>
                        <div class="invalid-feedback">
                            Пожалуйста, заполните поле
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                <textarea class="form-control" name="description" required placeholder="Напишите краткое описание" id="floatingDescription"
                            style="height: 100px"></textarea>
                        <label for="floatingDescription">Описание</label>
                        <div class="invalid-feedback">
                            Пожалуйста, заполните поле
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Добавить</button>
                </form>
            </div>
        </div>
    </div>
@stop