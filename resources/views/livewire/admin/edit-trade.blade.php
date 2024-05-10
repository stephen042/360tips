<div class="col-xl-8 col-md-12 col-sm-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Trade</h3>
        </div>
        <form wire:submit="trade_edit">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">User Email address</label>
                    <input type="email" class="form-control" readonly value="{{ $user->email }}">
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label for="exampleInputname">Trade Type</label>
                            <input type="text" class="form-control" readonly value="{{ $trade->trade_type }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label for="exampleInputname1">Trade Asset</label>
                            <input type="text" class="form-control" readonly value="{{ $trade->trade_asset }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label for="exampleInputname">Trade Market</label>
                            <input type="text" class="form-control" readonly value="{{ $trade->trade_market }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label for="exampleInputname1">Trade Stake amount</label>
                            <input type="text" class="form-control" readonly value="${{ $trade->trade_stake_amount }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label for="exampleInputname">Trade By</label>
                            <input type="text" class="form-control" readonly value="{{ $trade->trade_by }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label for="exampleInputname1">Trade Duration</label>
                            <input type="text" class="form-control" readonly value="{{ $trade->trade_duration }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label for="exampleInputname">Trade Status</label>
                            <input type="text" class="form-control" readonly value="{{config('app.trade_status')[$trade->trade_status]}} ...">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label for="exampleInputname1">Select profit or Loss for this trade</label>
                            <select class="form-control form-select" wire:model.live="change">
                                <option>Select profit or Loss for this trade</option>
                                <option value="profit" class="text-success">Profit</option>
                                <option value="loss" class="text-danger">Loss</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 {{$display}}">
                    <div class="form-group {{$display_loss}} m-3">
                        <span class="alert alert-danger"> The Trade stake amount "${{$trade->trade_stake_amount}}" will serve as Loss to the customer</span>
                    </div>
                    <div class="form-group {{$display_profit}}">
                        <label for="exampleInputname">Trade Profit $</label>
                        <input type="number" class="form-control text-success" wire:model.live="profit" placeholder="Input trade profit">
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button class="btn btn-success" type="submit">
                    Complete Trade
                    <x-spinner />
                </button>
                <button type="reset" class="btn btn-danger">Undo</button>
            </div>
        </form>
    </div>
</div>
