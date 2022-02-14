<x-app-layout>
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Profile
        </h2>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="flex flex-nowrap items-center text-sm">
                <!-- Avatar with inset shadow -->
                <div class="relative w-32 h-12 md:h-32 mr-3 rounded-full block">
                    <img class="object-cover w-full h-full rounded-full"
                        src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                        alt="" loading="lazy" />
                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                    </div>
                </div>
                <div class="relative">
                    <p class="font-semibold">Hans Burger</p>
                    <p class="text-xs text-gray-600 dark:text-gray-400 flex flex-row">
                        <svg class="w-4 h-4 mr-1" aria-hidden="true" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        mail@mail.com

                        <svg class="w-4 h-4 ml-3 mr-1" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                        hansburger
                    </p>
                    <p class="text-xs text-gray-600 dark:text-gray-400">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quibusdam minus perferendis amet modi placeat corrupti atque enim vel.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <!-- Validation inputs -->
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                Update
            </h4>
            
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="Jane Doe" />
            </label>
            
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Email</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="mail@mail.com" readonly />
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Username</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="Username" readonly />
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Address</span>
                <textarea
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    rows="3" placeholder="Enter some long form content."></textarea>
            </label>
            <div class="mt-4">
                <button
                    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Simpan
                </button>
            </div>
        </div>

    </div>
</x-app-layout>
