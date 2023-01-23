<div class="container-fluid">
    <div class="row flex-nowrap">
        @include("../includes/sidebar")
        <div class="col border d-flex justify-content-center">
            <form action="{{route('items.update',$item->id)}}" method="post" class="d-flex w-50 flex-column justify-content-center align-items-between">
                <input type="hidden" name="_method" value="PUT" hidden>
                @csrf
                <div class="d-flex flex-column my-2">
                    <label for="" class="my-2 fs-5">نام آیتم</label>
                    <input type="text" name="name" class="form-control fs-5" value="{{$item->name}}">
                </div>
                <div>
                    <label for="" class="my-2 fs-5">دسته بندی</label>
                    <input type="text" name="item_name" class="form-control fs-5" value="{{$item->category->name}}">
                </div>
                <div class="d-flex flex-column my-2">
                    <label for="" class="my-2 fs-5">قیمت خرید</label>
                    <input type="text" name="buy_price" class="form-control fs-5" value="{{$item->buy_price}}">
                </div>
                <div class="d-flex flex-column my-2">
                    <label for="" class="my-2 fs-5">قیمت فروش</label>
                    <input type="text" name="sell_price" class="form-control fs-5" value="{{$item->sell_price}}">
                </div>
                <div class="d-flex flex-column my-2">
                    <label for="" class="my-2 fs-5">تعداد موجود</label>
                    <input type="text" name="count" class="form-control fs-5" value="{{$item->count}}">
                </div>
                <div class="d-flex justify-content-around flex-shrink">
                    <button type="submit" class="btn btn-success p-2">
                        بروزرسانی
                    </button>
                </form>
                    <form method="POST" action="{{route('items.delete',$item->id)}}">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE" hidden>
                        <button href="" class="btn btn-danger p-2">
                            حذف
                        </button>
                    </form>
                </div>
        </div>
    </div>
</div>