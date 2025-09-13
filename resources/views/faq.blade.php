<x-layouts.app :title="__('FAQ')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">

            <div>
                Frequently Asked Questions
            </div>

            <div x-data="{ items: [
                { title: 'What is this?', content: 'This is a simple example of a REST API.', open: false },
                { title: 'What is a REST API?', content: 'An API is an Application Programming Interface. It allows different software applications to communicate with each other. It enables the exchange of data, features, and functionality between applications, simplifying and accelerating software development.<br/><br/>A REST API is an API that uses RESTful principles. REST stands for Representational State Transfer. REST defines how the architecture of a large-scale distributed system, such as the Web, should behave. The REST architectural style emphasises uniform interfaces, independent deployment of components, the scalability of interactions between them, and creating a layered architecture to promote caching to reduce user-perceived latency, enforce security, and encapsulate legacy systems.<br/><br/>REST has been employed throughout the software industry to create stateless, reliable web-based applications.', open: false }
            ] }">
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
