<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.head')
</head>

<body>




    <!-- Invoice -->
    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10" id="GFG">
        <div class="sm:w-11/12 lg:w-3/4 mx-auto">
            <!-- Card -->
            <div class="flex flex-col p-4 sm:p-10 bg-white shadow-md rounded-xl">
                <!-- Grid -->
                <div class="flex justify-between">
                    <div>
                        <img src="https://webled.online/wp-content/uploads/2023/10/cropped-jd-95x67.png" alt="">
                        <h1 class="mt-2 text-lg md:text-xl font-semibold text-teal-600">WEBLED
                        </h1>
                    </div>
                    <!-- Col -->

                    <div class="text-end">
                        <h2 class="text-2xl md:text-3xl font-semibold text-gray-800">فاتورة رقم :
                            {{ $post->id }}
                        </h2>
                        <span class="mt-1 block text-gray-500">{{ $post->phone }}</span>

                    </div>
                    <!-- Col -->
                </div>
                <!-- End Grid -->

                <!-- Grid -->
                <div class="mt-8 grid sm:grid-cols-2 gap-3">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">فاتورة للاستاذ : </h3>
                        <h3 class="text-lg font-semibold text-gray-800">{{ $post->name }}</h3>

                    </div>
                    <!-- Col -->

                    <div class="sm:text-end space-y-2">
                        <!-- Grid -->
                        <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                            <dl class="grid sm:grid-cols-5 gap-x-3">
                                <dt class="col-span-3 font-semibold text-gray-800">تاريخ
                                    الفاتورة:
                                </dt>
                                <dd class="col-span-2 text-gray-500">{{ $post->created_at }}</dd>
                            </dl>

                        </div>
                        <!-- End Grid -->
                    </div>
                    <!-- Col -->
                </div>
                <!-- End Grid -->

                <!-- Table -->
                <div class="mt-6">
                    <div class="border border-gray-200 p-4 rounded-lg space-y-4">
                        <div class="hidden sm:grid sm:grid-cols-5">
                            <div class="sm:col-span-2 text-xs font-medium text-gray-500 uppercase">المنتج</div>
                        </div>

                        <div class="hidden sm:block border-b border-gray-200"></div>

                        <div class="grid grid-cols-3 sm:grid-cols-5 gap-2  text-center">
                            <div class="col-span-full sm:col-span-2">
                                <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">المنتج</h5>
                                <p class="font-medium text-gray-800">{{ $post->stats }}</p>
                            </div>
                        </div>

                        <div class="sm:hidden border-b border-gray-200"></div>


                    </div>
                </div>
                <!-- End Table -->

                <!-- Flex -->
                <div class="mt-8 flex sm:justify-end">
                    <div class="w-full max-w-2xl sm:text-end space-y-2">
                        <!-- Grid -->
                        <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                            <dl class="grid sm:grid-cols-5 gap-x-3">
                                <dt class="col-span-3 font-semibold text-gray-800">الاجمالي:</dt>
                                <dd class="col-span-2 text-gray-500">
                                    @if ($post->stats == 'تصميم صفحة هبوط UI & UX')
                                        ${{ 1200 / 30.9 }}
                                    @elseif ($post->stats == 'تصميم موقع كامل UI & UX')
                                        ${{ 2500 / 30.9 }}
                                    @elseif ($post->stats == 'برمجة صفحة هبوط ')
                                        ${{ 2900 / 30.9 }}
                                    @elseif ($post->stats == 'برمجة موقع كامل')
                                        ${{ 6000 / 30.9 }}
                                    @elseif ($post->stats == 'برمجة منصة تعليمية')
                                        ${{ 15000 / 30.9 }}
                                    @elseif ($post->stats == 'برمجة نظام ERP')
                                        ${{ 25000 / 30.9 }}
                                    @elseif ($post->stats == 'برمجة تطبيق Android')
                                        ${{ 6000 / 30.9 }}
                                    @elseif ($post->stats == 'برمجة تطبيق IOS')
                                        ${{ 8000 / 30.9 }}
                                    @elseif ($post->stats == 'تصميم لوجو')
                                        ${{ 1700 / 30.9 }}
                                    @elseif ($post->stats == 'تصميم ميديا')
                                        ${{ 150 / 30.9 }}
                                    @elseif ($post->stats == 'تصميم هوية بصرية')
                                        ${{ 2500 / 30.9 }}
                                    @elseif ($post->stats == 'باكج 10 ساعات تصوير')
                                        ${{ 1500 / 30.9 }}
                                    @elseif ($post->stats == 'باكج 15 ساعة تصوير')
                                        ${{ 2000 / 30.9 }}
                                    @elseif ($post->stats == 'باكج 25 ساعة تصوير')
                                        ${{ 3000 / 30.9 }}
                                    @elseif ($post->stats == 'باكج 50 ساعة تصوير')
                                        ${{ 6500 / 30.9 }}
                                    @elseif ($post->stats == 'اعلانات facebook')
                                        ${{ 5000 / 30.9 }}
                                    @elseif ($post->stats == 'اعلانات instgram')
                                        ${{ 5000 / 30.9 }}
                                    @elseif ($post->stats == 'اعلانات snapchat')
                                        ${{ 5000 / 30.9 }}
                                    @elseif ($post->stats == 'اعلانات tiktok')
                                        ${{ 5000 / 30.9 }}
                                    @elseif ($post->stats == 'اعلانات google')
                                        ${{ 5000 / 30.9 }}
                                    @endif
                                </dd>
                            </dl>
                        </div>
                        <!-- End Grid -->
                    </div>
                </div>
                <!-- End Flex -->

                <div class="mt-8 sm:mt-12">
                    <h4 class="text-lg font-semibold text-gray-800">شكرا جزيلا </h4>
                    <p class="text-gray-500">شكرا جزيلا علي طلبك احد خدماتنا </p>
                    <div class="mt-2">
                        <p class="block text-sm font-medium text-gray-800">webled@gmx.com</p>
                        <p class="block text-sm font-medium text-gray-800">+201080482262</p>
                    </div>
                </div>

                <p class="mt-5 text-sm text-gray-500">© <span id="year"></span> WEBLED.</p>
            </div>
            <!-- End Card -->

            <!-- Buttons -->
            <div class="mt-6 flex justify-end gap-x-3">
                <input type="button" value="تحميل PDF" onclick="printDiv()"  class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-lg border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm">


                <script>
                    function printDiv() {
                        window.print();
                    }
                </script>

            </div>
            <!-- End Buttons -->
        </div>
    </div>
    <!-- End Invoice -->






    @include('layouts.footscript')
</body>

</html>
