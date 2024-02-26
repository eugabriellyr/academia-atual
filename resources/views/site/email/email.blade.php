<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato E-mail</title>
</head>
<body>

    <h1>Contato email - Academia VivaBem</h1>

    <h2>Nome:    {{ $contato->nomeContato }}</h2>
    <h2>Email:   {{ $contato->emailContato }}</h2>
    <h2>fone:    {{ $contato->foneContato }}</h2>
    <h2>assunto: {{ $contato->assuntoContato }}</h2>
    <h2>msg:     {{ $contato->msgContato }}</h2>

</body>
</html>
