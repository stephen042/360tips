<div class="col-xl-12 col-md-12 col-sm-12 mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Create New Signal Plan</h3>
        </div>
        <form wire:submit="create_status_plan">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Plan Name</label>
                    <input type="text" wire:model.blur="plan_name" class="form-control"
                        placeholder="put your new plan name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Plan Amount</label>
                    <input type="number" wire:model.blur="plan_amount" class="form-control" 
                        placeholder="put your new plan amount">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Duration</label>
                    <input type="text" wire:model.blur="plan_duration" class="form-control" 
                        placeholder="E.g 3 days or 1 day etc">
                </div>
            </div>
            <div class="card-footer text-end">
                <button class="btn btn-success" type="submit">
                    create
                    <x-spinner />
                </button>
                <button type="reset" class="btn btn-danger">Undo</button>
            </div>
        </form>
    </div>
</div>
