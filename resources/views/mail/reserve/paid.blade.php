@component('mail::message')
# Payment Details

Thank you for Booking your Unit

<table class="table">
    <thead>
        <tr>
            <th>Apartment Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($booking->units as $unit)
            <tr>
                <td scope="row">{{ $unit->name }}</td>
                <td>{{ $unit->pivot->quantity }}</td>
                <td>{{ $unit->pivot->price }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
 
Total : {{$booking->grand_total}}

@component('mail::button', ['url' => route('home')])
Return to site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
