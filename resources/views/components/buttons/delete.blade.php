<form method="POST" action="{{ $action }}">
    @csrf
    <button
        type="submit"
        class="px-1 bg-red-400 hover:bg-red-500 text-white"
    >
        {{ $title }}
    </button>
</form>
