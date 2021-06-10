<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supper Admin</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('logo.png')); ?>" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <style>
        .categories-section{
            display: none;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <style>
        div.dataTables_wrapper div.dataTables_paginate{
            display: none;
        }
    </style>

</head>
<body>
<div class="loader-svg" id="loaderSvg">
    <img src="<?php echo e(asset('images/loading/loading.svg')); ?>" alt="">
</div>

<div id="app">

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Admin Management</h6>
                <a class="btn btn-sm float-right btn-primary" data-toggle="modal" data-target="#staticBackdrop">Add a Admin</a>
                <a class="btn btn-sm float-right btn-primary" href="/logout">Log Out</a>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered small" id="dataTable">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($admin->hasRole('admin')): ?>
                                <tr>
                                    <td><?php echo e($admin->id); ?></td>
                                    <td><?php echo e($admin->name); ?></td>
                                    <td><?php echo e($admin->email); ?></td>
                                    <td> <span class="badge p-2 <?php echo e($admin->status ?'badge-primary':'badge-secondary'); ?>"><?php echo e($admin->status); ?></span> </td>
                                    <td><?php echo e($admin->updated_at); ?></td>
                                    <td>
                                        <form method="POST" action="<?php echo e(route('users.destroy',[$admin->id])); ?>">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button class="btn btn-danger btn-sm dltBtn" data-id=<?php echo e($admin->id); ?>  title="Delete"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php echo $__env->make('admin.admin-inc.datatable-delete-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>

</div>

<!----------------- Modal ------------------------>
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">New Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="add-admin" method="POST" action="<?php echo e(route('add-admin')); ?>">
                    <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="Username">User Name</label>
                                <input type="text" class="form-control form-control-sm" placeholder="User Name" name="name">
                            </div>


                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control form-control-sm" placeholder="Email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="email">Password</label>
                                <input type="password" class="form-control form-control-sm" placeholder="Password" name="pass">
                            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="b-add-admin" type="submit" class="btn btn-primary">Add-admin</button>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<script src="<?php echo e(asset('js/shop.js')); ?>"></script>
<script>

    $('#b-add-admin').click(function (e) {
        $('#add-admin').submit()
    })
    $(document).ready(function(){
        $('#dataTable').DataTable();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //Sweet alert deleting modal
        $(".dltBtn").click(function(e) {
            var form = $(this).closest("form");
            var dataID = $(this).data("id");
            // alert(dataID);
            e.preventDefault();
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true
            }).then(willDelete => {
                if (willDelete) {
                    form.submit();
                } else {
                    swal("Your data is safe!");
                }
            });
        });
    })
</script>
</body>
</html><?php /**PATH C:\Users\emad\Desktop\final-final-project\resources\views/shipper/index.blade.php ENDPATH**/ ?>