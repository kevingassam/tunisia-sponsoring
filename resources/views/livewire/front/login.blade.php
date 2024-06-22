<div>
    <form wire:submit='login'>
        <div class="modal-body">
            <h3 class="text-center">
                <img src="/icons/icon.png" height="30" alt="" srcset=""> <br>
                Mon compte sponsoring
            </h3>
            <br>
    
            <div class="mb-3">
                <label for="">Email</label>
                <input type="text" name="" class="form-control @error('email') is-invalid @enderror"
                    wire:model='email' placeholder="Adresse Email" id="">
                @error('email')
                    <span class="small text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="">Mot de passe</label>
                <input type="text" name="" class="form-control  @error('password') is-invalid @enderror"
                    wire:model='password' placeholder="Password" id="">
                @error('password')
                    <span class="small text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
    
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
    
            <div class="text-center">
                <button class="btn btn-danger">
                    <span wire:loading>
                        <img src="/icons/kOnzy.gif" height="20" width="20" alt="login" srcset="">
                    </span>
                    Connexion
                </button>
                <br><br>
                <a href="#" class="text-danger">
                    Faire ma première <b>Sponsorisation</b> !
                </a>

            </div>
        </div>
    </form>
</div>
