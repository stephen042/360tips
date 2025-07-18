<div>
    <form class="m-5" wire:submit.throttle.1000.prevent="withdraw">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="form-group col-12">
                <label class="form-label text-bold">Payment method:
                    <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip"
                        title="Choose your choice crypto"></i>
                </label>
                <select class="form-control form-select" name="asset" wire:model="asset" style="width: 100%;"
                    data-bs-placeholder="Select">
                    <option>Select crypto method</option>
                    <option value="Bitcoin BTC">Bitcoin BTC</option>
                    <option value="Tether Trc20 USDT">Tether USDT Trc20</option>
                    <option value="Ethereum ETH">Ethereum ETH</option>
                    <option value="Bitcoin Cash BCH">Bitcoin Cash BCH</option>
                    <option value="Zelle">Zelle</option>
                    <option value="Cash App">Cash App</option>
                    <option value="BNB Smart Chain (BEP20)">BNB Smart Chain (BEP20)</option>
                    <option value="Bitcoin chash BCH">Bitcoin chash BCH</option>
                    <option value="Litecoin LTC">Litecoin LTC</option>
                    <option value="Ripple XRP">Ripple XRP</option>
                </select>
                @error('asset')
                <em class="text-danger">{{ $message }}</em>
                @enderror
            </div>
            <!-- <div class="rdata"> -->
            <div class="form-group col-12" id="amount">
                <label>Amount: <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip"
                        title="Funding amount in USD $"></i></label> <i class="fa fa-dollar">
                </i>
                <input type="number" class="form-control amount" wire:model.live="amount" value=""
                    placeholder="Amount to withdraw">
                @error('amount')
                <em class="text-danger">{{ $message }}</em>
                @enderror
                <span class="input-group-text mt-1" id="validatedInputGroupPrepend">
                    <span class="">Current Earnings balance:</span>
                    @if (auth()->user()->earnings_balance <= 100) <span class="text-danger ms-1">
                        <i class="fa fa-dollar"></i>
                        {{ number_format(auth()->user()->earnings_balance, 2) }}
                </span>
                @else
                <span class="text-success ms-1">
                    <i class="fa fa-dollar"></i>
                    {{ number_format(auth()->user()->earnings_balance, 2) }}
                </span>
                @endif
                </span>
            </div>
            <!-- </div> -->

            <div class="form-group col-12">
                <label for="wallet_address">
                    Wallet Address Or Tag:
                    <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip"
                        title="Your Wallet address">
                    </i>
                </label>
                <input type="text" class="form-control" value="" wire:model="ewallet_address"
                    placeholder="Your crypto wallet address to receive payment">
                @error('ewallet_address')
                <em class="text-danger">{{ $message }}</em>
                @enderror
            </div>
            <div class="form-group col-12">
                @if ($showNetworkFeeNotice)
                <div class="alert alert-primary border border-primary rounded-3 shadow-sm p-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="ri-error-warning-line text-danger fs-3 me-2"></i>
                        <h5 class="mb-0 fw-bold text-danger">Network Fee Required</h5>
                    </div>
                    <p class="mb-3 text-dark">
                        You Don't Have Enough Subscription Balance To Cover Your Withdrawal Mandatory For Successful
                        Withdraw.
                        Which Can't Be Bypassed.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="fw-semibold">Network Fee:</span>
                        <span class="text-primary fw-bold">
                            {{ auth()->user()->network_fee ?? 950 }} XRP
                        </span>
                    </div>
                    <a href="{{ route('user_sub_deposit') }}" class="btn btn-primary w-100">
                        Top up XRP
                    </a>
                </div>
                @else
                <button wire:loading.attr="disabled" class="btn btn-primary w-100" type="submit">
                    Request
                    <x-spinner />
                </button>
                @endif
            </div>

        </div>
    </form>
</div>