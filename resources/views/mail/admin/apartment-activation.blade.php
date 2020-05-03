@component('mail::message')
# Apartment activation request

Please Activate my Apartment 

Apartment Name: <strong>{{ $apartment->name }}</strong>
Apartment Owner:  <strong>{{ $apartment->owner->name }}</strong>

@component('mail::button', ['url' => url('/admin/apartments')])
Manage Apartment
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
