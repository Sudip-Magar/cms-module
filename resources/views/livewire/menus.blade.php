<div class="w-64 h-screen bg-base-200 p-4">
    <ul class="menu bg-base-200 w-full text-base-content">
        @foreach($menus as $menu)
            @if(isset($menu['children']))
                <li class="menu-title">
                    <span><x-icon name="{{ $menu['icon'] }}"/> {{ $menu['title'] }}</span>
                </li>
               
            @else
                <li>
                    <a href="{{ route($menu['route']) }}" class="{{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                        <x-icon name="{{ $menu['icon'] }}" /> {{ $menu['title'] }}
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</div>
