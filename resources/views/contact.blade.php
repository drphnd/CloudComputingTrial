<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Us</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased bg-black text-white">
        <div class="flex items-center justify-center min-h-screen">
            <div class="w-full max-w-md p-8 space-y-8 bg-gray-900 rounded-lg shadow-lg">
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">Contact Us</h1>
                    <p class="mt-4 text-lg leading-8 text-gray-300">
                        We'd love to hear from you!
                    </p>
                </div>
                <form method="POST" action="{{ route('sendMail') }}/contact" class="space-y-6">
                    @csrf
                    <div>
                        <label for="nama_pengirim" class="block text-sm font-medium text-gray-300">Sender's Name</label>
                        <div class="mt-1">
                            <input type="text" name="nama_pengirim" id="nama_pengirim" autocomplete="name" required class="block w-full px-3 py-2 text-white bg-gray-800 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>
                    <div>
                        <label for="email_pengirim" class="block text-sm font-medium text-gray-300">Sender's Email</label>
                        <div class="mt-1">
                            <input id="email_pengirim" name="email_pengirim" type="email" autocomplete="email" required class="block w-full px-3 py-2 text-white bg-gray-800 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>
                    <div>
                        <label for="subject_message" class="block text-sm font-medium text-gray-300">Subject Message</label>
                        <div class="mt-1">
                            <input type="text" name="subject_message" id="subject_message" required class="block w-full px-3 py-2 text-white bg-gray-800 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>
                    <div>
                        <label for="content_message" class="block text-sm font-medium text-gray-300">Content Message</label>
                        <div class="mt-1">
                            <textarea id="content_message" name="content_message" rows="4" required class="block w-full px-3 py-2 text-white bg-gray-800 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>