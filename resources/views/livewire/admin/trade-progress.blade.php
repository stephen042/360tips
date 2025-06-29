<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
    {{-- Trading Progress Section --}}
    <div class="card overflow-hidden">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <p class="mb-2 number-font">Trading Progress {{ $user_data->progress_bar_status }}%</p>
                    <div class="progress progress-md">
                        <div
                            class="progress-bar progress-bar-striped progress-bar-animated bg-info-1 w-{{ $user_data->progress_bar_status }}">
                            {{ $user_data->progress_bar_status }}%
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <form wire:submit.prevent="trade">
                    <div class="form-group col-10">
                        <label class="form-label">Manage Trading Progress</label>
                        <div class="input-group">
                            <input type="number" wire:model.defer="trade_progress" class="form-control form-control-sm"
                                placeholder="e.g 47">
                            <span class="input-group-btn ms-0">
                                <button class="btn btn-sm btn-success fs-6" type="submit">
                                    Submit
                                </button>
                            </span>
                        </div>
                        @error('trade_progress')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Signals Strength Section --}}
    <div class="card overflow-hidden mt-4">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <p class="mb-2 number-font">Signals Strength Progress {{ $user_data->signal_strength }}%</p>
                    <div class="progress" style="height: 20px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                            style="width: {{ $user_data->signal_strength }}%;">
                            {{ $user_data->signal_strength }}%
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <form wire:submit.prevent="signal">
                    <div class="form-group col-10">
                        <label class="form-label">Manage Signals Strength Progress</label>
                        <div class="input-group">
                            <input type="number" wire:model.defer="signal_progress" class="form-control form-control-sm"
                                placeholder="e.g 47">
                            <span class="input-group-btn ms-0">
                                <button class="btn btn-sm btn-success fs-6" type="submit">
                                    Submit
                                </button>
                            </span>
                        </div>
                        @error('signal_progress')
                        <em class="text-danger">{{ $message }}</em>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>