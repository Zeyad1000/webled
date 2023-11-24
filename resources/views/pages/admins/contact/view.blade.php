<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.head')
    @section('Home')
    @endsection
</head>

<body>
    @include('layouts.nav')

    <!-- Content -->
    <div class="relative h-screen">
        <div class="py-10 lg:py-14">
            <!-- Title -->
            <div class="max-w-4xl px-4 sm:px-6 lg:px-8 mx-auto text-center">

                <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl">
                    رسائل الدعم
                </h1>
                <p class="mt-3 text-gray-600">
                    كل رسايل العملاء هتلاقيها هنا
                </p>
            </div>
            <!-- End Title -->

            <ul class="mt-16 space-y-5">

                @foreach ($posts as $post)
                    <!-- Chat Bubble -->
                    <li class="max-w-4xl py-2 px-4 sm:px-6 lg:px-8 mx-auto flex gap-x-2 sm:gap-x-4">
                        <img src="data:image/jpeg;base64,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"
                            alt="" class="flex-shrink-0 w-[3rem] h-[3rem] rounded-full">


                        <div class="space-y-3">
                            <h2 class="font-medium text-gray-800">
                                {{$post->name}}
                            </h2>
                            <div class="space-y-0.5">
                                <p class="mb-1 text-md text-black">
                                    phone : {{$post->phone}}
                                </p>
                                <p class="mb-1 text-md text-black">
                                    email : {{$post->email}}
                                </p>
                                <ul class="list-disc list-outside space-y-1.5 ps-3.5">
                                    <li class="text-sm text-gray-800">
                                        {{$post->text}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- End Chat Bubble -->
                @endforeach

            </ul>


        </div>


    </div>
    </div>
    <!-- End Content -->
    @include('layouts.footscript')
</body>

</html>
