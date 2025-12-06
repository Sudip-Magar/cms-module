<div class="w-64 h-screen bg-base-200 p-4">
   <!-- Menu Section -->
    <ul class="menu bg-base-200 w-full text-base-content flex-1">
        @foreach ($menus as $menu)
            @if(isset($menu['children']))
                <li class="menu-title">
                    <span>
                        <x-icon name="{{ $menu['icon'] }}" /> {{ $menu['title'] }}
                    </span>
                </li>
                @foreach($menu['children'] as $child)
                    <li>
                        <a href="{{ route($child['route']) }}"
                           class="{{ request()->routeIs($child['route']) ? 'active' : '' }}">
                            {{ $child['title'] }}
                        </a>
                    </li>
                @endforeach
            @else
                <li>
                    <a href="{{ route($menu['route']) }}"
                       class="{{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                        <x-icon name="{{ $menu['icon'] }}" /> {{ $menu['title'] }}
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</div>
