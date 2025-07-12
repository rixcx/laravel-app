<section class="edit__delete">
    <h2 class="edit__delete__title">アカウントを削除</h2>
    <p class="edit__delete__text">アカウントを削除すると、すべてのリソースとデータが完全に削除されます。アカウントを削除する前に、保持したいデータや情報をダウンロードしてください。</p>

    <div class="edit__delete__btn">
      <x-secondary-button
          x-data=""
          x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
      >{{ __('アカウントを削除する') }}</x-secondary-button>
    </div>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="edit__delete__form">
            @csrf
            @method('delete')

            <div class="edit__delete__confirm">
                <p>確認のため、パスワードを入力してください</p>
                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    placeholder="{{ __('パスワード') }}"
                />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="" />
            </div>

            <div class="edit__delete__btns">
                <x-secondary-button x-on:click="$dispatch('close')">
                    やっぱりやめる
                </x-secondary-button>

                <x-danger-button>
                    アカウントを削除する
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
