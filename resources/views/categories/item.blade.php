<div class="container-fluid">
    <div class="row flex-nowrap">
        @include("../includes/sidebar")
        <div class="col border d-flex justify-content-center">
            <form action="{{route('categories.update',$category->id)}}" method="post" class="d-flex w-50 flex-column justify-content-center align-items-between">
                <input type="hidden" name="_method" value="PUT" hidden>
                @csrf
                <div class="d-flex flex-column my-2">
                    <label for="" class="my-2 fs-5">نام آیتم</label>
                    <input type="text" name="name" class="form-control fs-5" value="{{$category->name}}">
                </div>
                <div class="d-flex flex-column my-2">
                    <label for="" class="my-2 fs-5">تاریخ</label>
                    <input type="text" name="created_at" class="form-control fs-5" value="{{$category->created_at}}">
                </div>
                <div class="d-flex justify-content-around flex-shrink">
                    <button type="submit" class="btn btn-success p-2">
                        بروزرسانی
                    </button>
                </form>
                    <form method="POST" action="{{route('categories.delete',$category->id)}}">
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