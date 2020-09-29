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
        <form action="{{ url('customer/'.$customer->id.'/update')}}" method="POST" class="p-10">
            @csrf
            @method('PUT')
            <div class="w-full">
                <div class="w-1/2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">Nombre :</label>
                    <input type="text" name="name" class="w-1/2 shadow appearance-none border rounded w-full 
                    py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    value="{{old('name',$customer->name)}}">
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">Apellido :</label>
                    <input type="text" name="lastName" class="w-1/2 shadow appearance-none border rounded w-full 
                    py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{old('lastName',$customer->last_name)}}">
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">D.U.I :</label>
                    <input type="text" name="dui" class="w-1/2 shadow appearance-none border rounded w-full 
                    py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{old('dui',$customer->dui)}}">
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">N.I.T :</label>
                    <input type="text" name="nit" class="w-1/2 shadow appearance-none border rounded w-full 
                    py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{old('nit',$customer->nit)}}">
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">Telefono :</label>
                    <input type="text" name="phone" class="w-1/2 shadow appearance-none border rounded w-full 
                    py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{old('phone',$customer->telephone_number)}}">
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">Celular :</label>
                    <input type="text" name="cellPhone" class="w-1/2 shadow appearance-none border rounded w-full 
                    py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{old('cellPhone',$customer->cell_phone_number)}}">
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">Dirección :</label>
                    <input type="text" name="direction" class="w-1/2 shadow appearance-none border rounded w-full 
                    py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{old('direction',$customer->direction)}}">
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">Notas :</label>
                    <input type="text" name="note" class="w-1/2 shadow appearance-none border rounded w-full 
                    py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{old('note',$customer->note)}}">
                </div>
                <div class="m-3"></div>
                <div class="w-1/2">
                    <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold 
                    py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="Modificar">
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>