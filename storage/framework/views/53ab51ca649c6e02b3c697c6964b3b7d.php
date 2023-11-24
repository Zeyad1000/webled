<!DOCTYPE html>
<html lang="en">

<head>
    
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
                            <?php echo e($post->id); ?>

                        </h2>
                        <span class="mt-1 block text-gray-500"><?php echo e($post->phone); ?></span>

                    </div>
                    <!-- Col -->
                </div>
                <!-- End Grid -->

                <!-- Grid -->
                <div class="mt-8 grid sm:grid-cols-2 gap-3">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">فاتورة للاستاذ : </h3>
                        <h3 class="text-lg font-semibold text-gray-800"><?php echo e($post->name); ?></h3>

                    </div>
                    <!-- Col -->

                    <div class="sm:text-end space-y-2">
                        <!-- Grid -->
                        <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                            <dl class="grid sm:grid-cols-5 gap-x-3">
                                <dt class="col-span-3 font-semibold text-gray-800">تاريخ
                                    الفاتورة:
                                </dt>
                                <dd class="col-span-2 text-gray-500"><?php echo e($post->created_at); ?></dd>
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
                                <p class="font-medium text-gray-800"><?php echo e($post->stats); ?></p>
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
                                    <?php if($post->stats == 'تصميم صفحة هبوط UI & UX'): ?>
                                        $<?php echo e(1200 / 30.9); ?>

                                    <?php elseif($post->stats == 'تصميم موقع كامل UI & UX'): ?>
                                        $<?php echo e(2500 / 30.9); ?>

                                    <?php elseif($post->stats == 'برمجة صفحة هبوط '): ?>
                                        $<?php echo e(2900 / 30.9); ?>

                                    <?php elseif($post->stats == 'برمجة موقع كامل'): ?>
                                        $<?php echo e(6000 / 30.9); ?>

                                    <?php elseif($post->stats == 'برمجة منصة تعليمية'): ?>
                                        $<?php echo e(15000 / 30.9); ?>

                                    <?php elseif($post->stats == 'برمجة نظام ERP'): ?>
                                        $<?php echo e(25000 / 30.9); ?>

                                    <?php elseif($post->stats == 'برمجة تطبيق Android'): ?>
                                        $<?php echo e(6000 / 30.9); ?>

                                    <?php elseif($post->stats == 'برمجة تطبيق IOS'): ?>
                                        $<?php echo e(8000 / 30.9); ?>

                                    <?php elseif($post->stats == 'تصميم لوجو'): ?>
                                        $<?php echo e(1700 / 30.9); ?>

                                    <?php elseif($post->stats == 'تصميم ميديا'): ?>
                                        $<?php echo e(150 / 30.9); ?>

                                    <?php elseif($post->stats == 'تصميم هوية بصرية'): ?>
                                        $<?php echo e(2500 / 30.9); ?>

                                    <?php elseif($post->stats == 'باكج 10 ساعات تصوير'): ?>
                                        $<?php echo e(1500 / 30.9); ?>

                                    <?php elseif($post->stats == 'باكج 15 ساعة تصوير'): ?>
                                        $<?php echo e(2000 / 30.9); ?>

                                    <?php elseif($post->stats == 'باكج 25 ساعة تصوير'): ?>
                                        $<?php echo e(3000 / 30.9); ?>

                                    <?php elseif($post->stats == 'باكج 50 ساعة تصوير'): ?>
                                        $<?php echo e(6500 / 30.9); ?>

                                    <?php elseif($post->stats == 'اعلانات facebook'): ?>
                                        $<?php echo e(5000 / 30.9); ?>

                                    <?php elseif($post->stats == 'اعلانات instgram'): ?>
                                        $<?php echo e(5000 / 30.9); ?>

                                    <?php elseif($post->stats == 'اعلانات snapchat'): ?>
                                        $<?php echo e(5000 / 30.9); ?>

                                    <?php elseif($post->stats == 'اعلانات tiktok'): ?>
                                        $<?php echo e(5000 / 30.9); ?>

                                    <?php elseif($post->stats == 'اعلانات google'): ?>
                                        $<?php echo e(5000 / 30.9); ?>

                                    <?php endif; ?>
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






    <?php echo $__env->make('layouts.footscript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>

<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravelsProjects\final-web-led\resources\views/pages/admins/invoicess/addinvoicess.blade.php ENDPATH**/ ?>