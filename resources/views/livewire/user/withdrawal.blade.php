<div>
    <form class="m-5" wire:submit.throttle.1000.prevent="withdraw">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="form-group col-12">
                <label class="form-label text-bold">Payment method:
                    <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip"
                        title="Choose your choice crypto"></i>
                </label>
                <select class="form-control form-select" name="asset" wire:model.blur="asset" style="width: 100%;"
                    data-bs-placeholder="Select">
                    <option>Select crypto method</option>
                    <option value="BTC">Bitcoin BTC</option>
                    <option value="USDT">Tether USDT Trc20</option>
                    <option value="ETH">Ethereum ETH</option>
                    <option value="BCH">Bitcoin Cash BCH</option>
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
                    <span class="">Current balance:</span>
                    @if (auth()->user()->balance <= 10)
                        <span class="text-danger ms-1">
                            <i class="fa fa-dollar"></i>
                            {{ number_format(auth()->user()->balance, 2) }}
                        </span>
                    @else
                        <span class="text-success ms-1">
                            <i class="fa fa-dollar"></i>
                            {{ number_format(auth()->user()->balance, 2) }}
                        </span>
                    @endif
                </span>
            </div>
            <!-- </div> -->

            <div class="form-group col-12">
                <label for="wallet_address">
                    Wallet Address:
                    <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip"
                        title="Your Wallet address">
                    </i>
                </label>
                <input type="text" class="form-control" value="" wire:model.live="ewallet_address"
                    placeholder="Your crypto wallet address to receive payment">
                @error('ewallet_address')
                    <em class="text-danger">{{ $message }}</em>
                @enderror
            </div>

            <div class="form-group col-12">
                <button wire:loading.attr="disabled" class="login100-form-btn btn-primary col-12" type="submit">
                    Request
                    <x-spinner />
                </button>
            </div>

        </div>
    </form>
</div>
