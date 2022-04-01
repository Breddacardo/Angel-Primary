@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <nav class=" border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="#" class="flex items-center">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Angel Primary</span>
            </a>
            <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
            <li>
            <a href="#" class="block py-2 pr-4 pl-3 text-black bg-black rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
            </li>
            <li>
            <a href="#" class="block py-2 pr-4 pl-3 text-black border-b border-black hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
            </li>
            <li>
            <a href="#" class="block py-2 pr-4 pl-3 text-black border-b border-black hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
            </li>
            <li>
            <a href="#" class="block py-2 pr-4 pl-3 text-black border-b border-black hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
            </li>
            <li>
            <a href="#" class="block py-2 pr-4 pl-3 text-black hover:bg-black md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
            </li>
            </ul>
            </div>
            </div>
            </nav>
            
            <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        
        <div class="">
        
         <div class="sm:max-w-5xl px-3 pt-8  md:max-w-7xl grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 items-center sm:mx-16 sm:my-10 gap-10">
          
           <div class="h-64 sm:h-96 mb-10 sm:mb-0 bg-gradient-to-t from-gray-700 to-blue-900 rounded-lg transform -rotate-6">
           <div class="w-full  h-full bg-white rounded-lg transform rotate-6 shadow-lg focus:ring-2">
           <div class=" flex sm:block items-center">
            <div class=" px-2 w-1/2 sm:w-full">
              <img src="https://images-na.ssl-images-amazon.com/images/I/31OJMP5H3nL.jpg" class="sm:px-2 sm:pt-8">
             </div>
            <div class="">
             <div class="flex sm:px-5 py-8 justify-around">
              <div>
                <h2 class=" text-xl md:text-2xl font-serif">Lacoste Glasses</h2>
               </div>
              <div>
               <h2 class=" text-xl  md:text-2xl font-serif text-gray-400">250$</h2> 
              </div>
             </div>
             <div class="flex justify-around py-6">
              <div>
               <a href="#" class="sm:p-3  md:p-4 py-2 px-2 bg-gray-200 font-serif font-semibold text-black border-solid rounded-md"> Add Cart</a>
              </div>
              <div>
               <a href="#" class="sm:p-3  md:p-4 py-2 px-2 bg-black text-gray-100 font-serif font-semibold rounded-md"> Buy Now</a>
              </div>
             </div>
            </div>
           </div>
           </div>
          </div>
           
           </div>
           </div>
          </div>
         <div>
        </div>
        
    </div>
</main>
@endsection
