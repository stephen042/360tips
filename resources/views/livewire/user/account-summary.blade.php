<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <p class="alert alert-success rounded-pill" style="width: max-content;">
                            Live account</p>
                        <p class="mb-2 number-font">Trading Progress {{ $user_data->progress_bar_status}}%</p>
                        <div class="progress progress-md">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info-1 w-{{auth()->user()->progress_bar_status}}">
                                {{$user_data->progress_bar_status}}%</div>
                        </div>
                    </div>
                    <div class="col col-auto">
                        <div class="counter-icon bg-primary-gradient box-shadow-primary brround ms-auto">
                            <i class="fe fe-trending-up text-white mb-5 "></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="card overflow-hidden">
            <div class="card-header">
                <div class="card-title text-bold">Account summary</div>
            </div>
            <div class="card-body">
                <p class="m-0">
                    <span><i class="bi bi-wallet2 h4"></i></span>
                    Total Balance: <span class="h4 text-bold">$ {{ number_format($user_data->balance, 2) }}</span>
                </p>
            </div>
            <div class="card-body">
                <p class="m-0">
                    <span><i class="bi bi-wallet2 h4"></i></span>
                    Total Earnings: <span class="h4 text-bold">$ {{ number_format($user_data->earnings_balance, 2) }}</span>
                </p>
            </div>
            <div class="card-body">
                <p class="m-0">
                    <span><i class="bi bi-cash-stack h4"></i></span>
                    Total Subscription Bal: <span class="h4 text-bold">$
                        {{ number_format($user_data->sub_balance, 2) }}</span>
                </p>
            </div>
            <div class="card-body">
                <p class="m-0">
                    <span><i class="bi bi-cash h4"></i></span>
                    Total withdrawals: <span class="h4 text-bold">$
                        {{ number_format($sum_withdrawal, 2) }}</span>
                </p>
            </div>
        </div>
    </div>
</div>
