@extends('layouts.layout')

@section('title','Список партнеров')

@section('content')

    @foreach($partners as $partner)

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

    @endforeach

@endsection
