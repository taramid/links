<x-layout title="Links">

    <div>
        <a
            href="{{ route('links.create') }}"
            class="bg-green-400 hover:bg-green-500 my-2 px-1"
        >
            CREATE
        </a>
    </div>

    @if(empty($links))

        <p>there's no any link yet</p>

    @else
        <table>
            @foreach($links->reverse() as $link)
                <tr>
                    <td class="mx-1">{{ $link->hook }}</td>
                    <td class="mx-1">
                        <x-url :href="$link->url"/>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif

</x-layout>
