<div class="container-fluid">
    <div class="row flex-nowrap">
        @include("./includes/sidebar")
        <div class="col border d-flex flex-column justify-content-center p-2 align-items-center">
            @if($errors->any())
                <h6 class="text-danger">{{$errors->first()}}</h6>
            @endif
            <form method="post" action="{{route('customers.store')}}" class="d-flex flex-column w-100 justify-content-center align-items-center">
                <div class="d-flex flex-column form-group w-50 my-1">
                    <label for="">نام مشتری</label>
                    <input type="text" name="name" class="form-control w-100 text-center"></input>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('item_id') }}</span>
                    @endif
                </div>
                <div class="d-flex flex-column form-group w-50 my-1">
                    <label for="">شماره موبایل</label>
                    <input type="text" name="mobile" class="form-control w-100 text-center">
                    </input>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('item_id') }}</span>
                    @endif
                </div>
                {{-- <div class="d-flex flex-column form-group w-50 my-1">
                    <label for="">تعداد</label>
                    <input type="text" name="number" class="form-control w-100 text-center">
                    </input>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('number') }}</span>
                    @endif
                </div> --}}
                <div class="d-flex flex-column form-group w-50 justify-content-center my-1">
                    @csrf
                    <button type="submit" class="btn btn-success w-100">اضافه کردن</button>
                </div>
            </form>
        </div>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

        <script type="text/javascript">

            $("#nameid").select2({
                    placeholder: "دسته بندی",
                    allowClear: true,
                    
                });
                $select = $("#nameid").select2({});
                $select.data('select2').$container.addClass('text-danger');
                $select.data('select2').$container.addClass('form-select');
                $select.data('select2').$container.addClass('text-center');
                $select.data('select2').$dropdown.addClass('text-center');
        </script>
    </div>
</div>