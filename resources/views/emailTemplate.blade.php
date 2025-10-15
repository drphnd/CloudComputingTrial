<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Email Template</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=playfair-display:700|inter:400,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body class="antialiased bg-black text-white">
    <h1>Pendaftaran Berhasil!</h1>
    <p>Nama Lengkap: {{ $nama_pengirim }}</p>
    
</body>
</html>
