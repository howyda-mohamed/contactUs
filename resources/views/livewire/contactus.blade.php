<div>
    @if ($success)
        <div class="alert alert-success">
            {{ $success }}
        </div>
    @endif
    <form wire:submit="save" id="form">
        <h1>Contact Us</h1>
        <div class="form-group">
            <label for="name"> Name</label>
            <input type="text" class="form-control" id="name" wire:model="name"
                placeholder="Enter user name">
            @error('name')
                <div class="col-sm-6">
                    <small id="passwordHelp" class="text-danger">
                        {{ $message }}
                    </small>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" wire:model="email"
                aria-describedby="emailHelp" placeholder="Enter email">
            @error('email')
                <div class="col-sm-6">
                    <small id="passwordHelp" class="text-danger">
                        {{ $message }}
                    </small>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" wire:model="message" id="exampleFormControlTextarea1" rows="3"></textarea>
            @error('message')
                <div class="col-sm-6">
                    <small id="passwordHelp" class="text-danger">
                        {{ $message }}
                    </small>
                </div>
            @enderror
        </div>
        <button wire:loading.attr="disabled" class="btn btn-primary">
            <span wire:loading.remove>Save</span>
            <span wire:loading>Saving.............</span>
        </button>

    </form>
</div>
