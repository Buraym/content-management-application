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
                Edição do contato de "{{ $contact_name }}""
            </h2>
        </div>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-2 sm:p-4 bg-transparent sm:rounded-lg flex justify-between items-center">
                <form method="POST" action="{{ route("contact.update", ["id" => $id]) }}" class="flex flex-col gap-2">
                    @csrf
                    @method('PUT')
                        <x-input-label for="name" value="Nome completo" class="sr-only" />
                        <x-text-input
                            wire:model="name"
                            id="name"
                            name="name"
                            type="text"
                            class="block w-full"
                            placeholder="Novo nome completo"
                            :value="$contact_name"
                        />
                        <p class="mb-2 text-sm text-gray-600 dark:text-[#EF2D56]">
                            *Campo necessário
                        </p>
                        <x-input-label for="email" value="Email" class="sr-only" />
                        <x-text-input
                            wire:model="email"
                            id="email"
                            name="email"
                            type="email"
                            class="block w-full"
                            placeholder="Novo email"
                            :value="$contact_email"
                        />
                        <p class="mb-2 text-sm text-gray-600 dark:text-[#EF2D56]">
                            *Campo necessário, deve ser válido e único
                        </p>
                        <x-input-label for="contact" value="Contato" class="sr-only" />
                        <x-text-input
                            wire:model="contact"
                            id="contact"
                            name="contact"
                            type="text"
                            class="block w-full"
                            placeholder="Novo contato ( xxxxxxxxx )"
                            :value="$contact_contact"
                        />
                        <p class="mb-2 text-sm text-gray-600 dark:text-[#EF2D56]">
                            *Campo necessário, deve ser válido e único
                        </p>
                        <x-primary-button class="max-w-36 border dark:border-[#EF2D56] dark:bg-transparent dark:text-[#EF2D56] dark:hover:bg-[#EF2D56] dark:hover:text-white transition-all flex justify-center text-center">
                            Atualizar
                        </x-danger-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>