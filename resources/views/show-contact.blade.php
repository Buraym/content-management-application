<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-start gap-3">
            <a
                href="{{ route('contact.list') }}"
                class="inline-block px-2 py-1.5 dark:text-[#ef2d56] text-[#1b1b18] border border-transparent transition-all rounded-full text-sm leading-normal"
            >
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left-icon lucide-arrow-left">
                    <path d="m12 19-7-7 7-7"/>
                    <path d="M19 12H5"/>
                </svg>
            </a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $contact_name }}
            </h2>
        </div>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-2 sm:p-4 bg-transparent sm:rounded-lg flex flex-col justify-start items-start gap-2">
                <h3 class="mb-2 font-bold text-xl text-gray-600">
                    #ID
                </h3>
                <p class="mb-2 text-sm text-gray-600">
                    {{ $id }}
                </p>
                <h3 class="mb-2 font-bold text-xl text-gray-600">
                    Email
                </h3>
                <p class="mb-2 text-sm text-gray-600">
                    {{ $contact_email }}
                </p>
                <h3 class="mb-2 font-bold text-xl text-gray-600">
                    Número do contato
                </h3>
                <p class="mb-2 text-sm text-gray-600">
                    {{ $contact_contact }}
                </p>

                <div class="flex flex-col">
                    <p class="mb-2 text-sm text-gray-600">
                        <strong>Criado em:</strong> {{ $contact_created }}
                    </p>
                    <p class="mb-2 text-sm text-gray-600">
                        <strong>Atualizado em:</strong> {{ $contact_updated }}
                    </p>
                </div>
                <a
                    href="{{ route('contact.edit', ["id" => $id]) }}"
                    class="items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 ease-in-out duration-150 dark:border-[#EF2D56] dark:bg-transparent dark:text-[#EF2D56] dark:hover:bg-[#EF2D56] dark:hover:text-white transition-all flex justify-center text-center"
                >
                    Editar
                </a>
        </div>
    </div>
</x-app-layout>