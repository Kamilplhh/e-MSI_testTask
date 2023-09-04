<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <title>Zadanie zdalne e-MSI</title>

    @vite('resources/css/app.css')
</head>

<body>
    <div id="Lewy">
        <a href="/">Różne kontrolki HTML</a>
        <a href="/pracownicy">Tabela Pracowników</a>
        <a href="/faktury">Tabela Faktur VAT</a>
        <a href="/delegacje">Tabela Delegacji BD</a>
        <a href="/kontrahenci">Dane Kontrahentów</a>
    </div>

    <div id="Prawy">
        @yield('content')
    </div>
</body>

</html>