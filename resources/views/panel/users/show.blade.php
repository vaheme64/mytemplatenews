@extends('panel.main')
@section('extra-header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('panel')}}/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('panel')}}/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('panel')}}/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('panel')}}/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="{{asset('panel')}}/plugins/summernote/css/summernote.css" rel="stylesheet" type="text/css" media="screen">
    <link href="{{asset('panel')}}/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="{{asset('panel')}}/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" media="screen">
    <link class="main-stylesheet" href="{{asset('panel')}}/pages/css/themes/corporate.css" rel="stylesheet" type="text/css" />


    <style>
        #tableWithSearch{
            direction: rtl;
        }
        .select2-container--open .select2-dropdown--below{
            z-index:9999;
        }
    </style>
@endsection
@section('content')

    <!-- START PAGE CONTENT -->
    <div class="content ">
        <!-- MODAL STICK UP  -->
        {{--<div class="modal fade stick-up" id="addNewAppModal" tabindex="-1" role="dialog" aria-labelledby="addNewAppModal" aria-hidden="true">--}}
            {{--<div class="modal-dialog">--}}
                {{--<div class="modal-content">--}}
                    {{--<div class="modal-header clearfix ">--}}
                        {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>--}}
                        {{--</button>--}}
                        {{--<h4 class="p-b-5">نقش <span class="semi-bold">جدید</span></h4>--}}
                    {{--</div>--}}
                    {{--<div class="modal-body">--}}
                        {{--<p class="small-text">برای نقش جدید فرم زیر را پر کنید</p>--}}
                        {{--<form role="form" method="post" id="form1" action="{{route('register')}}">--}}
                            {{--@csrf--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-12">--}}
                                    {{--<div class="form-group form-group-default">--}}
                                        {{--<label for="appName">نام کاربر</label>--}}
                                        {{--<input id="appName" type="text" name="name" class="form-control" placeholder="نام کاربر ...">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-12">--}}
                                    {{--<div class="form-group form-group-default">--}}
                                        {{--<label for="appEmail">نام کاربر</label>--}}
                                        {{--<input id="appEmail" type="email" name="email" class="form-control" placeholder="ایمیل ...">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-12">--}}
                                    {{--<div class="form-group form-group-default">--}}
                                        {{--<label for="kindUser"></label>--}}
                                        {{--<select class=" full-width" name='roles[]' id='kindUser' data-init-plugin="select2" >--}}

                                                {{--<option value="1">کابرعادی</option>--}}
                                                {{--<option value="2">کارمند</option>--}}

                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-12">--}}
                                    {{--<div class="form-group form-group-default">--}}
                                        {{--<label>کلمه عبور</label>--}}
                                        {{--<input id="appPassword" type="password" name="password" class="form-control" placeholder="کلمه عبور ...">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-12">--}}
                                    {{--<div class="form-group form-group-default">--}}
                                        {{--<label>تکرار کلمه عبور</label>--}}
                                        {{--<input id="appPassword" type="password" name="password-confirm" class="form-control" placeholder="کلمه عبور ...">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                    {{--<div class="modal-footer">--}}
                        {{--<button class="btn btn-cons" data-dismiss="modal">بستن</button>--}}
                        {{--<button id="add-app"  type="submit"  class="btn btn-primary  btn-cons">اضافه کردن</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- /.modal-content -->--}}
            {{--</div>--}}
            {{--<!-- /.modal-dialog -->--}}
        {{--</div>--}}
        <div class="modal fade stick-up" id="editNewAppModal" tabindex="-1" role="dialog" aria-labelledby="addNewAppModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header clearfix ">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="pg-close fs-14"></i>
                        </button>
                        <h4 class="p-b-5">ویرایش <span class="semi-bold">کاربر</span></h4>
                    </div>
                    <div class="modal-body">
                        <p class="small-text">برای ویرایش کاربر فرم زیر را پر کنید</p>
                        <form role="form" method="post" id="form2" action="{{route('register')}}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label for="appName">نام کاربر</label>
                                        <input id="appName" type="text" name="name" class="form-control" placeholder="نام کاربر ...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label for="appEmail">ایمیل</label>
                                        <input id="appEmail" type="email" name="email" class="form-control" placeholder="ایمیل ...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label for="kindUser"></label>
                                        <select class=" full-width" name='users[]' id='kindUser' data-init-plugin="select2" >
                                            <option value="0">کابرعادی</option>
                                            <option value="1">کارمند</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label for="roles"></label>
                                        <select class=" full-width" name='roles[]' id='roles' data-init-plugin="select2" >
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label for="permissions"></label>
                                        <select class=" full-width" name='permissions[]' id='permissions' data-init-plugin="select2" >
                                            @foreach($permissions as $permission)
                                                <option value="{{$permission->id}}">{{$permission->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label>کلمه عبور</label>
                                        <input id="appPassword" type="password" name="password" class="form-control" placeholder="کلمه عبور ...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label>تکرار کلمه عبور</label>
                                        <input id="appConfirmPassword" type="password" name="password-confirm" class="form-control" placeholder="کلمه عبور ...">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-cons" data-dismiss="modal">بستن</button>
                        <button id="update-app"  type="submit"  class="btn btn-primary  btn-cons">ویرایش کردن</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- START JUMBOTRON -->
        <div class="jumbotron" data-pages="parallax">
            <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
                <div class="inner">
                    <!-- START BREADCRUMB -->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Tables</li>
                    </ol>
                    <!-- END BREADCRUMB -->
                    <div class="row">
                        <div class="col-xl-7 col-lg-6 ">
                            <!-- START card -->
                            <div class="full-height">
                                <div class="card-block text-center">
                                    <img class="image-responsive-height demo-mw-600" src="{{asset('panel')}}/img/demo/tables.jpg" alt="">
                                </div>
                            </div>
                            <!-- END card -->
                        </div>
                        <div class="col-xl-5 col-lg-6 ">
                            <!-- START card -->
                            <div class="card card-transparent">
                                <div class="card-header ">
                                    <div class="card-title"><p>توضیحات</p>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <h3>مدیریت کاربران</h3>
                                    {{--TODO: GOOD DESCRIPTION--}}
                                    <p>با تعریف نقش ها در این صفحه به هر فرد متناسب بانقشی که برای آن تعریف می کنید اجازه دسترسی بدهید. </p>
                                    {{--<p class="small hint-text m-t-5">VIA senior product manage--}}
                                    {{--<br> for UI/UX at REVOX</p>--}}
                                    {{--<br>--}}
                                    <button class="btn btn-primary btn-cons">More</button>
                                </div>
                            </div>
                            <!-- END card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END JUMBOTRON -->
        <!-- START CONTAINER FLUID -->
        <div class=" container-fluid   container-fixed-lg bg-white">
            <!-- START card -->

            <div class="card card-transparent text-left">
                <div class="card-header ">
                    <div class="card-title"><h4 class="bold">لیست کاربرها</h4>
                    </div>
                    <div class="pull-right">
                        <div class="col-xs-12">
                            <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="card-block text-right">
                    <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                        <thead>
                        <tr>
                            <th>اسم نقش</th>
                            {{--<th>Places</th>--}}
                            <th>توضیحات</th>
                            <th>نقش ها</th>
                            <th>تغییرات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>

                                <td class="v-align-middle semi-bold">
                                    <p>{{$user->name}}</p>
                                </td>
                                {{--<td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>--}}
                                {{--<a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>--}}
                                {{--</td>--}}
                                <td class="v-align-middle">
                                    <p>{{$user->email}}</p>
                                </td>
                                <td class="v-align-middle">@foreach($user->roles()->get() as $name)
                                        <a href="#" class="btn btn-tag">{{$name->name}}</a>
                                    @endforeach
                                    {{--<a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>--}}
                                </td>
                                <td class="v-align-middle">
                                    <a href="{{route('users.edit',$user->id)}}"  data-toggle="modal" data-target="#editNewAppModal" class="btn btn-primary edit-user">ویرایش</a>
                                    <form method="post" style="display: inline-block;" action="{{route('users.destroy',$user->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger ">حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END card -->
        </div>
        <!-- END CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->

        <!-- END CONTAINER FLUID -->
    </div>
    <!-- END PAGE CONTENT -->

@endsection
@section('extra-footer')
    <script src="{{asset('panel')}}/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="{{asset('panel')}}/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
    <script src="{{asset('panel')}}/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="{{asset('panel')}}/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('panel')}}/plugins/datatables-responsive/js/datatables.responsive.js"></script>
    <script type="text/javascript" src="{{asset('panel')}}/plugins/datatables-responsive/js/lodash.min.js"></script>
    <!-- END VENDOR JS -->
    <script src="{{asset('panel')}}/js/datatables.js" type="text/javascript"></script>

    <script src="{{asset('panel')}}/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script type="text/javascript" src="{{asset('panel')}}/plugins/jquery-autonumeric/autoNumeric.js"></script>
    <script type="text/javascript" src="{{asset('panel')}}/plugins/dropzone/dropzone.min.js"></script>
    <script type="text/javascript" src="{{asset('panel')}}/plugins/bootstrap-tag/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="{{asset('panel')}}/plugins/jquery-inputmask/jquery.inputmask.min.js"></script>
    <script src="{{asset('panel')}}/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
    <script src="{{asset('panel')}}/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="{{asset('panel')}}/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="{{asset('panel')}}/plugins/summernote/js/summernote.min.js" type="text/javascript"></script>
    <script src="{{asset('panel')}}/plugins/moment/moment.min.js"></script>
    <script src="{{asset('panel')}}/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="{{asset('panel')}}/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
    <script src="{{asset('panel')}}/plugins/bootstrap-typehead/typeahead.bundle.min.js"></script>
    <script src="{{asset('panel')}}/plugins/bootstrap-typehead/typeahead.jquery.min.js"></script>
    <script src="{{asset('panel')}}/plugins/handlebars/handlebars-v4.0.5.js"></script>
    <script src="{{asset('panel')}}/js/form_elements.js" type="text/javascript"></script>
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $('#add-app').on('click',function (e) {
                $.ajax({
                    type: "POST",
                    url: $('#form1').attr('action'),
                    data: $('#form1').serialize(),
                    success: function (result) {
                        consol.log(result);
                        // location.reload();
                    }
                })
            });
            // allPermission={!! json_encode($roles) !!};

            $(document).on('click','.edit-user',function(e){
                // e.preventDefault();
                let stringOptions="";
                $.ajax({
                    type: 'GET',
                    url: $(this).attr('href'),
                    success:function(result){
                        // console.log(result);
                        $("#form2").attr('action','/admin/users/'+result[0].id)
                        $("#form2 input[name='name']").val(result[0].name);
                        $("#form2 input[name='email']").val(result[0].email);
                        console.log(result[0].is_staff);
                        if(result[0].is_staff>=1){
                            $("#form2 select[name='users[]']").val(1).change();
                        }else{
                            $("#form2 select[name='users[]']").val(0).change();
                        }


                        allPermission=$("#form2 select[name='permissions[]']").children();
                        const role=result[1];
                        let options=[];
                        let selectedVar=false;
                        // for( res in role){
                            // console.log(role[res]);
                            // console.log(res)
                            // let id=role[res];
                            // if(res===allPermission[id]){
                            //
                            // }
                            // stringOptions +="<option value='"+role[res]+"'>"+res+"</option>";



                        //     let text=res;
                        //     let b={id,text};
                        //     // let b={ds};
                        //     options.push(b)
                        // }
                        // console.log(options);
                        // $("#form2 select[name='permissions[]']").empty().append(stringOptions);
                        // $(".dropdown-wrapper").append(stringOptions);

                        allPermission.each(function(index,value){
                            // console.log(index+"++++"+value.value);
                            for( res in role){
                                let id=role[res];
                                let currentOption=value;
                                console.log(value.value);
                                if(value.value==id){
                                    $(currentOption).attr('selected','selected');
                                    console.log($(currentOption))
                                }
                            stringOptions +=currentOption;
                            }
                            })
                            // console.log(stringOptions);
                    }
                });
            });
            $('#update-app').on('click',function (e) {
                $.ajax({
                    type: "PATCH",
                    url: $('#form2').attr('action'),
                    data: $('#form2').serialize(),
                    // data:{_token:'{{ csrf_token() }}', data: $('#form2').serialize()},
                    success: function (data) {
                        location.reload();
                        //                     var table = $('#tableWithSearch').DataTable( {
                        //                         ajax: data
                        //                     } );
                        //                     setInterval( function () {
                        //                         table.ajax.reload();
                        //                     }, 1000 );

                        //                     $('#tableWithSearch').DataTable({
                        // ajax:  {
                        //     url: {{url('permission.')}},
                        //     data: function(d){
                        //         d.param1 = "value1";
                        //         d.param2 = "value2";
                        //     }
                        // }
// });
                    }
                })
            });


        });
    </script>
@endsection
