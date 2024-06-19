<x-layout>
    <x-slot:heading>
        Job page
    </x-slot:heading>
    
<h1><strong>{{$job['title']}}</strong></h1>
<p>
  this job pay {{$job['salary']}} per years.
</p>

</x-layout>