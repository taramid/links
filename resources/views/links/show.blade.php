<x-layout title="{{ $link->hook }} link">

    <table>
        <tr>
            <td class="px-2 py-1 border text-right">id</td>
            <td class="px-2 py-1 border">{{ $link->id }}</td>
        </tr>
        <tr>
            <td class="px-2 py-1 border text-right">URL</td>
            <td class="px-2 py-1 border">
                <x-url :href="$link->url"/>
            </td>
        </tr>
        <tr>
            <td class="px-2 py-1 border text-right">short</td>
            <td class="px-2 py-1 border">
                <x-url href="{{ url('/') . '/' . $link->hook }}" />
            </td>
        </tr>
    </table>

    <br>
    <br>
    <x-buttons.delete action="{{ route('links.destroy', ['link' => $link->id]) }}"/>

    <br>
    <br>
    <x-buttons.back href="{{ route('links.index') }}" />

</x-layout>
