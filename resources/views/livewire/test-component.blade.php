<div>
    {{-- The Master doesn't talk, he acts. --}}

    {{$new_name}}

    <div>
        <div class="flex flex-col w-96">
            <input type="text" class="rounded" wire:model.lazy="new_name">
            <button class="rounded px-4 py-2 bg-indigo-400" wire:click="updateName">Сменить имя</button>

            <p>Меня зовут {{$user->name}}</p>
        </div>
    </div>

</div>
