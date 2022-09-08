<x-layout title="{{ $link->hook }} link">

    <table>
        <tr>
            <td>id</td>
            <td>{{ $link->id }}</td>
        </tr>
        <tr>
            <td>URL</td>
            <td>
                <x-url :href="$link->url"/>
            </td>
        </tr>
        <tr>
            <td>short</td>
            <td>{{ $link->hook }}</td>
        </tr>
    </table>

    <br>
    <br>
    <a href="{{ route('links.index') }}">BACK</a>

</x-layout>
