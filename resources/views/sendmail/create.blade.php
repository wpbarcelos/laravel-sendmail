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
    <input type="text" name="nome" id="nome" class='rounded bg-white border border-red w-full p-2 px-3 mb-4'>


    <label for="email" class='text-white'>Email</label>
    <input type="email" name="email" id="email" class='rounded bg-white border border-red w-full p-2 px-3 mb-4'>
    

    <label for="telefone" class='text-white'>Telefone</label>
    <input type="text" name="telefone" id="telefone" class='rounded bg-white border border-red w-full p-2 px-3 mb-4 mb-3'>
    

    <input type="file" name="arquivo[]" class='mb-3 w-full border border-white p-2 text-white rounded' >
    <input type="file" name="arquivo[]" class='mb-3 w-full border border-white p-2 text-white rounded' >
    <input type="file" name="arquivo[]" class='mb-3 w-full border border-white p-2 text-white rounded' >
    <input type="file" name="arquivo[]" class='mb-3 w-full border border-white p-2 text-white rounded' >
    <input type="file" name="arquivo[]" class='mb-5 w-full border border-white p-2 text-white rounded' >


    <button type="submit" class='w-full text-white bg-gray-800 border border-white uppercase py-2 px-16 rounded'>Enviar</button>
</form>
</div>
    
</body>
</html>