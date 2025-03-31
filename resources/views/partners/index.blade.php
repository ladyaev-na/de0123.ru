@extends('layouts.layout')

@section('title','Список партнеров')

@section('content')
    <a href="{{ route('partners.create') }}" class="btn">
        Создать партнера
    </a>


    @foreach($partners as $partner)

        <a href="/partners/edit/{{$partner->id}}">
            <div class="flex border">
                <div class="div85">
                    <div class="bigSize">{{ $partner->partnerType->name }} | {{ $partner->name }}</div>
                    <div>{{ $partner->director }}</div>
                    <div>+7 {{ $partner->tell }}</div>
                    <div>Рейтинг: {{ $partner->raiting }}</div>
                </div>
                <div class="div15 bigSize">
                    {{ $partner->discount }}%
                </div>
            </div>
        </a>

    @endforeach

@endsection
