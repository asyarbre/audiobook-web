<div class="navbar bg-base-100">
    <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl">Dashboard</a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-1 z-10">
            <li>
                <details>
                    <summary>
                        {{ Auth::user()->name }}
                    </summary>
                    <ul class="p-2 bg-base-100">
                        <li><a href="{{ route('auth.logout')}}">Log Out</a></li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
</div>
