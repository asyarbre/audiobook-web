@if ($errors->any())
    <div id="myToast" class="toast toast-top toast-end z-20">
        @foreach ($errors->all() as $error)
            <div class="alert alert-error text-white">
                <x-zondicon-close-outline class="w-5 h-5" />
                <span>{{ $error }}</span>
            </div>
        @endforeach
    </div>
@endif

@if (Session::get('success'))
    <div id="myToast" class="toast toast-top toast-end z-20">
        <div class="alert alert-success text-white">
            <x-zondicon-checkmark-outline class="w-5 h-5" />
            <span>{{ Session::get('success') }}</span>
        </div>
    </div>
@endif