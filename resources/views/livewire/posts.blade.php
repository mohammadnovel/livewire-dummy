<div class="card">
    <div class="card-body">
        <div>
            <div class="d-flex align-items-start px-2 py-2">
                <button wire:click="$set('updateMode', 'about')" class="btn btn-primary btn-sm mr-3">Biodata</button>
                <button wire:click="$set('updateMode', 'experience')" class="btn btn-primary btn-sm mr-3">Pengalaman Kerja</button>
                <button wire:click="$set('updateMode', 'fpassword')" class="btn btn-primary btn-sm">Edit Password</button>
            </div>
    
            
          
            @if($updateMode == 'fpassword')
                @livewire('form-passwords')
            @elseif($updateMode == 'experience')
                @livewire('experiences')

            @else
                @include('livewire.abouts')
            @endif
            
           
        </div>
    </div>
</div>