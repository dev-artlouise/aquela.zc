@component('mail::message')
# Congratulations !

Your Request for Activation your Apartment has been Approved!

@component('mail::button', ['url' => route('apartments.show', $apartment->id)])
Visit Your Apartment
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
