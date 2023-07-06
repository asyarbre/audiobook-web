<div class="w-full sm:w-1/6">
    <ul class="menu bg-base-200 sm:h-screen rounded-box">
        <li><a>
                <x-go-home-16 class="h-5 w-5" />
                Item 2
            </a></li>
        <li>
            <details open>
                <summary>
                    <x-go-home-16 class="h-5 w-5" />Parent
                </summary>
                <ul>
                    <li><a>level 2 item 1</a></li>
                    <li><a>level 2 item 2</a></li>
                </ul>
            </details>
        </li>
        <li><a>
                <x-go-home-16 class="h-5 w-5" />Item 3
            </a></li>
    </ul>
</div>
