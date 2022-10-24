<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-120 bg-white border-b border-blue-200">
                   <b class="font-bold text-xl text-blue-800">Hotel Management 
                </div>
                <img src="{{ asset('images/front_pc.jpg') }}" alt="front_pc" width="1584" height="600">
            </div>
        </div>
    </div>
</x-app-layout>
