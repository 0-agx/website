@extends('layouts.auth')
@section('content')
<div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
    <div
        class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
            Sign Up
        </h2>
        <div class="intro-x mt-2 text-slate-400 dark:text-slate-400 xl:hidden text-center">A few more clicks to sign in
            to your account. Manage all your e-commerce accounts in one place</div>
        <div class="intro-x mt-8">
            <input type="text" class="intro-x login__input form-control py-3 px-4 block" placeholder="First Name">
            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Last Name">
            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Email">
            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password">
            <div class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3">
                <div class="col-span-3 h-full rounded bg-success"></div>
                <div class="col-span-3 h-full rounded bg-success"></div>
                <div class="col-span-3 h-full rounded bg-success"></div>
                <div class="col-span-3 h-full rounded bg-slate-100 dark:bg-darkmode-800"></div>
            </div>
            <a href="" class="intro-x text-slate-500 block mt-2 text-xs sm:text-sm">What is a secure password?</a>
            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4"
                placeholder="Password Confirmation">
        </div>
        <div class="intro-x flex items-center text-slate-600 dark:text-slate-500 mt-4 text-xs sm:text-sm">
            <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
            <label class="cursor-pointer select-none" for="remember-me">I agree to the Envato</label>
            <a class="text-primary dark:text-slate-200 ml-1" href="">Privacy Policy</a>.
        </div>
        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
            <button onclick="location.href='{{ route('register') }}'"
                class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Register</button>
            <button onclick="location.href='{{ route('login') }}'"
                class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Login</button>
        </div>
    </div>
</div>
@endsection