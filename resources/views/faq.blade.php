<x-layouts.app :title="__('FAQ')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">

            <div class="heading">
                <h3>Frequently Asked Questions</h3>
            </div>

            <div x-data="{{ $items }}">
                <template x-for="(item, index) in items" :key="index" class="test">
                    <div>
                        <div @click="item.open = !item.open" class="cursor-pointer p-4 bg-gray-200">
                            <span x-text="item.title"></span><span x-text="item.open ? ' - ': ' + '"></span>
                        </div>
                        <div x-show="item.open" class="p-4 bg-white">
                            <p x-text="item.content"></p>
                        </div>
                    </div>
                </template>
            </div>

        </div>
    </div>
</x-layouts.app>
