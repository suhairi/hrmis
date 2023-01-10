<div class="container">

    <input type="text" wire:model="name" class="mr-4"> <strong>Welcome {{ $name }}</strong>

    @if($currentStep == 1)
        <h3>First Step</h3>
        <button class="btn btn-success" type="button">Next</button>
    @endif

    @if($currentStep == 2)
        <h3>Second Step</h3>
        <button class="btn btn-success" wire:click='prev' type="button">Previous</button>
        <button class="btn btn-success" wire:click='secondStep'>Next</button>
    @endif

    
</div>
