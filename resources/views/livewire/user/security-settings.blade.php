<div class="card">
    <form wire:submit="kyc">
        <div class="card-header">
            <div class="card-title">KYC</div>
        </div>
        <div class="card-body">
            <div class="d-flex mb-3">
                @if ($user_data->verify_status == 2 && $kyc_data->kyc_status == 2)
                    <div class="alert alert-success"> Verified Account !!</div>
                @elseif($user_data->verify_status == 1 && $kyc_data->kyc_status == 1)
                    <div class="alert alert-warning"> Your Datas are on validation proccess !!</div>
                @elseif ($user_data->verify_status == 3 && $kyc_data->kyc_status == 3)
                    <div class="alert alert-warning"> Your Data was Declined</div>
                @else
                    <div class="alert alert-danger"> Please verify your Account !!</div>
                @endif



            </div>
            <div class="form-group">
                <label class="form-label">Choose your preferred Document</label>
                <select class="form-control form-select" wire:model.blur="document">
                    <option>select document</option>
                    <option value="National ID Card">National ID Card</option>
                    <option value="Driver's license">Driver's license</option>
                </select>
                @error('document')
                    <em class="text-danger">{{ $message }}</em>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label">Front Page of Document</label>
                <input type="file" class="form-control" accept="image/png, image/jpeg"
                    wire:model.blur="front_document" name="front_document" value="">
                @error('front_document')
                    <em class="text-danger">{{ $message }}</em>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label">Back Page of Document</label>
                <input type="file" class="form-control" accept="image/png, image/jpeg"
                    wire:model.blur="back_document" value="">
                @error('back_document')
                    <em class="text-danger">{{ $message }}</em>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputnumber">Date of Birth</label>
                <input type="date" class="form-control" wire:model="date_of_birth" id="exampleInputnumber"
                    placeholder="ph number">
                @error('date_of_birth')
                    <em class="text-danger">{{ $message }}</em>
                @enderror
            </div>
        </div>
        <div class="card-footer text-end">

            <x-spinner />

            @if ($user_data->verify_status == 2 && $kyc_data->kyc_status == 2)
                <button class="btn btn-primary" disabled type="submit">Submit Request</button>
                <button class="btn btn-danger" disabled type="reset">Reset</button>
            @elseif($user_data->verify_status == 1 && $kyc_data->kyc_status == 1)
                <button class="btn btn-primary" disabled type="submit">Submit Request</button>
                <button class="btn btn-danger" disabled type="reset">Reset</button>
            @elseif ($user_data->verify_status == 3 && $kyc_data->kyc_status == 3)
                <button class="btn btn-primary" type="submit">Submit Request</button>
                <button class="btn btn-danger" type="reset">Reset</button>
            @else
                <button class="btn btn-primary col-3" type="submit">
                    Submit Request
                    <x-spinner />
                </button>

                <button class="btn btn-danger" type="reset">Reset</button>
            @endif

        </div>
    </form>
</div>
