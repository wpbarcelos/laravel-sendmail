<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adv Siqueira | fale conosco</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class='bg-gray-600'>
<div class='w-3/4 mt-5 mx-auto'>
<form action="{{ route('sendmail.store') }}" method='post' enctype="multipart/form-data">
    @csrf
    <label for="nome" class='text-white'>Nome</label>
    <input type="text" name="nome" id="nome" 
        value="{{ old('nome')}}"
        class='rounded bg-white border-1 border-red w-full p-2 px-3 
            @error("nome") bg-red-200 @enderror
        '>
        @error('nome')
        <p class='text-red-500 bold'>  Nome é obrigatório </p>
    @enderror

    <div class="mt-4">
        <label for="email" class='text-white mt-4'>Email</label>
        <input type="email" name="email" id="email" 
            value="{{ old('email')}}"
            class='rounded bg-white border border-red w-full p-2 px-3  @error("email") bg-red-200 @enderror'>
        @error('email')
            <p class='text-red-500 bold'>  Email é obrigatório </p>
        @enderror
    </div>

    <div class="mt-4">
        <label for="telefone" class='text-white'>Telefone</label>
        <input type="text" name="telefone" id="telefone" 
            value="{{ old('telefone')}}"
            class='rounded bg-white border border-red w-full p-2 px-3  @error("telefone") bg-red-200 @enderror'>
        @error('telefone')
            <p class='text-red-500 bold'> Telefone é obrigatório </p>
        @enderror

    </div>
   
    <input type="file" name="arquivo[]" class='mt-4 mb-3 w-full border border-white p-2 text-white rounded' >
    <input type="file" name="arquivo[]" class='mb-3 w-full border border-white p-2 text-white rounded' >
    <input type="file" name="arquivo[]" class='mb-3 w-full border border-white p-2 text-white rounded' >
    <input type="file" name="arquivo[]" class='mb-3 w-full border border-white p-2 text-white rounded' >
    <input type="file" name="arquivo[]" class='mb-5 w-full border border-white p-2 text-white rounded' >
    @error("arquivo") 
        <p class="text-red-500 text-bold">Arquivos não podem exceder 10mb</p>
    @enderror
    <button type="submit" class='w-full text-white bg-blue-500 uppercase py-2 px-16 rounded'>Enviar</button>
</form>
</div>
    
</body>
</html>