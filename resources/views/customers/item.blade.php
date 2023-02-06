<div class="container-fluid">
    <div class="row flex-nowrap">
        @include("../includes/sidebar")
        <div class="col border d-flex justify-content-center">
            <form action="{{route('customers.update',$customer->id)}}" method="post" class="d-flex w-50 flex-column justify-content-center align-items-between">
                <input type="hidden" name="_method" value="PUT" hidden>
                @csrf
                <div class="d-flex flex-column my-2">
                    <label for="" class="my-2 fs-5">نام مشتری</label>
                    <input type="text" name="name" class="form-control fs-5" value="{{$customer->name}}">
                </div>
                <div class="d-flex flex-column my-2">
                    <label for="" class="my-2 fs-5">قیمت موبایل</label>
                    <input type="text" name="mobile" class="form-control fs-5" value="{{$customer->mobile}}">
                </div>
                <div class="d-flex justify-content-around">
                    <button type="submit" class="btn btn-success">
                        بروزرسانی
                    </button>
                </form>
                    <form method="POST" action="{{route('customers.delete',$customer->id)}}">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE" hidden>
                        <button href="" class="btn btn-danger">
                            حذف
                        </button>
                    </form>
                </div>
        </div>
    </div>
</div>