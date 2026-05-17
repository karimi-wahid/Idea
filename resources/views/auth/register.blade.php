<x-layout>
    <x-form title="Register your account" description='Start tracking your ideas today.'>
        <form action="/register" method="post" class='mt-10 space-y-3'>
            @csrf

            <x-form.fields name='name' label="Name" />
            <x-form.fields name='email' label="Email" type='email'/>
            <x-form.fields name='password' label="Password" type='password'/>

            <button type='submit' class='btn mt-2 h-10 w-full'>Create Account</button>
        </form>
    </x-form>
</x-layout>