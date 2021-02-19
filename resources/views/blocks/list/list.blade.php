@extends('pages.homepage')

@section('list')
    <section class="list">
        @isset($items)
            @if(is_array($items) && count($items))
                @include('blocks.list.unordered-list', ['items' => $items])
            @else
                <p>Файл пуст или его контент не соответствует требованиям шаблона!</p>
            @endif
        @endisset
    </section>
@endsection