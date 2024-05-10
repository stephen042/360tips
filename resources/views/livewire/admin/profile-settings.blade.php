<div class="col-xl-4 col-md-12 col-sm-12">

    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Password</div>
        </div>
        @error('profile_picture')
            <em class="text-danger mx-3">{{ $message }}</em>
        @enderror
        <div class="card-body">
            <div class="d-flex mb-3">
                <form wire:submit="update_profile_pic">
                    @if ($user_data->profile_pic)
                        <img src="{{ asset('storage/' . $user_data->profile_pic) }}" alt="User Avatar"
                            class="rounded-circle avatar-lg me-2">
                    @else
                        <img src="{{asset('assets/images/profile.png')}}" alt="User Avatar" class="rounded-circle avatar-lg me-2">
                    @endif


                    <div class="ms-auto mt-xl-2 mt-lg-0 me-lg-2">
                        <div class="btn btn-primary btn-sm mt-1 mb-1" style="width: 85%">

                            <i class="fe fe-camera me-1"></i>
                            <input type="file" accept="image/png, image/jpeg" class="w-100" name="profile_picture"
                                wire:model.live="profile_picture" id="">
                        </div>

                        <button type="button" wire:click="delete_pic"
                            wire:confirm="Are you sure you want to Delete your profile Picture ?"
                            class="btn btn-danger btn-sm mt-1 mb-1 "><i
                                class="fe fe-camera-off me-1 float-start"></i>Delete
                            picture
                        </button>

                        <button type="submit" class="btn btn-success btn-sm mt-1 mb-1"><i
                                class="fe fe-camera me-1 float-start"></i>
                            Upadate picture
                        </button>

                    </div>
                </form>
            </div>
            <hr>
            <form wire:submit="updatepassword">
                <div class="form-group">
                    <label class="form-label">Current Password</label>
                    <input type="password" class="form-control" name="current_password" wire:model="current_password"
                        placeholder="Input current password">
                    @error('current_password')
                        <em class="text-danger">{{ $message }}</em>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">New Password</label>
                    <input type="password" class="form-control" wire:model="password" name="password"
                        placeholder="Input new password">
                </div>
                @error('password')
                    <em class="text-danger">{{ $message }}</em>
                @enderror
                <div class="form-group">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control"
                        wire:model="password_confirmation" placeholder="Confirm password">
                </div>
                @error('password_confirmation')
                    <em class="text-danger">{{ $message }}</em>
                @enderror
        </div>
        <div class="card-footer text-end">

            
            <button wire:loading.attr="disabled" class="btn btn-primary" type="submit">
                Update
                <x-spinner />
            </button>
            <button type="reset" class="btn btn-danger">Undo</button>
        </div>
        </form>
    </div>
</div>
