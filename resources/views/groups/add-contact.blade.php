<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('groups.store-contact', $group) }}">

            @csrf
            <div class="relative inline-block w-full text-gray-700">
                <select name="contact_id" id="contact_id"
                    class="block w-full px-4 py-2 pr-8 leading-tight bg-white border-gray-300 rounded-md shadow-sm focus:outline-none focus:bg-white focus:border-indigo-300">
                    @foreach ($contacts as $contact)
                        <option value="{{ $contact->id }}">{{ $contact->name }}</option>
                    @endforeach
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-400 fill-current" viewBox="0 0 20 20">
                        <path
                            d="M9.707,5.293l3,3C12.898,8.488,13,8.744,13,9c0,0.256-0.102,0.512-0.293,0.707l-3,3 C9.512,12.898,9.256,13,9,13s-0.512-0.102-0.707-0.293l-3-3C5.102,9.512,5,9.256,5,9s0.102-0.512,0.293-0.707l3-3 C8.488,5.102,8.744,5,9,5S9.512,5.102,9.707,5.293z" />
                    </svg>
                </div>
            </div>
            <x-input-error :messages="$errors->get('contact_id')" class="mt-2" />

            <x-primary-button class="mt-4">{{ __('Add Contact') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>
