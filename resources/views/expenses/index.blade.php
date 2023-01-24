<div class="container-fluid">
    <div class="row flex-nowrap">
        @include("./includes/sidebar")
        <div class="col border d-flex flex-column justify-content-start align-items-start">
            
            <div class="d-flex justify-content-start align-items-center my-2">
                <div>
                    <h3 class="main-color section-color align-self-start p-3 border-bottom rounded border-rounded text-bold shadow">جدول هزینه ها</h3>
                </div>
                <div class="mx-4">
                    <a href="{{route('expenses.create')}}" class="btn btn-success">
                        هزینه جدید
                    </a>
                </div>
            </div>
            <table class="table table-bordered shadow">
                <thead>
                    <tr>
                        <td class="text-center p-2">عنوان</td>
                        <td class="text-center p-2">هزینه</td>
                        <td class="text-center p-2">تکرار</td>
                        <td class="text-center p-2">تاریخ</td>
                        <td class="text-center p-2">عملیات</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach($expenses as $expense)
                        <tr>
                            <td class="text-center p-2">{{$expense->title}}</td>
                            <td class="text-center p-2">{{number_format($expense->amount)}}</td>
                            <td class="text-center p-2">{{$expense->monthly ? 'ماهانه' : 'یکبار'}}</td>
                            <td class="text-center p-2">{{$expense->created_at->format('Y-m-d')}}</td>
                            <td class="d-flex justify-content-around text-center">
                                <form action="{{route('expenses.delete',$expense->id)}}" method="POST" class="p-0 m-0">
                                    <input type="hidden" name="_method" value="DELETE" hidden>
                                    @csrf
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </form>
                                <a href="{{route('expenses.item',$expense->id)}}" class="btn btn-primary">
                                    مشاهده
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex">
                {!! $expenses->links() !!}
            </div>
        </div>
    </div>
</div>