<div class="row row-card">

    <div class="card col-xl-10 col-lg-10 col-sm-12" style="border-radius: 10px;">
        <div class="card-header" style="background-color: #5A52B5;border-radius: 10px">
            <div class="card-title text-bold ">Deposit Methods</div>
        </div>
        <!-- <center> -->
        <form class="m-5" method="post" wire:submit.throttle.1000.prevent="deposit">
            @csrf
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group col-12">
                    <label class="form-label text-bold">Payment Method:
                        <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip"
                            title="Choose payment gateway"></i>
                    </label>
                    <select class="form-control form-select" wire:model.live="asset" id="asset" style="width: 100%;"
                        data-bs-placeholder="Select" required>
                        <option>Select crypto method</option>
                        <option value="Bitcoin">Bitcoin BTC</option>
                        <option value="Ethereum">Ethereum ETH</option>
                        <option value="USDT Trc20">Tether USDT Trc20</option>
                        <option value="Cash App">Cash App</option>
                        {{-- <option value="Paypal">PayPal</option> --}}
                        {{-- <option value="Zelle">Zelle</option> --}}
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
                    <input type="number" wire:model.live="amount" class="form-control amount" value=""
                        placeholder="Amount to deposit" required>
                    @error('amount')
                        <em class="text-danger">{{ $message }}</em>
                    @enderror
                    <span class="input-group-text mt-1" id="validatedInputGroupPrepend">
                        <span class="">Current balance:</span>
                        @if (auth()->user()->balance <= 100)
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
                @if (!$errors->any())
                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <button id="submit" type="button">
                            <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-scale"
                                data-bs-toggle="modal" href="{{ $modalName }}" disabled> Proceed ...</a>
                        </button>
                    </div>
                @else
                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <button class="btn btn-danger" disabled>Errors !!!</button>
                    </div>
                @endif
            </div>

            <!-- modals -->
            <div class="modal fade" wire:ignore.self id="bitcoin">
                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Funding details</h6>
                            <button aria-label="Close" type="button" class="btn-close" data-bs-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body" id="BTC">
                            <h2>wallet address Bitcoin:</h2>
                            <p>
                                <i class="payment payment-bitcoin-dark"></i>
                                <span id="addressCopy">{{ $admin_wallet->btc }}</span> 
                                <button onclick="copyFunction()" class="mdi mdi-arrange-bring-forward text-primary"
                                    type="button"></button>
                            </p>

                            <center>
                                <div style="justify-content: center;" class="col-md-6">
                                    <img src="https://chart.googleapis.com/chart?chs=225x225&chld=L|2&cht=qr&chl={{ $admin_wallet->btc }}"
                                        alt="" class="img-fluid">
                                </div>
                                <div style="justify-content: center;" class="col-md-6">
                                    @if ($proof)
                                        <img class="img-fluid" src="{{ $proof->temporaryUrl() }}">
                                    @else
                                        <span class="text-warning">Please wait for your Uploaded image preview
                                            here</span>
                                    @endif
                                </div>
                            </center>
                            <div>
                                <label class="form-label">Proof of Payment</label>
                                <div class="btn btn-primary btn-sm mt-1 mb-1" style="width: 100%"
                                    x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                                    x-on:livewire-upload-finish="uploading = false"
                                    x-on:livewire-upload-cancel="uploading = false"
                                    x-on:livewire-upload-error="uploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <i class="fe fe-camera me-1"></i>
                                    <input type="file" wire:model="proof" accept="image/png, image/jpeg"
                                        class="w-100" name="proof">
                                    <div x-show="uploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                </div>
                                @error('proof')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button wire:loading.attr="disabled" class="login100-form-btn btn-primary col-4"
                                type="submit">
                                Done
                                <x-spinner />
                            </button>
                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" wire:ignore.self id="ethereum">
                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Funding details</h6>
                            <button aria-label="Close" type="button" class="btn-close" data-bs-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body" id="BTC">
                            <h2>wallet address Ethereum:</h2>
                            <p>
                                <i class="payment payment-ethereum"></i>
                                <span id="addressCopy">{{ $admin_wallet->eth }}</span>
                                <button onclick="copyFunction()" class="mdi mdi-arrange-bring-forward text-primary"
                                    type="button"></button>
                            </p>

                            <center>
                                <div style="justify-content: center;" class="col-md-6">
                                    <img src="https://chart.googleapis.com/chart?chs=225x225&chld=L|2&cht=qr&chl={{ $admin_wallet->eth }}"
                                        alt="" class="img-fluid">
                                </div>
                                <div style="justify-content: center;" class="col-md-6">
                                    @if ($proof)
                                        <img class="img-fluid" src="{{ $proof->temporaryUrl() }}">
                                    @else
                                        <span class="text-warning">Please wait for your Uploaded image preview
                                            here</span>
                                    @endif
                                </div>
                            </center>
                            <div>
                                <label class="form-label">Proof of Payment</label>
                                <div class="btn btn-primary btn-sm mt-1 mb-1" style="width: 100%"
                                    x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                                    x-on:livewire-upload-finish="uploading = false"
                                    x-on:livewire-upload-cancel="uploading = false"
                                    x-on:livewire-upload-error="uploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <i class="fe fe-camera me-1"></i>
                                    <input type="file" wire:model="proof" accept="image/png, image/jpeg"
                                        class="w-100" name="proof">
                                    <div x-show="uploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                </div>
                                @error('proof')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button wire:loading.attr="disabled" class="login100-form-btn btn-primary col-4"
                                type="submit">
                                Done
                                <x-spinner />
                            </button>
                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" wire:ignore.self id="usdt">
                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Funding details</h6>
                            <button aria-label="Close" type="button" class="btn-close"
                                data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                        </div>

                        <!-- usdt -->
                        <div class="modal-body" id="USDT">
                            <h2>wallet address USDT Trc20</h2>
                            <p>
                                <span>
                                    <img style="height: 25px;width: 80px;background:transparent"
                                        src="{{ URL('assets/images/icons/usdt.png') }}" class="img-fluid">
                                </span>
                                <span id="addressCopy">{{ $admin_wallet->usdt }}</span>
                                <button onclick="copyFunction()" class="mdi mdi-arrange-bring-forward text-primary"
                                    type="button"></button>
                            </p>

                            <center>
                                <div style="justify-content: center;" class="col-md-6">
                                    <img src="https://chart.googleapis.com/chart?chs=225x225&chld=L|2&cht=qr&chl={{ $admin_wallet->usdt }}"
                                        alt="" class="img-fluid">
                                </div>
                                <div style="justify-content: center;" class="col-md-6">
                                    @if ($proof)
                                        <img class="img-fluid" src="{{ $proof->temporaryUrl() }}">
                                    @else
                                        <span class="text-warning">Please wait for your Uploaded image preview
                                            here</span>
                                    @endif
                                </div>
                            </center>
                            <div>
                                <label class="form-label">Proof of Payment</label>
                                <div class="btn btn-primary btn-sm mt-1 mb-1" style="width: 100%"
                                    x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                                    x-on:livewire-upload-finish="uploading = false"
                                    x-on:livewire-upload-cancel="uploading = false"
                                    x-on:livewire-upload-error="uploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <i class="fe fe-camera me-1"></i>
                                    <input type="file" wire:model="proof" re class="w-100" name="proof">
                                    <div x-show="uploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                </div>
                                @error('proof')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button wire:loading.attr="disabled" class="login100-form-btn btn-primary col-4"
                                type="submit">
                                Done
                                <x-spinner />
                            </button>
                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" wire:ignore.self id="cashapp">
                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Funding details</h6>
                            <button aria-label="Close" type="button" class="btn-close"
                                data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                        </div>

                        <!-- ETH -->
                        <div class="modal-body" id="ETH">
                            <h2>Tag address Cash App</h2>
                            <p>
                                <span>
                                    <img style="height: 40px;width: 65px;background:transparent"
                                        src="{{ URL('assets/images/icons/cashapp.png') }}" class="img-fluid">
                                </span>
                                <span id="addressCopy">{{ $admin_wallet->cash_app }}</span>
                                <button onclick="copyFunction()" class="mdi mdi-arrange-bring-forward text-primary"
                                    type="button"></button>
                            </p>

                            <center>
                                <div style="justify-content: center;" class="col-md-6">
                                    <img src="https://chart.googleapis.com/chart?chs=225x225&chld=L|2&cht=qr&chl={{ $admin_wallet->cash_app }}"
                                        alt="" class="img-fluid">
                                </div>
                                <div style="justify-content: center;" class="col-md-6">
                                    @if ($proof)
                                        <img class="img-fluid" src="{{ $proof->temporaryUrl() }}">
                                    @else
                                        <span class="text-warning">Please wait for your Uploaded image preview
                                            here</span>
                                    @endif
                                </div>
                            </center>
                            <div>
                                <label class="form-label">Proof of Payment</label>
                                <div class="btn btn-primary btn-sm mt-1 mb-1" style="width: 100%"
                                    x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                                    x-on:livewire-upload-finish="uploading = false"
                                    x-on:livewire-upload-cancel="uploading = false"
                                    x-on:livewire-upload-error="uploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <i class="fe fe-camera me-1"></i>
                                    <input type="file" wire:model="proof" re class="w-100" name="proof">
                                    <div x-show="uploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                </div>
                                @error('proof')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button wire:loading.attr="disabled" class="login100-form-btn btn-primary col-4"
                                type="submit">
                                Done
                                <x-spinner />
                            </button>
                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" wire:ignore.self id="paypal">
                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Funding details</h6>
                            <button aria-label="Close" type="button" class="btn-close"
                                data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                        </div>

                        <!-- BCH -->
                        <div class="modal-body" id="paypal">
                            <h2>Tag for PayPal</h2>
                            <p>
                                <span>
                                    <img style="height: 35px;width: 30px;background:transparent"
                                        src="{{ URL('assets/images/icons/paypal.png') }}" class="img-fluid">
                                </span>
                                <span id="addressCopy">{{ $admin_wallet->paypal }}</span>
                                <button onclick="copyFunction()" class="mdi mdi-arrange-bring-forward text-primary"
                                    type="button"></button>
                            </p>

                            <center>
                                <div style="justify-content: center;" class="col-md-6">
                                    <img src="https://chart.googleapis.com/chart?chs=225x225&chld=L|2&cht=qr&chl={{ $admin_wallet->paypal }}"
                                        alt="" class="img-fluid">
                                </div>
                                <div style="justify-content: center;" class="col-md-6">
                                    @if ($proof)
                                        <img class="img-fluid" src="{{ $proof->temporaryUrl() }}">
                                    @else
                                        <span class="text-warning">Please wait for your Uploaded image preview
                                            here</span>
                                    @endif
                                </div>
                            </center>
                            <div>
                                <label class="form-label">Proof of Payment</label>
                                <div class="btn btn-primary btn-sm mt-1 mb-1" style="width: 100%"
                                    x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                                    x-on:livewire-upload-finish="uploading = false"
                                    x-on:livewire-upload-cancel="uploading = false"
                                    x-on:livewire-upload-error="uploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <i class="fe fe-camera me-1"></i>
                                    <input type="file" wire:model="proof" re class="w-100" name="proof">
                                    <div x-show="uploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                </div>
                                @error('proof')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button wire:loading.attr="disabled" class="login100-form-btn btn-primary col-4"
                                type="submit">
                                Done
                                <x-spinner />
                            </button>
                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" wire:ignore.self id="zelle">
                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Funding details</h6>
                            <button aria-label="Close" type="button" class="btn-close"
                                data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                        </div>

                        <!-- BCH -->
                        <div class="modal-body" id="BCH">
                            <h2>Tag for Zelle</h2>
                            <p>
                                <span>
                                    <img style="height: 35px;width: 50px;background:transparent"
                                        src="{{ URL('assets/images/icons/zelle.png') }}" class="img-fluid">
                                </span>
                                <span id="addressCopy">{{ $admin_wallet->zelle }}</span>
                                <button onclick="copyFunction()" class="mdi mdi-arrange-bring-forward text-primary"
                                    type="button"></button>
                            </p>

                            <center>
                                <div style="justify-content: center;" class="col-md-6">
                                    <img src="https://chart.googleapis.com/chart?chs=225x225&chld=L|2&cht=qr&chl={{ $admin_wallet->zelle }}"
                                        alt="" class="img-fluid">
                                </div>
                                <div style="justify-content: center;" class="col-md-6">
                                    @if ($proof)
                                        <img class="img-fluid" src="{{ $proof->temporaryUrl() }}">
                                    @else
                                        <span class="text-warning">Please wait for your Uploaded image preview
                                            here</span>
                                    @endif
                                </div>
                            </center>
                            <div>
                                <label class="form-label">Proof of Payment</label>
                                <div class="btn btn-primary btn-sm mt-1 mb-1" style="width: 100%"
                                    x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                                    x-on:livewire-upload-finish="uploading = false"
                                    x-on:livewire-upload-cancel="uploading = false"
                                    x-on:livewire-upload-error="uploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <i class="fe fe-camera me-1"></i>
                                    <input type="file" wire:model="proof" re class="w-100" name="proof">
                                    <div x-show="uploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                </div>
                                @error('proof')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button wire:loading.attr="disabled" class="login100-form-btn btn-primary col-4"
                                type="submit">
                                Done
                                <x-spinner />
                            </button>
                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" wire:ignore.self id="bnb">
                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Funding details</h6>
                            <button aria-label="Close" type="button" class="btn-close"
                                data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                        </div>

                        <!-- BCH -->
                        <div class="modal-body">
                            <h2>Address for BNB Smart Chain (BEP20)</h2>
                            <p>
                                <span>
                                    <img style="height: 35px;width: 50px;background:transparent"
                                        src="{{ URL('assets/images/icons/bnb.png') }}" class="img-fluid">
                                </span>
                                <span id="addressCopy">{{ $admin_wallet->bnb }}</span>
                                <button onclick="copyFunction()" class="mdi mdi-arrange-bring-forward text-primary"
                                    type="button"></button>
                            </p>

                            <center>
                                <div style="justify-content: center;" class="col-md-6">
                                    <img src="https://chart.googleapis.com/chart?chs=225x225&chld=L|2&cht=qr&chl={{ $admin_wallet->zelle }}"
                                        alt="" class="img-fluid">
                                </div>
                                <div style="justify-content: center;" class="col-md-6">
                                    @if ($proof)
                                        <img class="img-fluid" src="{{ $proof->temporaryUrl() }}">
                                    @else
                                        <span class="text-warning">Please wait for your Uploaded image preview
                                            here</span>
                                    @endif
                                </div>
                            </center>
                            <div>
                                <label class="form-label">Proof of Payment</label>
                                <div class="btn btn-primary btn-sm mt-1 mb-1" style="width: 100%"
                                    x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                                    x-on:livewire-upload-finish="uploading = false"
                                    x-on:livewire-upload-cancel="uploading = false"
                                    x-on:livewire-upload-error="uploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <i class="fe fe-camera me-1"></i>
                                    <input type="file" wire:model="proof" re class="w-100" name="proof">
                                    <div x-show="uploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                </div>
                                @error('proof')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button wire:loading.attr="disabled" class="login100-form-btn btn-primary col-4"
                                type="submit">
                                Done
                                <x-spinner />
                            </button>
                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" wire:ignore.self id="bch">
                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Funding details</h6>
                            <button aria-label="Close" type="button" class="btn-close"
                                data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                        </div>

                        <!-- BCH -->
                        <div class="modal-body">
                            <h2>Address for Bitcoin chash BCH</h2>
                            <p>
                                <span>
                                    <img style="height: 35px;width: 30px;background:transparent"
                                        src="{{ URL('assets/images/icons/BCH.png') }}" class="img-fluid">
                                </span>
                                <span id="addressCopy">{{ $admin_wallet->bch }}</span>
                                <button onclick="copyFunction()" class="mdi mdi-arrange-bring-forward text-primary"
                                    type="button"></button>
                            </p>

                            <center>
                                <div style="justify-content: center;" class="col-md-6">
                                    <img src="https://chart.googleapis.com/chart?chs=225x225&chld=L|2&cht=qr&chl={{ $admin_wallet->zelle }}"
                                        alt="" class="img-fluid">
                                </div>
                                <div style="justify-content: center;" class="col-md-6">
                                    @if ($proof)
                                        <img class="img-fluid" src="{{ $proof->temporaryUrl() }}">
                                    @else
                                        <span class="text-warning">Please wait for your Uploaded image preview here</span>
                                    @endif
                                </div>
                            </center>
                            <div>
                                <label class="form-label">Proof of Payment</label>
                                <div class="btn btn-primary btn-sm mt-1 mb-1" style="width: 100%"
                                    x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                                    x-on:livewire-upload-finish="uploading = false"
                                    x-on:livewire-upload-cancel="uploading = false"
                                    x-on:livewire-upload-error="uploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <i class="fe fe-camera me-1"></i>
                                    <input type="file" wire:model="proof" re class="w-100" name="proof">
                                    <div x-show="uploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                </div>
                                @error('proof')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button wire:loading.attr="disabled" class="login100-form-btn btn-primary col-4"
                                type="submit">
                                Done
                                <x-spinner />
                            </button>
                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" wire:ignore.self id="ltc">
                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Funding details</h6>
                            <button aria-label="Close" type="button" class="btn-close"
                                data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                        </div>

                        <!-- BCH -->
                        <div class="modal-body">
                            <h2>Address for Litecoin LTC</h2>
                            <p>
                                <span>
                                    <img style="height: 35px;width: 60px;background:transparent"
                                        src="{{ URL('assets/images/icons/ltc.jpeg') }}" class="img-fluid">
                                </span>
                                <span id="addressCopy">{{ $admin_wallet->ltc }}</span>
                                <button onclick="copyFunction()" class="mdi mdi-arrange-bring-forward text-primary"
                                    type="button"></button>
                            </p>

                            <center>
                                <div style="justify-content: center;" class="col-md-6">
                                    <img src="https://chart.googleapis.com/chart?chs=225x225&chld=L|2&cht=qr&chl={{ $admin_wallet->zelle }}"
                                        alt="" class="img-fluid">
                                </div>
                                <div style="justify-content: center;" class="col-md-6">
                                    @if ($proof)
                                        <img class="img-fluid" src="{{ $proof->temporaryUrl() }}">
                                    @else
                                        <span class="text-warning">Please wait for your Uploaded image preview here</span>
                                    @endif
                                </div>
                            </center>
                            <div>
                                <label class="form-label">Proof of Payment</label>
                                <div class="btn btn-primary btn-sm mt-1 mb-1" style="width: 100%"
                                    x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                                    x-on:livewire-upload-finish="uploading = false"
                                    x-on:livewire-upload-cancel="uploading = false"
                                    x-on:livewire-upload-error="uploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <i class="fe fe-camera me-1"></i>
                                    <input type="file" wire:model="proof" re class="w-100" name="proof">
                                    <div x-show="uploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                </div>
                                @error('proof')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button wire:loading.attr="disabled" class="login100-form-btn btn-primary col-4"
                                type="submit">
                                Done
                                <x-spinner />
                            </button>
                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" wire:ignore.self id="xrp">
                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Funding details</h6>
                            <button aria-label="Close" type="button" class="btn-close"
                                data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                        </div>

                        <!-- BCH -->
                        <div class="modal-body">
                            <h2>Address for Ripple XRP</h2>
                            <p>
                                <span>
                                    <img style="height: 35px;width: 60px;background:transparent"
                                        src="{{ URL('assets/images/icons/xrp.jpeg') }}" class="img-fluid">
                                </span>
                                <span id="addressCopy">{{ $admin_wallet->xrp }}</span>
                                <button onclick="copyFunction()" class="mdi mdi-arrange-bring-forward text-primary"
                                    type="button"></button>
                            </p>

                            <center>
                                <div style="justify-content: center;" class="col-md-6">
                                    <img src="https://chart.googleapis.com/chart?chs=225x225&chld=L|2&cht=qr&chl={{ $admin_wallet->zelle }}"
                                        alt="" class="img-fluid">
                                </div>
                                <div style="justify-content: center;" class="col-md-6">
                                    @if ($proof)
                                        <img class="img-fluid" src="{{ $proof->temporaryUrl() }}">
                                    @else
                                        <span class="text-warning">Please wait for your Uploaded image preview here</span>
                                    @endif
                                </div>
                            </center>
                            <div>
                                <label class="form-label">Proof of Payment</label>
                                <div class="btn btn-primary btn-sm mt-1 mb-1" style="width: 100%"
                                    x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                                    x-on:livewire-upload-finish="uploading = false"
                                    x-on:livewire-upload-cancel="uploading = false"
                                    x-on:livewire-upload-error="uploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <i class="fe fe-camera me-1"></i>
                                    <input type="file" wire:model="proof" re class="w-100" name="proof">
                                    <div x-show="uploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                </div>
                                @error('proof')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button wire:loading.attr="disabled" class="login100-form-btn btn-primary col-4"
                                type="submit">
                                Done
                                <x-spinner />
                            </button>
                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal end -->

        </form>
        <!-- </center> -->

    </div>
</div>
