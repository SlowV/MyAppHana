<?php $__env->startSection('page-title', 'Thêm mới sản phẩm'); ?>
<?php $__env->startSection('title-content', 'Đăng sản phẩm'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="padding: 10px;">
                    <div class="row">
                        <div class="col-md-12">
                            <form enctype="multipart/form-data" action="/admin/product" name="form-edit" method="post" >
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="form-group col-xs-6 has-warning">
                                        <label class="control-label">Tên</label>
                                        <input type="text" name="name" class="form-control" placeholder="Tên sản phẩm">
                                    </div>
                                    <div class="form-group col-xs-6 has-warning">
                                        <label class="control-label">Danh mục</label>
                                        <select class="form-control" name="categoryId">
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>" class="form-control"><?php echo e($item->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-6 has-warning">
                                        <label class="control-label">Giá</label>
                                        <input type="text" name="price" class="form-control" placeholder="Giá sản phẩm">
                                        <label class="text-danger"></label>
                                    </div>
                                    <div class="form-group col-xs-6 has-warning">
                                        <label class="control-label">Bộ sưu tập:</label>
                                        <select class="form-control" name="collectionId">
                                            <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>" class="form-control"><?php echo e($item->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-6 has-warning">
                                        <label class="control-label">Giá khuyến mãi:</label>
                                        <input type="text" name="sale" class="form-control" placeholder="Giá khuyến mãi." value="0">
                                    </div>
                                    <div class="form-group col-xs-6 has-warning">
                                        <label class="control-label">Thông tin</label>
                                        <input type="text" name="description" class="form-control" placeholder="Thông tin tóm tắt">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-6 has-warning">
                                        <label class="control-label">Ảnh</label> <br>
                                        <span class="btn btn-default btn-file">
                                        <i class="pe-7s-upload"></i> Chọn file<input type="file" name="images">
                                    </span>
                                        <span class="filename text-muted small" id="file-name">Chưa ảnh nào được chọn...</span>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <img src="" id="review-image" class="thumbnail hidden imgAvatar" style="height: 120px;margin-top: 10px;object-fit: cover">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-6 has-warning">
                                        <label class="control-label">Chi tiết</label>
                                        <textarea name="detail" id="" cols="30" rows="8" class="form-control" placeholder="Thông tin chi tiết"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group text-center">
                                        <button class="btn btn-primary" type="submit" style="width: 100px" title="Vui lòng nhập các đầy đủ thông tin bên trên.">
                                            <a href="#"></a>Save</button>&nbsp;&nbsp;
                                        <button class="btn btn-default" type="reset" style="width: 100px" id="btn-reset">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', ['currentPage'=>'form-create'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>