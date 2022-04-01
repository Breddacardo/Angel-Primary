@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @if (Session::has('error'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('error') }}
            </div>
        @endif
        
        <a href="#" class="mt-3 px-4 py-2 font-medium tracking-wide text-black capitalize transition-colors duration-200 transform bg-white rounded-md hover:bg-gray-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
            Add child/ren
        </a>
   

        <section class="flex flex-row break-words bg-white sm:border-1 sm:rounded-md sm:shadow-lg">

        
    <div class="flex max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-900">

        <div class="w-2/3 p-4 md:p-4">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-white">$200 Voucher</h1>

            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit In odit</p>

            <div class="flex mt-2 item-center">
                <h1 class="text-lg font-bold text-gray-700 dark:text-gray-200 md:text-xl">500</h1>
            </div>

            <div class="flex justify-between mt-3 item-center">
                <button class="px-2 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">Buy now</button>
            </div>
        </div>
    </div>
    


    
         
    <div class="flex max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-900">

        <div class="w-2/3 p-4 md:p-4">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-white">$500 Voucher</h1>

            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit In odit</p>

            <div class="flex mt-2 item-center">
                <h1 class="text-lg font-bold text-gray-700 dark:text-gray-200 md:text-xl">1000</h1>
            </div>

            <div class="flex justify-between mt-3 item-center">
                <button class="px-2 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">Buy now</button>
            </div>
        </div>
    </div>


    

    
         
    <div class="flex max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-900">

        <div class="w-2/3 p-4 md:p-4">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-white">$550 Voucher</h1>

            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit In odit</p>

            <div class="flex mt-2 item-center">
                <h1 class="text-lg font-bold text-gray-700 dark:text-gray-200 md:text-xl">1500</h1>
            </div>

            <div class="flex justify-between mt-3 item-center">
                <button class="px-2 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">Buy now</button>
            </div>
        </div>
    </div>




        </section>
    </div>
</main>
@endsection
