<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div>
        <table>
            <tbody>
                <tr>
                    <td>Nombre : {{$customer->name}}</td>
                    <td>Apellido : {{$customer->last_name}}</td>
                    <td>Estado : {{$customer->state->name}}</td>
                </tr>
                <tr>
                    <td>D.U.I : {{$customer->dui}}</td>
                    <td>N.I.T : {{$customer->nit}}</td>
                    <td>Telefono : {{$customer->telephone_number}}</td>
                    <td>Celular : {{$customer->cell_phone_number}}</td>
                </tr>
                <tr>
                    <td>Dirección : {{$customer->direction}}</td>
                    <td>Notas : {{$customer->note}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="p-10">
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" 
        href="{{ route('case.create',$customer->id) }}">Nuevo Caso</a>
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" 
        href="{{ url('/') }}">Cancelar</a>
        <div class="m-3"></div>
        <table class="table-fixed w-full h-auto text-center rounded-md">
            <thead>
              <tr>
                <th class="w-12 px-4 py-2 border-r-2  border-b-2 border-black uppercase"> Nª </th>
                <th class="w-1/6 px-4 py-2 border-r-2  border-b-2 border-black uppercase">folio</th>
                <th class="w-1/6 px-4 py-2 border-r-2  border-b-2 border-black uppercase">nombre</th>
                <th class="w-1/6 px-4 py-2 border-r-2  border-b-2 border-black uppercase">requerimientos</th>
                <th class="w-1/6 px-4 py-2 border-r-2  border-b-2 border-black uppercase">comentario</th>
                <th class="w-1/6 px-4 py-2 border-r-2  border-b-2 border-black uppercase">estado</th>
                <th class="w-1/6 px-4 py-2 border-b-2 border-black uppercase">Accion</th>
              </tr>
            </thead>
            <tbody>
    
                @foreach ($cases as $value)
                    <tr class="text-center">
                        <td class="border-r-2 border-black px-4 py-2">{{ $value->case_number }}</td>
                        <td class="border-r-2 border-black px-4 py-2">{{ $value->folio }}</td>
                        <td class="border-r-2 border-black px-4 py-2">{{ $value->name }}</td>
                        <td class="border-r-2 border-black px-4 py-2">{{ $value->requirement }}</td>
                        <td class="border-r-2 border-black px-4 py-2">{{ $value->commentary }}</td>
                        <td class="border-r-2 border-black px-4 py-2">{{ $value->state->name }}</td>
                        <td>
                            <div class="flex flex-wrap flex-shrink-0 justify-center">
                                <a href="{{ route('case.edit', $value->id) }}" 
                                    class="hover:text-blue-600">Editar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>