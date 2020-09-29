<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="container mx-auto">
    
    <div class="p-10">
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" 
        href="{{ route('customer.create') }}">Nuevoi Cliente</a>
        <div class="m-3"></div>
        <table class="table-fixed w-full h-auto text-center rounded-md">
            <thead>
              <tr>
                <th class="w-12 px-4 py-2 border-r-2  border-b-2 border-black uppercase"> Nª </th>
                <th class="w-1/4 px-4 py-2 border-r-2  border-b-2 border-black uppercase">Nombre</th>
                <th class="w-1/4 px-4 py-2 border-r-2  border-b-2 border-black uppercase">Apellido</th>
                <th class="w-1/4 px-4 py-2 border-r-2  border-b-2 border-black uppercase">dui</th>
                <th class="w-1/6 px-4 py-2 border-r-2  border-b-2 border-black uppercase">casos</th>
                <th class="w-1/4 px-4 py-2 border-b-2 border-black uppercase">Accion</th>
              </tr>
            </thead>
            <tbody>
    
                @foreach ($customers as $value)
                    <tr class="text-center">
                        <td class="border-r-2 border-black px-4 py-2">{{$loop->iteration}} </td>
                        <td class="border-r-2 border-black px-4 py-2">{{ $value->name }}</td>
                        <td class="border-r-2 border-black px-4 py-2">{{ $value->last_name }}</td>
                        <td class="border-r-2 border-black px-4 py-2">{{ $value->dui }}</td>
                        <td class="border-r-2 border-black px-4 py-2">{{ $value->courts_count }}</td>
                        <td>
                            <div class="flex flex-wrap flex-shrink-0 justify-center">
                                <a href="{{ route('customer.edit', $value->id) }}" class="hover:text-blue-600">Editar</a>
                                <div class="m-3"></div>
                                <form action="{{ route('customer.destroy',$value->id) }}" method="POST"
                                    onsubmit="return confirm('¿Realmente quieres eliminar este usuario?');">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button title="Desabilitar" class="hover:text-blue-600" type="submit">
                                        Desactivar
                                    </button>
                                </form>
                                <div class="m-3"></div>
                                <a href="{{ route('case.index', $value->id) }}" 
                                    class="hover:text-blue-600">Casos</a>
                                {{-- <a href="{{ route('customer.destroy', $value->id) }}" class="hover:text-blue-600">Desactivar</a> --}}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>