@component('mail::message')
# Skinhack Automated Email

## A new assessment has been submitted.


<h2> {{$single['name']}} </h2>      

**Email:** {{ $single['email'] }}  <br />
**Name:** {{ $single['name'] }}  <br />
**Age:**  {{ $single['age'] }}  <br />
**Gender:**  {{ $single['questionEleven'] }}  <br />
**Date:**  {{ $single['created_at']->toDayDateTimeString() }}  <br />


### What is your skin type?
<?php
$newStr = str_replace('"','',str_replace("]","",str_replace("[","", str_replace('",', " \n ", $single['questionTwo']))));
echo  $newStr
?>

### Do you have sensitive skin?
{{$single['questionThree']}}



### What are your main skin concerns?
<?php
  $newStr = str_replace('"','',str_replace("]","",str_replace("[","", str_replace('",', "  \n ", $single['questionFour']))));
  echo $newStr
?>
  


### Do you have any concerns about your eye area?
<?php
  $newStr = str_replace('"','',str_replace("]","",str_replace("[","", str_replace('",',  "\n", $single['questionFive']))));
  echo $newStr
?>



### What has been your experience with skincare so far?
{{$single['questionSix']}}

### What can we help you with?
{{$single['questionSeven']}}


### How much time do you have to spend on a skincare routine?
{{$single['questionEight']}}
  



### What do you currently use?
<?php
  $newStr = str_replace('"','',str_replace("]","",str_replace("[","", str_replace('",', "\n", $single['questionNine']))));
  echo $newStr
?>



### What is your monthly budget on skincare?
{{$single['questionTen']}}
  

### Extra info
{{$single['questionExtra']}}
  

### Selfies
[Selfie 1](http://localhost:8000/uploads/image/{{$single['imageOne']}})
[Selfie 2](http://localhost:8000/uploads/image/{{$single['imageTwo']}})
[Selfie 3](http://localhost:8000/uploads/image/{{$single['imageThree']}})

 





[See this entry in the dashboard](http://localhost:8000/dashboard/assessment/)



Thanks,<br>
{{ config('app.name') }}
@endcomponent
