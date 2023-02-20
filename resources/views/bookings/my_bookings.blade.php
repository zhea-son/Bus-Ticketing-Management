@extends('layouts.layout')

@section('title','My Bookings')

@section('content')
    
<h1 class="text-center text-4xl text-bold text-teal-500">My Bookings</h1><!-- component -->

@if ( count($bookings) == 0)
            <p>No Bookings yet!</p>

@else

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="container mt-5 w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Bus Type
                </th>
                <th scope="col" class="px-6 py-3">
                    Route
                </th>
                <th scope="col" class="px-6 py-3">
                    Departure Time
                </th>
                <th scope="col" class="px-6 py-3">
                    Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Seats
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($bookings as $booking)
                
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $booking->schedule->bus->type }}
                </th>
                <td class="px-6 py-4">
                    {{ $booking->schedule->route->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $booking->schedule->departure_time }}
                </td>
                <td class="px-6 py-4">
                    {{ $booking->schedule->date }}
                </td>
                <td class="px-6 py-4">
                    {{ $booking->schedule->bus->seats }}
                </td>
                <td class="px-6 py-4">
                    1 day to go
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif


@endsection

