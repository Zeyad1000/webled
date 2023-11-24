<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.head')
    @section('Home')
    @endsection
</head>

<body>
    @include('layouts.nav')

<!-- Blog Article -->
<div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-2xl">


      <!-- Content -->
      <div class="space-y-5 md:space-y-8">
        <div class="space-y-3">
          <h2 class="text-2xl font-bold md:text-3xl">{{$post->title}}</h2>

          <p class="text-lg text-gray-800">{{$post->desc}}</p>
        </div>


        <figure>
          <img class="w-full object-cover rounded-xl" src="{{$post->photo}}" alt="Image Description">
          <figcaption class="mt-3 text-sm text-center text-gray-500">
            {{$post->title}}
          </figcaption>
        </figure>

        <p class="text-lg text-gray-800">{{$post->body}}</p>

      </div>
      <!-- End Content -->
    </div>
  </div>
  <!-- End Blog Article -->



@include('layouts.footer')
@include('layouts.footscript')
</body>

</html>
