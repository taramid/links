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
            @foreach($links as $link)
                <tr>
                    <td class="mx-1 border-t">
                        <a href="{{ route('links.show',['link' => $link->id])}}">
                            {{ $link->hook }}
                        </a>
                    </td>
                    <td class="mx-1 border-t">
                        <x-url :href="$link->url"/>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif

</x-layout>
