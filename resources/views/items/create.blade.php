<div class="container-fluid">
    <div class="row flex-nowrap">
        @include("./includes/sidebar")
        <div class="col border d-flex flex-column justify-content-center p-2 align-items-center">
            <form method="post" action="{{route('items.store')}}" class="d-flex flex-column w-100 justify-content-center align-items-center">
                <div class="d-flex flex-column form-group w-50 my-1">
                    <label for="" class="form-label">نام</label>
                    <input type="text" name="name" class="form-control text-center  " />
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="d-flex flex-column form-group w-50 my-1">
                    <label for="" class="form-label">قیمت خرید</label>
                    <input type="text" name="buy_price" class="form-control text-center" />
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('buy_price') }}</span>
                    @endif
                </div>
                <div class="d-flex flex-column form-group w-50 my-1">
                    <label for="" class="form-label">قیمت فروش</label>
                    <input type="text" name="sell_price" class="form-control text-center" />
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('sell_price') }}</span>
                    @endif
                </div>
                <div class="d-flex flex-column form-group w-50 my-1">
                    <label for="" class="form-label">دسته بندی</label>
                    <select type="text" name="category_id" id="nameid" />
                        <option></option>    
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('category_id') }}</span>
                    @endif
                </div>
                <div class="d-flex flex-column form-group w-50 justify-content-center my-1">
                    <label for="" class="form-label">تعداد</label>
                    <input type="text" name="count" class="form-control text-center" />
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('count') }}</span>
                    @endif
                </div>
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