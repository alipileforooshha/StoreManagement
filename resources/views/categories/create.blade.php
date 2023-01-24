<div class="container-fluid">
    <div class="row flex-nowrap">
        @include("./includes/sidebar")
        <div class="col border d-flex flex-column justify-content-center p-2 align-items-center">
            <form method="post" action="{{route('categories.store')}}" class="d-flex flex-column w-100 justify-content-center align-items-center">
                <div class="d-flex flex-column form-group w-50 my-1">
                    <label for="" class="form-label">نام</label>
                    <input type="text" name="name" class="form-control text-center  " />
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="d-flex flex-column form-group w-50 justify-content-center my-1">
                    @csrf
                    <button type="submit" class="btn btn-success w-100">اضافه کردن</button>
                </div>
            </form>
        </div>
    </div>
</div>