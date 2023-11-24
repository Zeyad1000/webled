<!DOCTYPE html>
<html lang="en">

<head>
    
</head>

<body>
    <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



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
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <?php echo e($post->name); ?>

                        </th>
                        <td class="px-6 py-4">
                            <?php echo e($post->phone); ?>

                        </td>
                        <td class="px-6 py-4">
                            <?php echo e($post->email); ?>

                        </td>
                        <td class="px-6 py-4">
                            <?php echo e($post->company); ?>

                        </td>
                        <td class="px-6 py-4">
                            <?php echo e($post->stats); ?>

                        </td>
                        <td class="px-6 py-4">
                            <?php echo e($post->adrees); ?>

                        </td>
                        <td class="px-6 py-4">
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
                        </td>


                        <td class="px-6 py-4">
                            <a href="<?php echo e(route('invoices.show', $post->id)); ?>"><button type="button"
                                    class="text-white bg-teal-700 hover:bg-teal-800 focus:outline-none focus:ring-4 focus:ring-teal-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">عرض
                                    الفاتورة</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>



    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.footscript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>

<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravelsProjects\final-web-led\resources\views/pages/admins/invoicess/viewinvoicess.blade.php ENDPATH**/ ?>