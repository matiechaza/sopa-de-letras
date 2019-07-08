@if( session()->has('info') )
    <p class="warning">{{ session('info') }}</p>
@endif
