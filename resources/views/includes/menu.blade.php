<div class="p-3 bg-light rounded shadow-sm">
    <h5 class="border-bottom pb-2 mb-3">Menu</h5>
    <ul class="list-group">
        @foreach ($menus as $menu)
            <li class="list-group-item">
                <a 
                    href="{{ $menu->url }}" 
                    class="btn btn-primary w-100 text-start"
                    style="box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);"
                >
                    {{ $menu->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
