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
        <form action="{{ url('case/'.$cases->id.'/update')}}" method="POST" class="p-10">
            @csrf
            @method('PUT')
            <div class="w-full">
                <div class="w-1/2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">Numero :</label>
                    <input type="text" name="number" class="w-1/2 shadow appearance-none border rounded w-full 
                    py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    value="{{old('note',$cases->case_number)}}">
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">Folio :</label>
                    <input type="text" name="folio" class="w-1/2 shadow appearance-none border rounded w-full 
                    py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    value="{{old('note',$cases->folio)}}">
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">Nombre :</label>
                    <input type="text" name="name" class="w-1/2 shadow appearance-none border rounded w-full 
                    py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    value="{{old('note',$cases->name)}}">
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">Requerimientos :</label>
                    <input type="text" name="requeri" class="w-1/2 shadow appearance-none border rounded w-full 
                    py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    value="{{old('note',$cases->requirement)}}">
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">Comentario :</label>
                    <input type="text" name="comment" class="w-1/2 shadow appearance-none border rounded w-full 
                    py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    value="{{old('note',$cases->commentary)}}">
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">Estado :</label>
                    <select name="state" id="" class="block appearance-none w-full bg-gray-200 border
                        border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none 
                        focus:bg-white focus:border-gray-500">
                        @foreach ($state as $item)
                            @if ($item->id != "4")
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @else
                            @endif
                        @endforeach
                    </select>
                </div>
                <input type="text" name="id_client" hidden readonly value="{{$cases->id_client}}">
                <div class="m-3"></div>
                <div class="w-1/2">
                    <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold 
                    py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="Ingresar" >
                    <a href="{{ route('case.index', $cases->id_client) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold 
                    py-2 px-4 rounded focus:outline-none focus:shadow-outline"> Cancelar</a>

                </div>
            </div>
        </form>
    </div>
    
</body>
</html>