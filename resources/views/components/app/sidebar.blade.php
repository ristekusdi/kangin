<!-- Desktop -->
<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">{{ env('APP_NAME', 'Laravel') }}</a>
        <ul class="mt-6">
            @php
                $menus = config('menu.developer.menus')
            @endphp
            @foreach ($menus as $menu)
                <li class="relative px-6 py-3">
                    @if (isset($menu['sub_icon']))
                    <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" @click="togglePagesMenu" aria-haspopup="true">
                        <span class="inline-flex items-center">
                            {!! $menu['icon'] !!}
                            <span class="ml-4">{{ ucwords($menu['name']) }}</span>
                        </span>
                        {!! $menu['sub_icon'] !!}
                    </button>
                    <template x-if="isPagesMenuOpen">
                        <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0"
                            x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300"
                            x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                            class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                        aria-label="submenu">
                            @foreach($menu['menus'] as $sub_menu)
                            <li class="sub-nav-link">
                                <a class="w-full" href="#">{{ ucwords($sub_menu['name']) }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </template>
                    @else
                    <a href="#" class="nav-link">
                        {!! $menu['icon'] !!}
                        <span class="ml-4">{{ ucwords($menu['name']) }}</span>
                    </a>
                    @endif
                </li>
            @endforeach
        </ul>
        <div class="px-6 my-6">
            <button class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-purple-300">
                Create account
                <span class="ml-2" aria-hidden="true">+</span>
            </button>
        </div>
</div>
</aside>

<!-- Backdrop -->
<div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0"
x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>

<!-- Mobile sidebar -->
<aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
@keydown.escape="closeSideMenu">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
            {{ env('APP_NAME', 'Laravel') }}
        </a>
        <ul class="mt-6">
            @php
                $menus = config('menu.developer.menus');
            @endphp
            @foreach ($menus as $menu)
                <li class="relative px-6 py-3">
                    @if (isset($menu['sub_icon']))
                    <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" @click="togglePagesMenu" aria-haspopup="true">
                        <span class="inline-flex items-center">
                            {!! $menu['icon'] !!}
                            <span class="ml-4">{{ ucwords($menu['name']) }}</span>
                        </span>
                        {!! $menu['sub_icon'] !!}
                    </button>
                    <template x-if="isPagesMenuOpen">
                        <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0"
                            x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300"
                            x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                            class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                        aria-label="submenu">
                            @foreach($menu['menus'] as $sub_menu)
                            <li class="sub-nav-link">
                                <a class="w-full" href="#">{{ ucwords($sub_menu['name']) }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </template>
                    @else
                    {!! 
                        ($menu['route'] != '#') 
                            ? (request()->routeIs($menu['route']) 
                            ? '<span class="span-link-active" aria-hidden="true"></span>' 
                            : '') 
                            : ''
                    !!}
                    <a href="{{ ($menu['route'] != '#') ? route($menu['route']) : '#' }}" class="{{ ($menu['route'] != '#') ? (request()->routeIs($menu['route'].'*') ? 'nav-link-active' : 'nav-link') : 'nav-link' }}">
                        {!! $menu['icon'] !!}
                        <span class="ml-4">{{ ucwords($menu['name']) }}</span>
                    </a>
                    @endif
                </li>
            @endforeach
        </ul>
        <div class="px-6 my-6">
            <button class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-purple-300">
                Create account
                <span class="ml-2" aria-hidden="true">+</span>
            </button>
        </div>
    </div>
</aside>