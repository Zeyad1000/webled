<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.head')
</head>

<body>
    @include('layouts.nav')



    <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 p-8">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        اسم العميل
                    </th>
                    <th scope="col" class="px-6 py-3">
                        رقم الهاتف
                    </th>
                    <th scope="col" class="px-6 py-3">
                        الايميل
                    </th>
                    <th scope="col" class="px-6 py-3">
                        اسم الشركة او المشروع
                    </th>
                    <th scope="col" class="px-6 py-3">
                        الخدمة
                    </th>
                    <th scope="col" class="px-6 py-3">
                        العنوان
                    </th>
                    <th scope="col" class="px-6 py-3">
                        السعر
                    </th>
                    <th scope="col" class="px-6 py-3">
                        الفاتورة
                    </th>


                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $post->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $post->phone }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $post->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $post->company }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $post->stats }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $post->adrees }}
                        </td>
                        <td class="px-6 py-4">
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
                        </td>


                        <td class="px-6 py-4">
                            <a href="{{ route('invoices.show', $post->id) }}"><button type="button"
                                    class="text-white bg-teal-700 hover:bg-teal-800 focus:outline-none focus:ring-4 focus:ring-teal-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">عرض
                                    الفاتورة</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    @include('layouts.footer')
    @include('layouts.footscript')
</body>

</html>
