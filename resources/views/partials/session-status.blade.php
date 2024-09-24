@if (session('status'))
    <div class="active mb-4 text-sm text-white bg-green-700  rounded-lg p-4" role="alert">
        {{ session('status') }}
    </div>
@endif
