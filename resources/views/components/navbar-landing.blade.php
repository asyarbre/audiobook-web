<nav class="hidden lg:block py-3 px-4 bg-base-200">
    <div class="hidden lg:block container mx-auto max-w-6xl">
        <div class="flex items-center justify-between">
            <img src="{{ url("images/logo-audiobook.png")}}" class="h-8 w-8" />
            <div class="font-semibold font-Poppins order-2 hidden lg:block">
                <ul class="flex gap-16">
                    <li>
                        <x-nav-link href="{{ route('landing.index') }}" :active="request()->routeIs('landing.index')" class="hover:text-secondary">
                            Home
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link href="{{ route('landing.search') }}" :active="request()->routeIs('landing.search')" class="hover:text-secondary">
                            Search
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link href="{{ route('category.index') }}" :active="request()->routeIs('category.index')" class="hover:text-secondary">
                            Category
                        </x-nav-link>
                    </li>
                </ul>
            </div>
        </div>
</nav>


<div class="lg:hidden btm-nav">
    <x-nav-link href="{{ route('landing.index') }}" :active="request()->routeIs('landing.index')">
        <x-fas-house class="h-5 w-5" />
        <span class="btm-nav-label">Home</span>
    </x-nav-link>

    <x-nav-link href="{{ route('landing.search') }}" :active="request()->routeIs('landing.search')">
        <x-fas-magnifying-glass class="h-5 w-5" />
        <span class="btm-nav-label">Search</span>
    </x-nav-link>

    <x-nav-link href="{{ route('category.index') }}" :active="request()->routeIs('category.index')">
        <x-fas-book class="h-5 w-5" />
        <span class="btm-nav-label">Kategori</span>
    </x-nav-link>
</div>
