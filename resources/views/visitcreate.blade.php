<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for visit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Umów wizytę
                    <form action="" method="POST">
                        @csrf
                        <div>
                            <label for="date">Wybierz datę:</label>
                            <input type="date" name="date"/><br>
                            <label for="doctorName">Wybierz doktora:</label>
                            <select name="doctor">
                            <option value=""></option>
                                @foreach($users as $user)
                                <option value="{{ $user.id }}">
                                   {{ $user.name }}
                                </option>
                                @endforeach
                            </select><br>
                            <input type="submit" name="submit" value="Umów wizytę"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
