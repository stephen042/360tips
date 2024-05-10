<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">ALL Transactions History </h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom w-100"
                        id="responsive-datatable">
                        <thead>
                            <tr>
                                <td class="wd-15p border-bottom-0">#</td>
                                <td class="wd-15p border-bottom-0">Category</td>
                                <td class="wd-15p border-bottom-0">Date</td>
                                <td class="wd-15p border-bottom-0">Amount</td>
                                <td class="wd-15p border-bottom-0">Asset</td>
                                <td class="wd-15p border-bottom-0">Customer Wallet Address</td>
                                <td class="wd-15p border-bottom-0">Proof IMG <i
                                        class="fas fa-eye"></i></td>
                                <td class="wd-15p border-bottom-0">Status</td>
                                <td class="wd-15p border-bottom-0">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($transactions as $counter => $transaction)
                                <tr>
                                    <td>{{ $counter + 1 }}</td>
                                    @if ($transaction->transaction_category == 3)
                                        <td class="text-success fs-15 fw-semibold">
                                            {{ config('app.transaction_category')[$transaction->transaction_category] }}
                                        </td>
                                    @elseif ($transaction->transaction_category == 2)
                                        <td class="text-danger fs-15 fw-semibold">
                                            {{ config('app.transaction_category')[$transaction->transaction_category] }}
                                        </td>
                                    @else
                                        <td class="text-success fs-15 fw-semibold">
                                            {{ config('app.transaction_category')[$transaction->transaction_category] }}
                                        </td>
                                    @endif
                                    <td>{{ date('Y/M/d h:i a', strtotime($transaction->created_at)) }}
                                    </td>
                                    <td>${{ number_format($transaction->transaction_amount, 2) }}
                                    </td>
                                    <td>{{ $transaction->transaction_asset }}</td>
                                    <td style="overflow-x: auto;max-width: 200px;">
                                        @if (!$transaction->transaction_ewallet_address)
                                            Sent Admin's wallet address
                                        @else
                                            {{ $transaction->transaction_ewallet_address }}
                                        @endif

                                    </td>
                                    <td>
                                        @if (!$transaction->transaction_proof)
                                            No image for withdrawal
                                        @else
                                            <a href="{{ asset('storage/' . $transaction->transaction_proof) }}"
                                                target="_blank">
                                                View proof
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        @endif

                                    </td>
                                    @if ($transaction->transaction_status == 2)
                                        <td class="text-success fs-15 fw-semibold">
                                            {{ config('app.transaction_status')[$transaction->transaction_status] }}
                                        </td>
                                    @elseif ($transaction->transaction_status == 3)
                                        <td class="text-danger fs-15 fw-semibold">
                                            {{ config('app.transaction_status')[$transaction->transaction_status] }}
                                        </td>
                                    @else
                                        <td class="text-info fs-15 fw-semibold">
                                            {{ config('app.transaction_status')[$transaction->transaction_status] }}
                                        </td>
                                    @endif
                                    <td class="d-flex">
                                        @if ($transaction->transaction_status == 1)
                                            <form
                                                action="{{ route('edit_user_post', [$user_data->id]) }}"
                                                method="post">
                                                @csrf
                                                <input type="hidden" name="action"
                                                    value="approve_transaction">
                                                <input type="hidden" name="id"
                                                    value="{{ $transaction->transaction_id }}">
                                                <button
                                                    class="btn btn-info btn-sm mx-1 confirm "
                                                    type="submit">Approve
                                                </button>
                                            </form>
                                            <form
                                                action="{{ route('edit_user_post', [$user_data->id]) }}"
                                                method="post">
                                                @csrf
                                                <input type="hidden" name="action"
                                                    value="decline_transaction">
                                                <input type="hidden" name="id"
                                                    value="{{ $transaction->transaction_id }}">
                                                <button
                                                    class="btn btn-danger btn-sm mx-1 confirm"
                                                    type="submit">Decline
                                                </button>
                                            </form>
                                        @else
                                            <button class="btn btn-success btn-sm"
                                                type="submit" disabled>Completed</button>
                                        @endif

                                    </td>
                                </tr>

                            @empty
                            @endforelse
                            <tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>