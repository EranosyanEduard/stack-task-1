<li class="list__item">
    {{$item->title}}
    @isset($item->isFolder)
        @include('blocks.list.unordered-list', ['items' => $item->children])
    @endisset
</li>