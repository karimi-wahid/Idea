<x-layout>
    <x-form title="Login to your account" description='Glad to have you back.'>
        <form action="/login" class='mt-10 space-y-3'>
            @csrf

            <x-form.fields name='email' label="Email" type='email'/>
            <x-form.fields name='password' label="Password" type='password'/>

            <button type='submit' class='btn mt-2 h-10 w-full'>Login in</button>
        </form>
    </x-form>
</x-layout>