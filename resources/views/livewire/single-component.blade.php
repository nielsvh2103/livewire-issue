<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">

                <button type="button"
                        wire:click="updateStyle('color:red; font-size:64px;')"
                        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                    Update style
                </button>

                <button type="button"
                        wire:click="updateClass('bg-green-500 text-xl')"
                        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                    Update class
                </button>

                <button type="button"
                        wire:click="resetProps"
                        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                    Reset
                </button>

                <!-- this div does not update style -->
                <div class="{{ $class }}" style="{{ $style }}">
                    this div does not update style tag
                </div>

                <!-- this div does update due to wire:replace.self -->
                <div wire:replace.self class="{{ $class }}" style="{{ $style }}">
                    this div updates style tag with wire:replace.self
                </div>

                <div wire:key="{{ uniqid() }}" class="{{ $class }}" style="{{ $style }}">
                    this div updates style tag with wire:key
                </div>
            </div>
        </div>
    </div>
</div>
