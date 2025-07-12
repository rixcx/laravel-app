<section class="edit__profile">
    @if (session('status') === 'profile-updated')
        <p
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 5000)"
            class="text-sm text-gray-600"
        >{{ __('Saved.') }}</p>
    @endif
    
    <div class="edit__profile__form">
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}"  enctype="multipart/form-data">
            @csrf
            @method('patch')

            <!-- Name -->
            <div class="input-group">
                <x-text-input id="name" type="name" name="name" :value="old('name', $user->name)" required autofocus autocomplete="off" placeholder=" "/>
                <x-input-label for="name" :value="__('ユーザーネーム')" />
                <x-input-error :messages="$errors->get('name')" />
            </div>
            
            <!-- Profile Image -->
            <div class="edit__profile__image">
                @if (Auth::user()->icon)
                    <img src="{{ Storage::url($user->icon) }}" alt="Profile Image" class="" >
                @else
                    <img src="{{ asset('storage/images/default-profile.png') }}" alt="Default Profile Image" class="">
                @endif
            </div>
            <div class="input-group">
                <x-image-input id="icon" name="icon" type="file" placeholder=" "/>
                <x-input-label for="icon" :value="__('プロフィール画像')" class="input-label--image" />
                <x-input-error :messages="$errors->get('icon')" />
            </div>

            <!-- Email Address -->
            <div class="input-group">
                <x-text-input id="email" type="email" name="email" :value="old('email', $user->email)" required autofocus autocomplete="off" placeholder=" "/>
                <x-input-label for="email" :value="__('メールアドレス')" />
                <x-input-error :messages="$errors->get('email')" />
            </div>
            
            <div class="edit__profile__btn">
              <x-primary-button>保存する</x-primary-button>
            </div>
        </form>
    </div>
</section>
