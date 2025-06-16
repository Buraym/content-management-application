<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-start gap-3">
            <h2 class="font-semibold text-xl text-gray-800 leading-none">
                Lista de contatos
            </h2>
            @auth
                <a
                    href="{{ route('contact.create') }}"
                    class="inline-block px-2 py-1.5 dark:text-[#ef2d56] text-[#1b1b18] border border-transparent transition-all rounded-full text-sm leading-normal"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round-plus-icon lucide-user-round-plus">
                        <path d="M2 21a8 8 0 0 1 13.292-6"/>
                        <circle cx="10" cy="8" r="5"/>
                        <path d="M19 16v6"/>
                        <path d="M22 19h-6"/>
                    </svg>
                </a>
            @endauth
        </div>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-data-table
                        :$columns
                        :$rows
                        :$link
                        :$deleteLink
                        :authenticated="false"
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>