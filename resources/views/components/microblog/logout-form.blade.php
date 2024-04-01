<form action="{{ route('logout') }}" method="POST">
@csrf
    <button type="submit" class="tracking-widest hover:text-stone-500">
        {{ __('Logout') }}
    </button>
</form>
