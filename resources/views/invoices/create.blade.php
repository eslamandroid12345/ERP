@extends('layout.master')
@section('css')
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <!---Internal Fancy uploader css-->
    <link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css') }}">
    <!--Internal  TelephoneInput css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css') }}">
@endsection
@section('title')
    اضافة فاتورة
@stop

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الفواتير</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    اضافة فاتورة</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- row -->
    <div class="row">

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('invoices.store')}}" method="post"
                          autocomplete="off">
                        {{ csrf_field() }}
                        {{-- 1 --}}

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                <label for="inputName" class="control-label">رقم الفاتورة</label>
                                <input type="text" class="form-control" id="inputName" name="invoice_number"
                                       title="يرجي ادخال رقم الفاتورة" >

                                <span class="text-danger"> @error('invoice_number') {{$message}} @enderror</span>

                            </div>

                            <div  class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                <label>تاريخ الفاتورة</label>
                                <input class="form-control" name="invoice_date"
                                       type="date">
                                <span class="text-danger"> @error('invoice_date') {{$message}} @enderror</span>

                            </div>


                        </div>



                        {{-- 2 --}}
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                <label for="inputName" class="control-label">القسم</label>
                                <select name="client_id" class="form-control SlectBox" onclick="console.log($(this).val())"
                                        onchange="console.log('change is firing')">
                                    <!--placeholder-->
                                    <option value="" selected disabled>اختيار عميل</option>

                                    @foreach($clients as $client)

                                    <option value="{{$client->id}}">{{$client->name}}</option>
                                    @endforeach

                                </select>
                                <span class="text-danger"> @error('client_id') {{$message}} @enderror</span>

                            </div>




                            <div class="col-lg-12 col-md-12 col-sm-12 mt-3">

                                @foreach($products as $product)
                                    <div class="form-group">

                                        <div class="form-check">
                                            <input data-id="{{ $product->id }}"  class="form-check-input ingredient-enable" type="checkbox" name="product[]" value="{{$product->id}}" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">{{$product->product_name}}</label>
                                            <span class="text-danger"> @error('product') {{$message}} @enderror</span>

                                        </div>
                                        <div>
                                            <input  class="ingredient-amount form-control"  data-id="{{ $product->id }}" type="number" name="quantity[]" placeholder="كميه المنتج"><br>
                                            <span class="text-danger"> @error('quantity') {{$message}} @enderror</span>

                                            <input class="form-control" type="number" name="total_amount[]" placeholder="الاجمالي">
                                            <span class="text-danger"> @error('total_amount') {{$message}} @enderror</span>

                                        </div>

                                    </div>
                                @endforeach


                            </div>

                        </div>


                        {{-- 3 --}}

                        <div class="row">

                            <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
                                <label for="inputName" class="control-label">الاجمالي</label>
                                <input type="number" class="form-control form-control-lg"
                                       name="total_paid">

                                <span class="text-danger"> @error('total_paid') {{$message}} @enderror</span>

                            </div>



                        </div>

                        {{-- 4 --}}


                     <br>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">حفظ البيانات</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal Fileuploads js-->
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!--Internal Fancy uploader js-->
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
    <!--Internal  Form-elements js-->
    <script src="{{ URL::asset('assets/js/advanced-form-elements.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.js') }}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{ URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
    <!-- Internal form-elements js -->
    <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>

{{--    <script>--}}
{{--        $('document').ready(function () {--}}
{{--            $('.ingredient-enable').on('click', function () {--}}
{{--                let id = $(this).attr('data-id')--}}
{{--                let enabled = $(this).is(":checked")--}}
{{--                $('.ingredient-amount[data-id="' + id + '"]').attr('disabled', !enabled)--}}
{{--                $('.ingredient-amount[data-id="' + id + '"]').val(null)--}}
{{--            })--}}
{{--        });--}}
{{--    </script>--}}


@endsection
