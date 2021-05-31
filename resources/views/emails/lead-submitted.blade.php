@component('mail::message')
# Skinhack Automated Email

## A new lead has been submitted.


<h2> {{$single['name']}} </h2>      

**Name:** {{ $single['name'] }}  <br />
**Email:** {{ $single['email'] }}  <br />
**Phone:**  {{ $single['phone'] }}  <br />
**Message:**  {{ $single['message'] }}  <br />
**Date:**  {{ $single['created_at']->toDayDateTimeString() }}  <br />




[See this entry in the dashboard](https://skinhack.ae/dashboard/leads/)



Thanks,<br>
{{ config('app.name') }}
@endcomponent
