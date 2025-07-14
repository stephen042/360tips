<div class="row">
    <!-- COL START -->
    <div class="col-md-12  col-xl-4">
        <div class="card">
            <div class="card-body">
                <form wire:submit="credit_balance">
                    <div class="form-group">
                        <label class="form-label">Credit user Balance Manually</label>
                        <div class="input-group">
                            <input type="number" wire:model.live="credit_bal_amount"
                                class="form-control form-control-sm" placeholder="Credit User Balance">
                            <span class="input-group-btn ms-0">
                                <button class="btn btn-sm btn-success please-wait-btn" type="submit">
                                    credit
                                </button>
                            </span>
                        </div>
                        @error('credit_bal_amount')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                </form>
                <form wire:submit="debit_balance">
                    <div class="form-group">
                        <label class="form-label">Debit user Balance Manually</label>
                        <div class="input-group">
                            <input type="number" wire:model.live="debit_bal_amount" class="form-control form-control-sm"
                                placeholder="Debit User Balance">
                            <span class="input-group-btn ms-0">
                                <button class="btn btn-sm btn-danger please-wait-btn" type="submit">
                                    Debit
                                </button>
                            </span>
                        </div>
                        @error('debit_bal_amount')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div><!-- COL END -->
    <!-- COL START -->
    <div class="col-md-12  col-xl-4">
        <div class="card">
            <div class="card-body">
                <form wire:submit="credit_earnings_balance">
                    <div class="form-group">
                        <label class="form-label">Credit user Earnings balance Manually</label>
                        <div class="input-group">
                            <input type="number" wire:model.live="credit_earnings_bal_amount"
                                class="form-control form-control-sm" placeholder="Credit User earings Funds">
                            <span class="input-group-btn ms-0">
                                <button class="btn btn-sm btn-success please-wait-btn" type="submit">
                                    credit
                                </button>
                            </span>
                        </div>
                        @error('credit_earnings_bal_amount')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                </form>
                <form wire:submit="debit_earnings_balance">
                    <div class="form-group">
                        <label class="form-label">Debit user Earnings balance Manually</label>
                        <div class="input-group">
                            <input type="number" wire:model.live="debit_earnings_bal_amount"
                                class="form-control form-control-sm" placeholder="Debit User earings Funds">
                            <span class="input-group-btn ms-0">
                                <button class="btn btn-sm btn-danger please-wait-btn" type="submit">
                                    Debit
                                </button>
                            </span>
                        </div>
                        @error('debit_earnings_bal_amount')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div><!-- COL END -->
    <!-- COL START -->
    <div class="col-md-12  col-xl-4">
        <div class="card">
            <div class="card-body">
                <form wire:submit="credit_sub_balance">
                    <div class="form-group">
                        <label class="form-label">Credit user Sub balance Manually</label>
                        <div class="input-group">
                            <input type="number" wire:model.live="credit_sub_bal_amount"
                                class="form-control form-control-sm" placeholder="Credit User Sub Funds">
                            <span class="input-group-btn ms-0">
                                <button class="btn btn-sm btn-success please-wait-btn" type="submit">
                                    credit
                                </button>
                            </span>
                        </div>
                        @error('credit_sub_bal_amount')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                </form>
                <form wire:submit="debit_sub_balance">
                    <div class="form-group">
                        <label class="form-label">Debit user Sub balance Manually</label>
                        <div class="input-group">
                            <input type="number" wire:model.live="debit_sub_bal_amount"
                                class="form-control form-control-sm" placeholder="Debit User Sub Funds">
                            <span class="input-group-btn ms-0">
                                <button class="btn btn-sm btn-danger please-wait-btn" type="submit">
                                    Debit
                                </button>
                            </span>
                        </div>
                        @error('debit_sub_bal_amount')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div><!-- COL END -->
    <!-- COL START -->
    <div class="col-md-12  col-xl-4">
        <div class="card">
            <div class="card-body">
                <form wire:submit="change_status">
                    <div class="form-group">
                        <label class="form-label">Change Account status</label>
                        <div class="input-group">
                            <select class="form-control form-select" wire:model.blur="change_status_data">
                                <option>Select New account status</option>
                                <option value="None">None</option>
                                @foreach ($status_plans as $status_plan)
                                <option value="{{ $status_plan->name }}">{{ $status_plan->name }}</option>
                                @endforeach
                            </select>
                            <span class="input-group-btn ms-0">
                                <button class="btn btn-sm btn-primary please-wait-btn" type="submit">
                                    change
                                </button>
                            </span>
                        </div>
                        @error('change_status_data')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                </form>
                <div class="form-group">
                    <label class="form-label">Email User</label>
                    <div class="input-group">
                        <input type="email" readonly class="form-control form-control-sm"
                            value="{{ $user_data->email }}">
                        <span class="input-group-btn ms-0">
                            <a href="mailto:{{ $user_data->email }}" class="btn btn-sm btn-primary fs-6">
                                send
                                <i class="far fa-envelope"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- COL END -->
    <div class="col-md-12 col-xl-4">
        <div class="card">
            <div class="card-body">
                <form wire:submit.prevent="sendMessageToUser">
                    <div class="form-group mb-3">
                        <label class="form-label">Message Title</label>
                        <input type="text" class="form-control" wire:model.defer="message_title"
                            placeholder="Enter message title">
                        @error('message_title')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Send Message to User</label>
                        <textarea class="form-control" rows="6" wire:model.defer="message_body"
                            placeholder="Write your message here..."></textarea>
                        @error('message_body')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary please-wait-btn" type="submit">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- COL END -->
    <div class="col-md-12 col-xl-4">
        <div class="card">
            <div class="card-body">
                <form wire:submit.prevent="networkFee">
                    <!-- Toggle for Network Fee Active/Inactive -->
                    <div class="form-group mb-3 text-center">
                        <label class="form-label d-block my-3">Network Fee:</label>
                        <div class="d-flex justify-content-center align-items-center gap-5">
                            <span class="text-muted">Inactive</span>
                            <div class="form-check form-switch">
                                <input class="form-check-input big-toggle" type="checkbox" role="switch"
                                    id="networkFeeSwitch" wire:model="network_fee_status">
                            </div>
                            <span class="text-muted ">Active</span>
                        </div>
                        <div class="my-2 text-center">
                            <span>{{ $network_fee_status ? 'Network Fee is Active' : 'Network Fee is Inactive'
                                }}</span>
                        </div>
                        @error('network_fee_status')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                    <hr>
                    <!-- Input for Network Fee Amount -->
                    <div class="form-group mb-3">
                        <label class="form-label">Network Fee Amount:</label>
                        <input type="text" class="form-control" wire:model.defer="network_fee_amount"
                            placeholder="Enter network fee amount">
                        @error('network_fee_amount')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <button class="btn btn-primary please-wait-btn" type="submit">
                            save changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- COL END -->


</div>