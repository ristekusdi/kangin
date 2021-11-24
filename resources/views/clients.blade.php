<x-app-layout>
    <!-- Remove everything INSIDE this div to a really blank page -->
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Blank</h2>
        <p class="text-gray dark:text-gray-200">Halo {{ auth()->user()->name }}</p>
    </div>
</x-app-layout>
