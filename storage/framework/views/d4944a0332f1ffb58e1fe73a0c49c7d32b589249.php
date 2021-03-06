<?php $__env->startSection('page-title', 'HanaStore - Register'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 margin-top">
            <div class="panel panel-warning">
                <div class="panel-heading text-center text-uppercase" style="font-size: 25px;font-weight: bold">
                    Register
                </div>
                <div class="panel-body">
                    <form action="/admin/register" method="post" id="form-register">
                        <?php echo e(csrf_field()); ?>

                        <div class="row">
                            <div class="form-group col-xs-6 has-warning" id="input-username">
                                <label class="control-label" for="name">Username:</label>
                                <input type="text" class="form-control" name="username" id="username"
                                       placeholder="Username" required>
                                <span class="fas form-control-feedback hidden success-name "
                                ></span>
                                <label class="text-danger small hidden text-small text-capitalize" id="messageNameError"></label>
                            </div>
                            <div class="form-group col-xs-6 has-warning" id="input-password">
                                <label class="control-label" for="password">Password:</label>
                                <input type="password" class="form-control" name="password" id="password"
                                       placeholder="Password" required>
                                <span class="fas form-control-feedback hidden success-password "
                                      ></span>
                                <label class="text-danger small hidden text-small text-capitalize" id="messagePasswordError"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6 has-warning" id="input-email">
                                <label class="control-label" for="email">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                       required>
                                <span class="fas form-control-feedback hidden success-email"></span>
                                <label class="text-danger small hidden text-small text-capitalize" id="messageEmailError"></label>
                            </div>
                            <div class="form-group col-xs-6 has-warning " id="input-re-password">
                                <label class="control-label">Confirm Password:</label>
                                <input type="password" class="form-control" name="password_confirmation"
                                       id="password_confirmation" placeholder="Confirm password" required>
                                <span class="fas form-control-feedback hidden success-confirm-password "
                                     ></span>
                                <label class="text-danger small hidden text-small text-capitalize"
                                       id="messageConfirmPasswordError"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6 has-warning">
                                <label class="control-label">Gender:</label>
                                <select name="gender" id="" class="form-control">
                                    <option value="0" selected>Other</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-xs-6 has-warning">
                                <label class="control-label">BirthDay:</label>
                                <input type="date" id="birthDay" name="birthDay" required class="form-control">
                                <span class="fas form-control-feedback hidden success-birthday text-capitalize"
                                      style="line-height: 250%; right: 13px"></span>
                                <label class="text-danger small hidden text-small" id="messageBirthDayError"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6 has-warning">
                                <label class="control-label">Address detail:</label>
                                <input type="text" class="form-control" name="addressDetail" required
                                       placeholder="Address" id="addressDetail">
                                <label class="text-danger small hidden text-small text-capitalize"
                                       id="messageAddressDetailError"></label>
                            </div>
                            <div class="form-group col-xs-2 has-warning">
                                <label class="control-label">City:</label>
                                <input type="text" class="form-control" name="city" required placeholder="City"
                                       id="city">
                                <span class="fas form-control-feedback hidden success-city text-success"
                                ></span>
                                <label class="text-danger small hidden text-small text-capitalize" id="messageCityError"></label>
                            </div>
                            <div class="form-group col-xs-2 has-warning">
                                <label class="control-label">County:</label>
                                <input type="text" class="form-control" name="county" required placeholder="County"
                                       id="county">
                                <span class="fas form-control-feedback hidden success-county text-success"
                                ></span>
                                <label class="text-danger small hidden text-small text-capitalize" id="messageCountyError"></label>
                            </div>
                            <div class="form-group col-xs-2 has-warning">
                                <label class="control-label">Ward:</label>
                                <input type="text" class="form-control" name="ward" required placeholder="Ward"
                                       id="ward">
                                <span class="fas form-control-feedback hidden success-ward text-success"
                                      ></span>
                                <label class="text-danger small hidden text-small text-capitalize" id="messageWardError"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6 has-warning">
                                <label class="control-label">Avatar:</label>
                                <br>
                                <span class="btn btn-default btn-file">
                                     <i class="pe-7s-upload"></i> Choose...<input type="file" name="images" id="images">
                                </span>
                                <span class="filename text-muted">Nothing selected...</span>

                            </div>
                            <div class="form-group col-xs-6 has-warning ">
                                <label class="control-label">Phone:</label>
                                <input type="text" class="form-control" placeholder="Phone" required name="phone"
                                       id="phone">
                                <span class="fas form-control-feedback hidden success-phone"
                                      ></span>
                                <label class="text-danger small hidden text-small text-capitalize" id="messagePhoneError"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <img src="" id="review-image" class="thumbnail hidden imgAvatar" style="height: 100px">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 text-center">
                                <button type="submit" class="btn btn-info" style="width: 100px">Sign up</button>
                                <button type="reset" class="btn btn-default" style="width: 100px" id="btn-reset">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master-login', ['curentPage'=>'register'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>