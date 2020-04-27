@component('mail::message')
# Congratulations !

Your Request for Activation of your Apartment has been Approved!

@component('mail::button', ['url' => url('/admin/apartments', $apartment->id)])
Visit Your Apartment
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
