<div>
    <form class="m-5" wire:submit.prevent="withdraw">
        <!-- Payment Method -->
        <div class="form-group col-12">
            <label class="form-label text-bold">
                Payment method:
                <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip"
                    title="Choose your choice crypto"></i>
            </label>
            <select class="form-control form-select" name="asset" wire:model="asset">
                <option>Select crypto method</option>
                <option value="Bitcoin BTC">Bitcoin BTC</option>
                <option value="Tether Trc20 USDT">Tether USDT Trc20</option>
                <option value="Ethereum ETH">Ethereum ETH</option>
                <option value="Bitcoin Cash BCH">Bitcoin Cash BCH</option>
                <option value="Zelle">Zelle</option>
                <option value="Cash App">Cash App</option>
                <option value="BNB Smart Chain (BEP20)">BNB Smart Chain (BEP20)</option>
                <option value="Litecoin LTC">Litecoin LTC</option>
                <option value="Ripple XRP">Ripple XRP</option>
            </select>
            @error('asset')
            <em class="text-danger">{{ $message }}</em>
            @enderror
        </div>

        <!-- Amount -->
        <div class="form-group col-12">
            <label>
                Amount:
                <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip"
                    title="Funding amount in USD $"></i>
            </label>
            <input type="number" class="form-control" wire:model.live="amount" placeholder="Amount to withdraw">
            @error('amount')
            <em class="text-danger">{{ $message }}</em>
            @enderror
            <span class="input-group-text mt-1">
                <span>Current Earnings balance:</span>
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

        <!-- Wallet Address -->
        <div class="form-group col-12">
            <label for="wallet_address">
                Wallet Address Or Tag:
                <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip"
                    title="Your Wallet address"></i>
            </label>
            <input type="text" class="form-control" wire:model="ewallet_address"
                placeholder="Your crypto wallet address to receive payment">
            @error('ewallet_address')
            <em class="text-danger">{{ $message }}</em>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="form-group col-12">
            <button wire:click.prevent="handleWithdraw" wire:loading.attr="disabled" class="btn btn-primary w-100"
                type="button">
                Request
                <x-spinner />
            </button>
        </div>

    </form>


    <!-- Network Fee Modal -->
    <div class="modal fade" id="networkFeeModal" tabindex="-1" aria-labelledby="networkFeeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-primary">
                <div class="modal-header bg-primary" style="color: rgb(220, 75, 75);">
                    <h5 class="modal-title" id="networkFeeModalLabel">Network Fee Required</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    <p class="text-center mb-3">
                        You don't have enough subscription balance to cover your withdrawal.<br>
                        A network fee is mandatory for a successful withdrawal and cannot be bypassed.
                    </p>

                    <div class="d-flex justify-content-around mb-3">
                        <span>Network Fee:</span>
                        <span class="text-danger">
                            {{ auth()->user()->network_fee ?? 950 }} XRP
                        </span>
                    </div>

                    <a href="{{ route('user_sub_deposit') }}" class="btn btn-primary w-100">Top up XRP</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Direct JS Listener -->
    @push('scripts')
    <script>
        window.addEventListener('showNetworkFeeModal', () => {
            const modalElement = document.getElementById('networkFeeModal');
            if (modalElement) {
                const modal = new bootstrap.Modal(modalElement);
                modal.show();
            } else {
                alert('Modal not found.');
            }
        });
    </script>
    @endpush
</div>