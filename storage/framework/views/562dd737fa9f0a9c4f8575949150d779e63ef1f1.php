<?php $__env->startSection('page-title', 'Danh sách sản phẩm'); ?>
<?php $__env->startSection('title-content', 'Danh sách sản phẩm'); ?>
<?php $__env->startSection('content'); ?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table">
                            <thead style="background-color: #390F18;">
                            <tr class="row">
                                <th>&nbsp;</th>
                                <th class="text-center text-white">Mã</th>
                                <th class="text-center text-white">Tên</th>
                                <th class="text-center text-white">Ảnh</th>
                                <th class="text-center text-white">Giá</th>
                                <th class="text-center text-white">Sale</th>
                                <th class="text-center text-white">Danh mục</th>
                                <th class="text-center text-white">Bộ sưu tập</th>
                                
                                <th class="text-center text-white">Trạng thái</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="row" id="row-item-<?php echo e($item->id); ?>">
                                    <td class="text-center">
                                        <div class="checkbox">
                                            <input id="checkbox<?php echo e($item->id); ?>" type="checkbox"
                                                   class="check-item">
                                            <label for="checkbox<?php echo e($item->id); ?>"></label>
                                        </div>
                                    </td>
                                    <td class="text-center"><?php echo e($item -> id); ?></td>
                                    <td class="text-center"><?php echo e($item-> name); ?></td>
                                    <td class="text-center">
                                        <div class="card"
                                             style="width: 100px; height: 100px;border-radius: 5px; margin-left: 40px; margin-top: 20px;">
                                            <div style="height: 100px;
                                                    background-image: url('<?php echo e($item->images); ?>');
                                                    background-size: cover;width: 100px;border-radius: 5px;" class="showImage">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center"><?php echo e(number_format($item-> price,0,',','.')); ?></td>
                                    <td class="text-center"><?php echo e(number_format($item-> sale,0,',','.')); ?></td>
                                    <td class="text-center"><?php echo e($item->category-> name); ?></td>
                                    <td class="text-center"><?php echo e($item->collection->name); ?></td>
                                    
                                    <td class="text-center">
                                        <?php if($item->status == 1): ?> Còn hàng
                                        <?php elseif($item-> status == 2): ?> Hết hàng
                                        <?php endif; ?>
                                    </td>
                                    <td class="td-actions text-right text-center">
                                        <button type="button" rel="tooltip"
                                                title="Sửa"
                                                class="btn btn-info btn-simple btn-xs btn-edit">
                                            <a href="#"> <i class="fa fa-edit"></i></a>
                                        </button>
                                        <button type="button" rel="tooltip"
                                                title="Xóa"
                                                class="btn btn-danger btn-simple btn-xs btn-delete"
                                                id="<?php echo e($item-> id); ?>">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="checkbox form-group col-md-2 ">
                                <input id="checkbox-all" type="checkbox" class="form-control">
                                <label for="checkbox-all">Tất cả</label>
                            </div>
                            <div class="form-group col-md-3">
                                <select name="" id="select-action" class="form-control selcls">
                                    <option value="0">Chọn phương thức</option>
                                    <option value="1">Xóa mục đã chọn</option>
                                    <option value="2">Chức năng khác</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary"
                                        id="btn-apply">Thực hiện</button>
                            </div>
                            <div class="col-md-4 form-group text-center">
                                <?php echo e($products->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="alert alert-info" role="alert" id="messageHello" style="border-radius: 5px"></div>
    

    
    <!-- The Modal -->
    <div id="myModalImage" class="modal-image">
        <span class="close-image">&times;</span>
        <img class="modal-content-image" id="img01">
    </div>
    

    
    <div class="modal fade" id="modalDelete" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Xóa sản phẩm</h4>
                </div>
                <div class="modal-body">
                    <p>Bạn có chắc muốn xóa?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                    <button type="button" class="btn btn-primary" id="accept">Đồng ý</button>
                </div>
            </div>
        </div>
    </div>

    
    <form action="" method="POST" enctype="multipart/form-data" id="form-delete" >
        <?php echo e(csrf_field()); ?>

        <?php echo method_field('DELETE'); ?>
    </form>
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', ['currentPage' => 'list-product'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>