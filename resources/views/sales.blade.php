<div class="container-fluid">
    <div class="row flex-nowrap">
        @include("./includes/sidebar")
        <div class="col border d-flex flex-column justify-content-center align-items-center">
            
            <h3 class="main-color align-self-start mb-4 p-3 border-bottom text-bold">جدول فروش ها</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td class="text-center p-2">نام</td>
                        <td class="text-center p-2">تعداد</td>
                        <td class="text-center p-2">سود</td>
                        <td class="text-center p-2">قیمت کل</td>
                        <td class="text-center p-2">تاریخ</td>
                        <td class="text-center p-2">عملیات</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach($sales as $sale)
                        <tr>
                            <td class="text-center p-2">{{$sale->item->name}}</td>
                            <td class="text-center p-2">{{$sale->number}}</td>
                            <td class="text-center p-2">{{number_format($sale->profit)}}</td>
                            <td class="text-center p-2">{{number_format($sale->sale_price)}}</td>
                            <td class="text-center p-2">{{$sale->created_at->format('Y-m-d')}}</td>
                            <td class="text-center">
                                <form action="{{route('sales.delete',$sale->id)}}" method="POST" class="p-0 m-0">
                                    <input type="hidden" name="_method" value="DELETE" hidden>
                                    @csrf
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex">
                {!! $sales->links() !!}
            </div>
        </div>
    </div>
</div>