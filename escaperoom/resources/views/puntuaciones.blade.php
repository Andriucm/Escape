<x-layout>
    <x-slot name="title">
        Puntuaciones
    </x-slot>
    
    <h1>Puntuaciones</h1>
        <table>
            <tr>
                <th>Usuario </th>
                <th>Puntuacion</th>
                
            </tr>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->usuario }}</td>
                    <td>{{ $usuario->puntos}}</td>
                </tr>
                
            @endforeach
        </table>
        
</x-layout>