<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.head')
    @section('Home')
    @endsection
</head>

<body>
    @include('layouts.nav')


<!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
        <h2 class="text-2xl font-bold md:text-4xl md:leading-tight">اخر اعمالنا</h2>
        <p class="mt-1 text-gray-600">تصفح اخر اعمالنا في كل المجالات </p>
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($posts as $post )
        <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5"
            href="{{route('projects.show',$post->id)}}">
            <div class="aspect-w-16 aspect-h-11">
                <img class="w-full object-cover rounded-xl"
                    src="{{$post->photo}}"
                    alt="Image Description">
            </div>
            <div class="my-6">
                <h3 class="text-xl font-semibold text-gray-800">
                    {{$post->title}}
                </h3>
                <p class="mt-5 text-gray-600">
                    {{$post->desc}}
                </p>
            </div>
            <div class="mt-auto flex items-center gap-x-3">
                <img class="w-8 h-8 rounded-full"
                    src="https://scontent.fcai19-8.fna.fbcdn.net/v/t39.30808-6/384342362_122138039540010660_4573900676707976879_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFcynmF8VXO0gMb-TUjiS1b1r_FYDKqRVTWv8VgMqpFVFkJKo5t_kOJl_KD5ux5YOHhvVhYh9HqEGiEWO7YhZ-J&_nc_ohc=W-yc2bl7YRoAX_a-Bms&_nc_ht=scontent.fcai19-8.fna&oh=00_AfApSpPFqaasYY3XQFjAn3Yfp-p10yzMXE2pHeaRV-Jf-Q&oe=6564396E"
                    alt="Image Description">
                <div>
                    <h5 class="text-sm text-gray-800">Zeyad Shalaby</h5>
                </div>
            </div>
        </a>
        @endforeach
        <!-- Card -->

        <!-- End Card -->

    </div>
    <!-- End Grid -->


</div>
<!-- End Card Blog -->
@include('layouts.footer')
@include('layouts.footscript')
</body>

</html>
