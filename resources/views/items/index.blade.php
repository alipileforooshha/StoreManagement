<div class="container-fluid">
    <div class="row flex-nowrap">
        @include("./includes/sidebar")
        <div class="col border d-flex flex-column justify-content-center p-2 align-items-start">
            <div class="d-flex justify-content-center align-items-center my-2">
                <div>
                    <h3 class="main-color section-color align-self-start p-3 rounded border-rounded text-bold shadow">جدول موجودی</h3>
                </div>
                <div class="mx-4 shadow section-color rounded">
                    <a href="{{route('items.create')}}" class="btn btn-success">
                        کالای جدید
                    </a>
                </div>
            </div>
            <table class="table table-bordered shadow section-color rounded">
                <thead>
                    <tr>
                        <td class="text-center p-2">اسم</td>
                        <td class="text-center p-2">تعداد</td>
                        <td class="text-center p-2">قیمت خرید</td>
                        <td class="text-center p-2">قیمت فروش</td>
                        <td class="text-center p-2">سود</td>
                        <td class="text-center p-2">دسته بندی</td>
                        <td class="text-center p-2">تاریخ</td>
                        <td class="text-center p-2">عملیات</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td class="text-center p-2">{{$item->name}}</td>
                            <td class="text-center p-2">{{$item->count}}</td>
                            <td class="text-center p-2">{{number_format($item->buy_price)}}</td>
                            <td class="text-center p-2">{{number_format($item->sell_price)}}</td>
                            <td class="text-center p-2">{{number_format($item->sell_price - $item->buy_price)}}</td>
                            <td class="text-center p-2">{{$item->category->name}}</td>
                            <td class="text-center p-2">{{$item->created_at->format('Y-m-d')}}</td>
                            <td class="d-flex justify-content-around text-center">
                                <form action="{{route('items.delete',$item->id)}}" method="POST" class="p-0 m-0">
                                    <input type="hidden" name="_method" value="DELETE" hidden>
                                    @csrf
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </form>
                                <a href="{{route('items.item',$item->id)}}" class="btn btn-primary">
                                    مشاهده
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex shadow">
                {!! $items->links() !!}
            </div>
        </div>
    </div>
</div>