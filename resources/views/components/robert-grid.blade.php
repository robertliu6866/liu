@props(['roberts'])
<div>
    @foreach ($roberts ->skip(1) as $robert2) 
    <x-robert-card  :roberts="$robert2"/>

    @endforeach
   </div>

  
 