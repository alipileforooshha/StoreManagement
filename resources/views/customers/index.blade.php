<div class="container-fluid">
    <div class="row flex-nowrap">
        @include("./includes/sidebar")
        <div class="col border d-flex flex-column justify-content-start align-items-start">
            
            <div class="d-flex justify-content-start align-items-center my-2">
                <div>
                    <h3 class="main-color section-color align-self-start p-3  rounded border-rounded text-bold shadow">
                        جدول مشتریان
                    </h3>
                </div>
                <div class="mx-4 shadow section-color rounded">
                    <a href="{{route('customers.create')}}" class="btn btn-success">
                        مشتری جدید
                    </a>
                </div>
            </div>            
            
            <table class="table table-bordered shadow section-color border rounded">
                <thead>
                    <tr>
                        <td class="text-center p-2">نام</td>
                        <td class="text-center p-2">موبایل</td>
                        <td class="text-center p-2">مجموع خرید</td>
                        <td class="text-center p-2">تاریخ</td>
                        <td class="text-center p-2">عملیات</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td class="text-center p-2">{{$customer->name}}</td>
                            <td class="text-center p-2">{{$customer->number}}</td>
                            <td class="text-center p-2">{{number_format($customer->sales->sum('profit'))}}</td>
                            <td class="text-center p-2">{{$customer->created_at->format('Y-m-d')}}</td>
                            <td class="d-flex justify-content-around text-center">
                                <form action="{{route('customers.delete',$customer->id)}}" method="POST" class="p-0 m-0">
                                    <input type="hidden" name="_method" value="DELETE" hidden>
                                    @csrf
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </form>
                                <a href="{{route('customers.item',$customer->id)}}" class="btn btn-primary">
                                    مشاهده
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex">
                {!! $customers->links() !!}
            </div>
        </div>
    </div>
</div>