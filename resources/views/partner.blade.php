<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<main class="partners-container">
    @foreach($partners as $partner)
        <div class="partner-card">
            <div class="partner-header">
                <div>
                    <div>
                        <span>{{ $partner->partnerType->name }}</span>
                        <span>|</span>
                        <span>{{ $partner->name }}</span>
                    </div>
                    <div>
                        <p>Директор: {{ $partner->director }}</p>
                        <p>+7 {{ $partner->tell }}</p>
                        <p>Рейтинг: {{ $partner->raiting }}</p>
                    </div>
                </div>
                <div class="coefficient">
                    %
                </div>
            </div>
        </div>
    @endforeach
</main>

<style>
    .coefficient{
        padding-right: 50px;
    }
    .partners-container {
        display: flex;
        flex-direction: column;
        padding: 20px;
        gap: 20px;
    }

    .partner-card {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 15px;
    }

    .partner-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }
</style>
