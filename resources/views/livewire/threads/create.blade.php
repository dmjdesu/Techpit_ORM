<div>
    <button type="button" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" 
        wire:click.prevent="openModal()">新規追加</button>
    <x-jet-modal wire:model="modalStatus">
        <x-slot name="slot">
            <div class="flex justify-between items-center border-b p-2 text-xl">
                <div></div>
                <h6 class="text-xl font-bold">新規追加</h6>
                <button type="button" wire:click.prevent="closeModal()">✖</button>
            </div>
            <div class="p-10">
                <!-- content -->
                <form class="w-full">
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-body">
                                スレッドタイトル
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                id="inline-body" type="text" value="" name="body" wire:model="body">
                                @error('firstname')
                                    <span class="block sm:inline text-red-700">{{ $message }}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button
                            class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                            type="button" wire:click.prevent="store()">
                            追加する
                        </button>
                    </div>
                </form>
            </div>
        </x-slot>
    </x-jet-modal>
</div>

