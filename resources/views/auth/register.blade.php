<x-app-layout>
    <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col w-full md:py-8 mt-8 md:mt-0">

        <form method="POST" action="{{ route('register') }}">
            @csrf
    
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
    
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
    
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
    
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
    
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
    
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
    
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
    
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
    
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <!-- Phone -->
            <div>
                <x-input-label for="phone" :value="__('Phone')" />
    
                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
    
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>
            <!-- BloodGrp -->
            <div>
                <x-input-label for="bloodGroup" :value="__('BloodGroup')" />
    
                <x-text-input id="bloodGroup" class="block mt-1 w-full" type="text" name="bloodGroup" :value="old('bloodGroup')" required autofocus />
    
                <x-input-error :messages="$errors->get('bloodGroup')" class="mt-2" />
            </div>
            <!-- address -->
            <div>
                <x-input-label for="address" :value="__('Address')" />
    
                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
    
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>
            <!-- gender -->
            <div>
                <x-input-label for="gender" :value="__('Gender')" />
    
                <x-text-input id="gender" class="block mt-1 w-full" type="text" name="gender" :value="old('gender')" required autofocus />
    
                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
            </div>
            <!-- Birthdate -->
            <div>
                <x-input-label for="birthDate" :value="__('BirthDate')" />
    
                <x-text-input id="birthDate" class="block mt-1 w-full" type="date" name="birthDate" :value="old('birthDate')" required autofocus />
    
                <x-input-error :messages="$errors->get('birthDate')" class="mt-2" />
            </div>
            <!-- NID -->
            <div>
                <x-input-label for="nid" :value="__('Nid')" />
    
                <x-text-input id="nid" class="block mt-1 w-full" type="text" name="nid" :value="old('nid')" required autofocus />
    
                <x-input-error :messages="$errors->get('nid')" class="mt-2" />
            </div>
            <!-- type -->
            <!-- <div>
                <x-input-label for="type" :value="__('Type')" />
    
                <x-text-input id="type" class="block mt-1 w-full" type="text" name="type" :value="old('type')" required autofocus />
    
                <x-input-error :messages="$errors->get('type')" class="mt-2" />
            </div> -->
            <div class="flex items-center justify-end mt-4">
                {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> --}}
    
                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
