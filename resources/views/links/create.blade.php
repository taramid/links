<x-layout title="Create a shorter link for">

    <form method="POST" action="{{ route('links.store') }}">

        @csrf

        <table>
            <tr>
                <td for="url">URL</td>
                <td>
                    <input
                        type="text"
                        id="url"
                        name="url"
                        class="border w-80"
                    >
            </tr>

            <tr>
                <td for="hook">short (optional)</td>
                <td>
                    <input
                        type="text"
                        id="hook"
                        name="hook"
                        class="border w-80"
                    >
            </tr>

            <tr>
                <td></td>
                <td class="text-right">
                    <button
                        type="submit"
                        class="bg-green-400 hover:bg-green-500 mt-4 px-1"
                    >
                        Create
                    </button>
            </tr>

        </table>
    </form>

    <br>
    <x-buttons.back href="{{ route('links.index') }}"/>

</x-layout>
