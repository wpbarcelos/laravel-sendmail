<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adv Siqueira | fale conosco</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class='bg-gray-600 text-white'>
<div class='w-3/4 mx-auto flex items-center h-screen'>
   <div>
    <h1 class="text-2xl mb-8">Email enviado com sucesso!</h1>
        <a href="{{ route('sendmail.create') }}" class='rounded bg-blue-500 p-2 px-6 '>Enviar outra mensagem</a>
   </div>
    
</div>
    
</body>
</html>