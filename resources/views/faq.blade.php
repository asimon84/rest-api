<x-layouts.app :title="__('FAQ')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <div class="accordion">
                <div class="accordion-item border-b">
                    <button class="accordion-header w-full text-left py-4 px-6 text-gray-700 font-semibold focus:outline-none">
                        Section 1
                    </button>
                    <div class="accordion-content hidden p-6 text-gray-600">
                        Content for section 1
                    </div>
                </div>
                <div class="accordion-item border-b">
                    <button class="accordion-header w-full text-left py-4 px-6 text-gray-700 font-semibold focus:outline-none">
                        Section 2
                    </button>
                    <div class="accordion-content hidden p-6 text-gray-600">
                        Content for section 2
                    </div>
                </div>
            </div>

            <h3>
                FAQ
            </h3>

            <p>
                What is this?
            </p>

            <p>
                This is a simple example of a REST API.
            </p>

            <p>
                What is a REST API?
            </p>

            <p>
                An API is an Application Programming Interface. It allows different software applications to communicate with each other. It enables the exchange of data, features, and functionality between applications, simplifying and accelerating software development.
                <br/><br/>
                A REST API is an API that uses RESTful principles. REST stands for Representational State Transfer. REST defines how the architecture of a large-scale distributed system, such as the Web, should behave. The REST architectural style emphasises uniform interfaces, independent deployment of components, the scalability of interactions between them, and creating a layered architecture to promote caching to reduce user-perceived latency, enforce security, and encapsulate legacy systems.
                <br/><br/>
                REST has been employed throughout the software industry to create stateless, reliable web-based applications.
            </p>
        </div>
    </div>
</x-layouts.app>
