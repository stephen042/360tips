<div>
    <!-- modal -->
    <div class="modal fade" wire:ignore.self id="modaldemostakeBTC">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h3 class="modal-title">Staking Details</h3><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <form wire:submit="stake" method="POST">
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Confirm Asset: <i class="fa fa-question-circle" data-bs-placement="top"
                                    data-bs-toggle="tooltip" title="staking Asset"></i></label>
                            </i>
                            <select class="form-control form-select" wire:model.live="asset" name="asset"
                                style="width: 100%;" data-bs-placeholder="Select">
                                <option>Confirm Asset</option>
                                <option value="Bitcoin BTC">Bitcoin BTC</option>
                            </select>

                            @error('asset')
                                <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="form-group" id="amount">
                            <label>Amount: <i class="fa fa-question-circle" data-bs-placement="top"
                                    data-bs-toggle="tooltip" title="staking amount in USD $"></i></label> <i
                                class="fa fa-dollar">
                            </i>
                            <input type="number" class="form-control amount" wire:model.live="amount" name="amount"
                                value="" placeholder="Amount in USD $">
                            @error('amount')
                                <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label text-bold">Duration:
                                <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip"
                                    title="Your Trade will auto close at the chosen time"></i>
                            </label>
                            <select class="form-control form-select" wire:model.blur="duration" name="duration"
                                style="width: 100%;" data-bs-placeholder="Select">
                                <option>select duration</option>
                                <option value="1 day">1 day</option>
                                <option value="2 days">2 days</option>
                                <option value="3 days">3 days</option>
                                <option value="4 days">4 days</option>
                                <option value="5 days">5 days</option>
                                <option value="6 days">6 days</option>
                            </select>
                            @error('duration')
                                <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="login100-form-btn btn-primary col-12" type="submit">
                            Stake
                            <x-spinner />
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <!-- modal -->
    <div class="modal fade" wire:ignore.self id="modaldemostakeAVAX">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h3 class="modal-title">Staking Details</h3><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <form class="m-2" wire:submit.throttle.1000.prevent="stake">
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Confirm Asset: <i class="fa fa-question-circle" data-bs-placement="top"
                                    data-bs-toggle="tooltip" title="staking Asset"></i></label>
                            </i>
                            <select class="form-control form-select" wire:model.live="asset" name="asset"
                                style="width: 100%;" data-bs-placeholder="Select">
                                <option>Confirm Asset</option>
                                <option value="Avalanche AVAX">Avalanche AVAX</option>
                            </select>

                            @error('asset')
                                <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="form-group" id="amount">
                            <label>Amount: <i class="fa fa-question-circle" data-bs-placement="top"
                                    data-bs-toggle="tooltip" title="staking amount in USD $"></i></label> <i
                                class="fa fa-dollar">
                            </i>
                            <input type="number" class="form-control amount" wire:model.live="amount" name="amount"
                                value="" placeholder="Amount in USD $">
                            @error('amount')
                                <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label text-bold">Duration:
                                <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip"
                                    title="Your Trade will auto close at the chosen time"></i>
                            </label>
                            <select class="form-control form-select" wire:model.blur="duration" name="duration"
                                style="width: 100%;" data-bs-placeholder="Select">
                                <option>select duration</option>
                                <option value="1 day">1 day</option>
                                <option value="2 days">2 days</option>
                                <option value="3 days">3 days</option>
                                <option value="4 days">4 days</option>
                                <option value="5 days">5 days</option>
                                <option value="6 days">6 days</option>
                            </select>
                            @error('duration')
                                <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="login100-form-btn btn-primary col-12" type="submit">
                            Stake
                            <x-spinner />
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <!-- modal -->
    <div class="modal fade" wire:ignore.self id="modaldemostakeUSDT">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h3 class="modal-title">Staking Details</h3><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <form class="m-2" wire:submit.throttle.1000.prevent="stake">
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Confirm Asset: <i class="fa fa-question-circle" data-bs-placement="top"
                                    data-bs-toggle="tooltip" title="staking Asset"></i></label>
                            </i>
                            <select class="form-control form-select" wire:model.live="asset" name="asset"
                                style="width: 100%;" data-bs-placeholder="Select">
                                <option>Confirm Asset</option>
                                <option value="Tether USDT">Tether USDT</option>
                            </select>

                            @error('asset')
                                <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="form-group" id="amount">
                            <label>Amount: <i class="fa fa-question-circle" data-bs-placement="top"
                                    data-bs-toggle="tooltip" title="staking amount in USD $"></i></label> <i
                                class="fa fa-dollar">
                            </i>
                            <input type="number" class="form-control amount" wire:model.live="amount"
                                name="amount" value="" placeholder="Amount in USD $">
                            @error('amount')
                                <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label text-bold">Duration:
                                <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip"
                                    title="Your Trade will auto close at the chosen time"></i>
                            </label>
                            <select class="form-control form-select" wire:model.blur="duration" name="duration"
                                style="width: 100%;" data-bs-placeholder="Select">
                                <option>select duration</option>
                                <option value="1 day">1 day</option>
                                <option value="2 days">2 days</option>
                                <option value="3 days">3 days</option>
                                <option value="4 days">4 days</option>
                                <option value="5 days">5 days</option>
                                <option value="6 days">6 days</option>
                            </select>
                            @error('duration')
                                <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="login100-form-btn btn-primary col-12" type="submit">
                            Stake
                            <x-spinner />
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <!-- modal -->
    <div class="modal fade" wire:ignore.self id="modaldemostakeETH">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h3 class="modal-title">Staking Details</h3><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <form class="m-2" wire:submit.throttle.1000.prevent="stake">
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Confirm Asset: <i class="fa fa-question-circle" data-bs-placement="top"
                                    data-bs-toggle="tooltip" title="staking Asset"></i></label>
                            </i>
                            <select class="form-control form-select" wire:model.live="asset" name="asset"
                                style="width: 100%;" data-bs-placeholder="Select">
                                <option>Confirm Asset</option>
                                <option value="Ethereum ETH">Ethereum ETH</option>
                            </select>

                            @error('asset')
                                <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="form-group" id="amount">
                            <label>Amount: <i class="fa fa-question-circle" data-bs-placement="top"
                                    data-bs-toggle="tooltip" title="staking amount in USD $"></i></label> <i
                                class="fa fa-dollar">
                            </i>
                            <input type="number" class="form-control amount" wire:model.live="amount"
                                name="amount" value="" placeholder="Amount in USD $">
                            @error('amount')
                                <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label text-bold">Duration:
                                <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip"
                                    title="Your Trade will auto close at the chosen time"></i>
                            </label>
                            <select class="form-control form-select" wire:model.blur="duration" name="duration"
                                style="width: 100%;" data-bs-placeholder="Select">
                                <option>select duration</option>
                                <option value="1 day">1 day</option>
                                <option value="2 days">2 days</option>
                                <option value="3 days">3 days</option>
                                <option value="4 days">4 days</option>
                                <option value="5 days">5 days</option>
                                <option value="6 days">6 days</option>
                            </select>
                            @error('duration')
                                <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="login100-form-btn btn-primary col-12" type="submit">
                            Stake
                            <x-spinner />
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <!-- modal -->
    <div class="modal fade" wire:ignore.self id="modaldemostakeMATIC">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h3 class="modal-title">Staking Details</h3><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <form class="m-2" wire:submit.throttle.1000.prevent="stake">
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Confirm Asset: <i class="fa fa-question-circle" data-bs-placement="top"
                                    data-bs-toggle="tooltip" title="staking Asset"></i></label>
                            </i>
                            <select class="form-control form-select" wire:model.live="asset" name="asset"
                                style="width: 100%;" data-bs-placeholder="Select">
                                <option>Confirm Asset</option>
                                <option value="Polygon MATIC">Polygon MATIC</option>
                            </select>

                            @error('asset')
                                <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="form-group" id="amount">
                            <label>Amount: <i class="fa fa-question-circle" data-bs-placement="top"
                                    data-bs-toggle="tooltip" title="staking amount in USD $"></i></label> <i
                                class="fa fa-dollar">
                            </i>
                            <input type="number" class="form-control amount" wire:model.live="amount"
                                name="amount" value="" placeholder="Amount in USD $">
                            @error('amount')
                                <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label text-bold">Duration:
                                <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip"
                                    title="Your Trade will auto close at the chosen time"></i>
                            </label>
                            <select class="form-control form-select" wire:model.blur="duration" name="duration"
                                style="width: 100%;" data-bs-placeholder="Select">
                                <option>select duration</option>
                                <option value="1 day">1 day</option>
                                <option value="2 days">2 days</option>
                                <option value="3 days">3 days</option>
                                <option value="4 days">4 days</option>
                                <option value="5 days">5 days</option>
                                <option value="6 days">6 days</option>
                            </select>
                            @error('duration')
                                <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="login100-form-btn btn-primary col-12" type="submit">
                            Stake
                            <x-spinner />
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <!-- modal -->
    <div class="modal fade" wire:ignore.self id="modaldemostakeSOL">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h3 class="modal-title">Staking Details</h3><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <form class="m-2" wire:submit.throttle.1000.prevent="stake">
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Confirm Asset: <i class="fa fa-question-circle" data-bs-placement="top"
                                    data-bs-toggle="tooltip" title="staking Asset"></i></label>
                            </i>
                            <select class="form-control form-select" wire:model.live="asset" name="asset"
                                style="width: 100%;" data-bs-placeholder="Select">
                                <option>Confirm Asset</option>
                                <option value="Solana SOL">Solana SOL</option>
                            </select>

                            @error('asset')
                                <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="form-group" id="amount">
                            <label>Amount: <i class="fa fa-question-circle" data-bs-placement="top"
                                    data-bs-toggle="tooltip" title="staking amount in USD $"></i></label> <i
                                class="fa fa-dollar">
                            </i>
                            <input type="number" class="form-control amount" wire:model.live="amount"
                                name="amount" value="" placeholder="Amount in USD $">
                            @error('amount')
                                <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label text-bold">Duration:
                                <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip"
                                    title="Your Trade will auto close at the chosen time"></i>
                            </label>
                            <select class="form-control form-select" wire:model.blur="duration" name="duration"
                                style="width: 100%;" data-bs-placeholder="Select">
                                <option>select duration</option>
                                <option value="1 day">1 day</option>
                                <option value="2 days">2 days</option>
                                <option value="3 days">3 days</option>
                                <option value="4 days">4 days</option>
                                <option value="5 days">5 days</option>
                                <option value="6 days">6 days</option>
                            </select>
                            @error('duration')
                                <em class="text-danger">{{ $message }}</em>
                            @enderror
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="login100-form-btn btn-primary col-12" type="submit">
                            Stake
                            <x-spinner />
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal end -->
</div>
