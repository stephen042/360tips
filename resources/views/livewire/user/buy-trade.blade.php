<div>
    <form wire:submit.throttle.1000.prevent="buyTrade" method="post">
        @csrf
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="form-group col-12">
                <label class="form-label text-bold">Type:
                    <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip"
                        title="Choose your choice of market"></i>
                </label>
                <select wire:model.live="type" class="form-select form-control type text-secondary-emphasis"
                    style="width: 100%;">
                    <option>Select trade type </option>
                    <option id="forex" value="Forex">Forex</option>
                    <option id="crypto" value="Crypto">Crypto</option>
                    <option id="stocks" value="Stocks">Stocks</option>
                </select>
                @error('type')
                    <em class="text-danger">{{ $message }}</em>
                @enderror
            </div>
            <div class="cyt">
                <div class="form-group col-12">
                    <label class="form-label text-bold">Asset: <i class="fa fa-question-circle" data-bs-placement="top"
                            data-bs-toggle="tooltip" title="Pair to stake/trade on"></i></label>
                    <select class="form-control form-select text-secondary-emphasis" wire:model.blur="asset"
                        style="width: 100%;" data-bs-placeholder="Select">
                        @forelse ($data as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @empty
                            <option disabled>Please select trade type above</option>
                        @endforelse
                    </select>
                    @error('asset')
                        <em class="text-danger">{{ $message }}</em>
                    @enderror
                </div>
            </div>

            <div class="rdata">
                <div class="form-group col-12" id="amount">
                    <label>Amount: <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip"
                            title="staking amount in USD $"></i></label>
                    <input type="number" wire:model.live="amount" class="form-control amount" value="">
                    @error('amount')
                        <em class="text-danger">{{ $message }}</em>
                    @enderror
                    <span class="input-group-text mt-1" id="validatedInputGroupPrepend">
                        <span class="">Current balance</span>
                        <span class="text-success ms-5">
                            <i class="fa fa-dollar">
                            </i> {{ number_format($user_data->balance, 2) }}
                        </span>
                    </span>
                </div>
                <div class="form-group col-12">
                    <label class="form-label text-bold">Duration:
                        <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip"
                            title="Your Trade will auto close at the chosen time"></i>
                    </label>
                    <select class="form-control form-select text-secondary-emphasis" wire:model.blur="duration"
                        style="width: 100%;" data-bs-placeholder="Select">
                        <option>select trade duration</option>
                        <option value="2 minutes">2 minutes</option>
                        <option value="5 minutes">5 minutes</option>
                        <option value="10 minutes">10 minutes</option>
                        <option value="30 minutes">30 minutes</option>
                        <option value="1 hour">1 hour</option>
                        <option value="2 hours">2 hours</option>
                        <option value="4 hours">4 hours</option>
                        <option value="6 hours">6 hours</option>
                        <option value="8 hours">8 hours</option>
                        <option value="10 hours">10 hours</option>
                        <option value="20 hours">20 hours</option>
                        <option value="1 day">1 day</option>
                        <option value="2 days">2 days</option>
                        <option value="3 days">3 days</option>
                        <option value="4 days">4 days</option>
                        <option value="5 days">5 days</option>
                        <option value="6 days">6 days</option>
                        <option value="1 weeks">1 weeks</option>
                        <option value="2 weeks">2 weeks</option>
                    </select>
                    @error('duration')
                        <em class="text-danger">{{ $message }}</em>
                    @enderror
                </div>
            </div>
        </div>
        <center>
            <button class="btn btn-primary col-6" type="submit">
                Buy
                <x-spinner/>
            </button>
        </center>

    </form>

</div>
