<div class="container-fluid">
    <div class="row flex-nowrap">
        @include("../includes/sidebar")
        <div class="col border d-flex justify-content-center">
            <form action="{{route('expenses.update',$expense->id)}}" method="post" class="d-flex w-50 flex-column justify-content-center align-items-between">
                <input type="hidden" name="_method" value="PUT" hidden>
                @csrf
                <div class="d-flex flex-column my-2">
                    <label for="" class="my-2 fs-5">نام آیتم</label>
                    <input type="text" name="item_name" class="form-control fs-5" value="{{$expense->title}}">
                </div>
                <div class="d-flex flex-column my-2">
                    <label for="" class="my-2 fs-5">قیمت فروش</label>
                    <input type="text" name="sale_price" class="form-control fs-5" value="{{$expense->amount}}">
                </div>
                <div class="d-flex flex-column my-2">
                    <label for="" class="my-2 fs-5">سود حاصل</label>
                    <input type="text" name="profit" class="form-control fs-5" value="{{$expense->monthly ? "ماهانه" : "یکبار"}}">
                </div>
                <div class="d-flex flex-column my-2">
                    <label for="" class="my-2 fs-5">تاریخ فروش</label>
                    <input type="text" name="created_at" class="form-control fs-5" value="{{$expense->created_at}}">
                </div>
                <div class="d-flex justify-content-around">
                    <button type="submit" class="btn btn-success">
                        بروزرسانی
                    </button>
                </form>
                    <form method="POST" action="{{route('expenses.delete',$expense->id)}}">
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