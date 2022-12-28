<div class="container-fluid">
    <div class="row flex-nowrap">
        @include("./includes/sidebar")
        <div class="col border d-flex flex-column justify-content-center align-items-center">
            <div class="d-flex justify-content-start">
                <div class="d-flex flex-column col-6 m-4 p-4 dashboard-card">
                    <div class="d-flex justify-content-around">
                        <h4 class="main-color">
                            مجموع درآمد این ماه
                        </h4>
                        <button class="btn bg-main-color text-white fs-6 px-3">
                            مشاهده همه
                        </button>
                    </div>
                    <div class="mt-3">
                        <h5>
                            مجموع فروش این ماه : {{number_format($all_sales_total_amount)}} تومن
                        </h5>
                    </div>
                    <div class="mt-2">
                        <h5>
                            مجموع هزینه های این ماه : {{number_format($all_expenses_total_amount)}} تومن
                        </h5>
                    </div>
                    <div class="mt-2">
                        <h5>
                            مجموع سود این ماه : {{number_format($all_sales_total_profit)}} تومن
                        </h5>
                    </div>
                </div>
                <div class="d-flex flex-column col-6 m-4 p-4 dashboard-card">
                    <div class="d-flex justify-content-around">
                        <h4 class="main-color">
                            پرفروش ترین ها
                        </h4>
                        <button class="btn bg-main-color text-white fs-6 px-3">
                            مشاهده همه
                        </button>
                    </div>
                    @foreach($top_three_sales as $item)
                        <div class="mt-2">
                            <h5 class="d-flex">
                                <p class="m-0"> {{$item->item->name}} &nbsp; </p>
                                <p class="m-0"> : </p>
                                <p class="m-0">&nbsp; {{$item->number}} عدد</p>
                            </h5>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <div class="d-flex justify-content-start">
                <div class="d-flex flex-column col-6 m-4 p-4 dashboard-card">
                    <div class="d-flex justify-content-around">
                        <h4 class="main-color">
                            پرهزینه ترین ها
                        </h4>
                        <button class="btn bg-main-color text-white fs-6 px-3">
                            مشاهده همه
                        </button>
                    </div>
                    @foreach($top_three_expenses as $expense)
                        <div class="mt-2">
                            <h5 class="d-flex">
                                <p class="m-0"> {{$expense->title}} &nbsp; </p>
                                <p class="m-0"> : </p>
                                <p class="m-0">&nbsp; {{$expense->amount}} عدد</p>
                            </h5>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex flex-column col-6 m-4 p-4 dashboard-card">
                    <div class="d-flex justify-content-around">
                        <h4 class="main-color">
                            پرسود ترین ها
                        </h4>
                        <button class="btn bg-main-color text-white fs-6 px-3">
                            مشاهده همه
                        </button>
                    </div>
                    @foreach($top_three_profits as $profit)
                        <div class="mt-2">
                            <h5 class="d-flex">
                                <p class="m-0"> {{$profit->item->name}} &nbsp; </p>
                                <p class="m-0"> : </p>
                                <p class="m-0">&nbsp; {{number_format($profit->profit)}} تومن</p>
                            </h5>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>