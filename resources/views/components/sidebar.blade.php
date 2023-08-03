<div class="w-full sm:w-1/6">
    <ul class="menu bg-base-200 sm:h-screen rounded-box">
        <li>
            <details open>
                <summary>Audiobook</summary>
                <ul>
                    <li>
                        <x-dash-nav-link href="{{ route('book.index') }}" :active="request()->routeIs('book.index')">
                            <x-fas-book class="h-5 w-5" />Book
                        </x-dash-nav-link>
                    </li>
                    <li>
                        <x-dash-nav-link href="{{ route('content.index') }}" :active="request()->routeIs('content.index')">
                            <x-fas-book-open class="h-5 w-5" />Content
                        </x-dash-nav-link>
                    </li>
                </ul>
            </details>
        </li>
        <li>
            <x-dash-nav-link href="{{ route('bookpdf.index') }}" :active="request()->routeIs('bookpdf.index')">
                <x-fas-book class="h-5 w-5" />Book PDF
            </x-dash-nav-link>
        </li>
    </ul>
</div>
