<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konfirmasi Kontak</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            border-bottom: 1px solid #eeeeee;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #2d3748; /* Mirip gray-800 */
            font-family: 'Playfair Display', serif;
            margin: 0;
        }
        .content p {
            line-height: 1.6;
            margin-bottom: 15px;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #777;
        }
        .label {
            font-weight: 600;
            color: #4a5568; /* Mirip gray-700 */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Terima Kasih Telah Menghubungi Kami!</h1>
        </div>
        <div class="content">
            <p>Halo {{ $nama_pengirim }},</p>
            <p>Kami telah menerima pesan Anda dan akan segera meresponsnya jika diperlukan.</p>
            <p>Berikut adalah detail pesan yang Anda kirimkan:</p>
            <p><span class="label">Nama:</span> {{ $nama_pengirim }}</p>
            <p><span class="label">Email:</span> {{ $email_pengirim }}</p>
            <p><span class="label">Subjek:</span> {{ $subject_message }}</p>
            <p><span class="label">Pesan:</span></p>
            <p>{{ $content_message }}</p>
            <p>Terima kasih atas minat Anda pada layanan kami.</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Nama Perusahaan Anda. Semua Hak Cipta Dilindungi.</p>
            {{-- <p><a href="[URL_ANDA]">Website Kami</a></p> --}}
        </div>
    </div>
</body>
</html>