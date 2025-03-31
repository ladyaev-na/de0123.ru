@extends('layouts.layout')

@section('title','Создание партнера')

@section('content')

    <a href="{{ route('partners.index') }}" class="btn">Назад</a>

    <form action="{{ route('partners.store') }}" method="post" enctype="application/x-www-form-urlencoded">
        @csrf
        <div>

            @if($errors->any())
                <script>
                    alert("Ошибка валидации данных");
                </script>
            @endif
            <div>
                <label>Тип организации: </label>
                <select name="partner_type_id" required>
                    @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
                @error('partner_type_id')
                    <p class="warning">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div>
            <label>Название организации: </label>
            <input type="text" name="name" placeholder="Введите название организации" required>
            @error('partner_type_id')
            <p class="warning">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label>Директор организации: </label>
            <input type="text" name="director" placeholder="Введите ФИО директора" required>
            @error('director')
            <p class="warning">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label>Почта организации: </label>
            <input type="email" name="email" placeholder="Введите почту организации" required>
            @error('email')
            <p class="warning">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label>Телефон организации: </label>
            <input type="text" name="phone" placeholder="Введите телефон организации" required>
            @error('phone')
            <p class="warning">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label>Телефон организации: </label>
            <input type="text" name="address" placeholder="Введите адрес организации" required>
            @error('address')
            <p class="warning">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label>ИНН организации: </label>
            <input type="text" name="inn" placeholder="Введите ИНН организации" required>
            @error('inn')
            <p class="warning">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label>Рейтинг организации: </label>
            <input type="text" name="raiting" placeholder="Введите рейтинг организации"
                   min="1" max="10" value="1" required>
            @error('inn')
            <p class="warning">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button type="submit" class="btn">Создать партнера</button>
        </div>
    </form>
@endsection
