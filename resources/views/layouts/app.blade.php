<!DOCTYPE html>
<html :class="{ 'dark': dark }" x-data="data()" lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ env('APP_NAME', 'Laravel') }}</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}"/>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script src="{{ asset('js/init-alpine.js') }}"></script>
    </head>
    <body>
        <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
            <!-- Desktop sidebar -->
            <x-app.sidebar></x-app.sidebar>
            <div class="flex flex-col flex-1 w-full">
                <x-app.header></x-app.header>
                <main class="h-full pb-16 overflow-y-auto">
                    {{ $slot }}
                </main>
          </div>
    </body>
</html>