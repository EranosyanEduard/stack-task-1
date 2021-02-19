<ul class="list__items">
    @foreach($items as $item)
        @include('blocks.list.list-item', ['item' => $item])
    @endforeach
</ul>