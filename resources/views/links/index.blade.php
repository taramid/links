<x-layout title="Links">

    @if(empty($links))

        <p>there's no any link yet</p>

    @else
        <table>
            @foreach($links as $link)
                <tr>
                    <td class="mx-1">{{ $link->hook }}</td>
                    <td class="mx-1">{{ $link->url }}</td>
                </tr>
            @endforeach
        </table>
    @endif

</x-layout>
