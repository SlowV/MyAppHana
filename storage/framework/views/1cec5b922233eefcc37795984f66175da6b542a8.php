<?php $__env->startSection('page-title', 'Create new product'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr class="row">
                            <th>&nbsp;</th>
                            <th class="text-center"><?php echo e(__('content.ma')); ?></th>
                            <th class="text-center"><?php echo e(__('content.ten')); ?></th>
                            <th class="text-center"><?php echo e(__('content.anh')); ?></th>
                            <th class="text-center"><?php echo e(__('content.danh.muc')); ?></th>
                            <th class="text-center"><?php echo e(__('content.gia')); ?></th>
                            <th class="text-center"><?php echo e(__('content.thong.tin')); ?></th>
                            <th class="text-center"><?php echo e(__('content.ngay.tao')); ?></th>
                            <th class="text-center"><?php echo e(__('content.trang.thai')); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="checkbox form-group col-md-2 ">
                            <input id="checkbox-all" type="checkbox" class="form-control">
                            <label for="checkbox-all"><?php echo e(__('content.tat.ca')); ?></label>
                        </div>
                        <div class="form-group col-md-3">
                            <select name="" id="select-action" class="form-control selcls">
                                <option value="0"><?php echo e(__('content.chon.phuong.thuc')); ?></option>
                                <option value="1"><?php echo e(__('content.xoa.muc.da.chon')); ?></option>
                                <option value="2"><?php echo e(__('content.chuc.nang.khac')); ?></option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary"
                                    id="btn-apply"><?php echo e(__('content.thuc.hien')); ?></button>
                        </div>
                        <div class="col-md-4 form-group text-center">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', ['currentPage' => 'form-create'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>