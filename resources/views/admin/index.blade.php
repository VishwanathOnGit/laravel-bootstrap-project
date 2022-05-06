<x-admin-layout>
    <div class="row">
        <x-admin-statistics-card>
            <x-slot:color>info</x-slot:color>
            <x-slot:count>20</x-slot:count>
            <x-slot:card_title>New Orders</x-slot:card_title>
            <x-slot:icon>ion ion-bag</x-slot:icon>
        </x-admin-statistics-card>

        <x-admin-statistics-card>
            <x-slot:color>success</x-slot:color>
            <x-slot:count>65<sup style="font-size: 20px">%</sup></x-slot:count>
            <x-slot:card_title>Bounce Rate</x-slot:card_title>
            <x-slot:icon>ion ion-stats-bars</x-slot:icon>
        </x-admin-statistics-card>

        <x-admin-statistics-card>
            <x-slot:color>warning</x-slot:color>
            <x-slot:count>44</x-slot:count>
            <x-slot:card_title>User Registrations</x-slot:card_title>
            <x-slot:icon>ion ion-person-add</x-slot:icon>
        </x-admin-statistics-card>

        <x-admin-statistics-card>
            <x-slot:color>danger</x-slot:color>
            <x-slot:count>88</x-slot:count>
            <x-slot:card_title>Unique Visitors</x-slot:card_title>
            <x-slot:icon>ion ion-pie-graph</x-slot:icon>
        </x-admin-statistics-card>
    </div>
</x-admin-layout>
