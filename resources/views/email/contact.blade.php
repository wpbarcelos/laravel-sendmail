<div style='font-family:arial,tahoma,sans-serf'>
<p>Você recebeu uma nova mensagem enviado pelo aplicativo.</p>

<p><strong>Nome:</strong> {{ $user->nome }}</p>

<p><strong>Email:</strong> {{ $user->email }}</p>

<p><strong>Telefone:</strong> {{ $user->telefone }}</p>

@if($upload)
    <p>Arquivos em anexo</p>
@endif

</div>