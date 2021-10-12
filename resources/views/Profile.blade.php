<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
            
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Change your Credentials and Sumbit em'
                    <form method="POST" action="{{ route('editProfile')}}">
                        @csrf
                        Name: <input type="text" name="name" value="{{Auth::user()->name}}" style="border-radius: 15px 50px 30px 5px;">
                    
                        Email:  <input type="email" name="email" value="{{Auth::user()->email}}" style="border-radius: 15px 50px 30px 5px;">
                        <input  type="submit"><br>
                    </form>
                </div>
            </div>
        </div>
    </div>

         
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form  action="/">
                <input type="submit" name="submit" value="Return to home page " >  
</form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
