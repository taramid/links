<x-layout title="Create a shorter link for">

    <form method="POST" action="{{ route('links.store') }}">

        @csrf

        <div>
            <label for="url">URL</label>
            <input
                type="text"
                id="url"
                name="url"
                class="border border-green-400 w-80"
            >
        </div>

        <button
            type="submit"
            class="bg-green-400 hover:bg-green-500 mt-4 px-1"
        >
            Create
        </button>

    </form>

    <br>
    <br>
    <br>
    <a href="{{ route('links.index') }}">BACK</a>

</x-layout>
