<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konfirmasi Registrasi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* == RESET & FONT == */
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background-color: #f0f2f5; /* Latar belakang lebih terang */
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* == STRUKTUR UTAMA == */
        .wrapper {
            width: 100%;
            background-color: #f0f2f5;
            padding: 40px 20px;
            box-sizing: border-box;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 12px; /* Border radius lebih besar */
            box-shadow: 0 10px 30px rgba(0,0,0,0.07); /* Shadow lebih lembut dan dalam */
            overflow: hidden; /* Untuk menjaga border-radius di hero */
        }
        
        /* == [PERUBAHAN DRASTIS] HERO SECTION == */
        .header {
            text-align: center;
            padding: 40px 30px;
            /* Gradien ungu-biru yang modern */
            background: linear-gradient(to right, #4a00e0, #8e2de2);
            color: #ffffff;
        }

        .header h1 {
            color: #ffffff;
            font-family: 'Inter', sans-serif; /* Ganti ke Inter agar seragam */
            margin: 0;
            font-size: 32px; /* Sedikit lebih besar */
            font-weight: 700;
        }

        /* == LOGO (Opsional tapi direkomendasikan) == */
        .logo-container {
            text-align: center;
            padding: 30px 0 20px 0;
        }
        
        .logo-container img {
            max-width: 150px;
            /* Ganti 'src' dengan URL logo Anda */
        }

        .logo-placeholder {
            font-size: 20px;
            font-weight: 700;
            color: #ccc;
            letter-spacing: 2px;
            border: 2px dashed #eee;
            padding: 10px 20px;
            display: inline-block;
        }

        /* == KONTEN & DETAIL == */
        .content {
            font-size: 16px;
            padding: 30px 40px; /* Padding lebih besar */
        }

        .content p {
            line-height: 1.7; /* Spasi antar baris lebih nyaman */
            margin-bottom: 25px;
            color: #555; /* Warna teks tidak terlalu hitam pekat */
        }
        
        /* == [PERUBAHAN DRASTIS] DETAIL BOX == */
        .details {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            border: 1px solid #e9ecef; /* Border tipis */
            /* Garis aksen di kiri menggunakan warna primer */
            border-left: 5px solid #4a00e0; 
        }

        .details p {
            margin-bottom: 12px;
        }
        
        .details p:last-child {
            margin-bottom: 0;
        }

        .label {
            font-weight: 600;
            color: #333; /* Warna label lebih tegas */
            display: inline-block;
            min-width: 130px; /* Sedikit lebih lebar */
        }

        /* == [PERUBAHAN DRASTIS] TOMBOL == */
        .button-container {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            /* Menggunakan gradien yang sama dengan header */
            background: linear-gradient(to right, #4a00e0, #8e2de2);
            color: #ffffff !important; /* Pastikan teks putih */
            padding: 16px 32px; /* Tombol lebih besar */
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            box-shadow: 0 4px 15px rgba(74, 0, 224, 0.3); /* Shadow sesuai warna tombol */
            transition: all 0.3s ease;
        }
        
        .button:hover {
            opacity: 0.9;
            transform: translateY(-2px); /* Efek 'angkat' saat di-hover */
        }

        /* == FOOTER == */
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 13px;
            color: #aaaaaa; /* Warna lebih pudar */
            padding: 0 40px 30px 40px;
        }
        
        .footer p {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            
            <div class="header">
                <h1>Registrasi Berhasil!</h1>
            </div>

            <div class="content">
                <p>Halo <strong>{{ $full_name }}</strong>,</p>
                <p>Akun Anda telah berhasil didaftarkan. Mohon periksa kembali detail Anda dan konfirmasikan registrasi Anda.</p>
                
                <div class="details">
                    <p><span class="label">Nama Lengkap:</span> {{ $full_name }}</p>
                    <p><span class="label">Email Siswa:</span> {{ $student_email }}</p>
                    <p><span class="label">Tanggal Lahir:</span> {{ $birthdate }}</p>
                    <p><span class="label">Course:</span> Cloud Computing 2025</p>
                </div>
                
                <p>Jika semua data sudah benar, silakan klik tombol di bawah ini untuk menyelesaikan proses.</p>

                <div class="button-container">
                    <a href="https://drphnd.team2lesgo.site/" class="button">
                        Confirm My Registration
                    </a>
                </div>
            </div>

            <div class="footer">
                <p>&copy; {{ date('Y') }} Drphnd. Semua Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </div>
</body>
</html>