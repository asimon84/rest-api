<x-layouts.app :title="__('About')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">

            <div class="heading">
                <h3>About</h3>
            </div>

            <p class="text">
                This is a simple example of a REST API, an Application Programming Interface that uses RESTful principles to provide stateless interaction with test data. It also includes this simple "client portal" to review data and link to the code repository and documentation.
            </p>

            <p class="text">
                You can create, edit, and deleted records through the endpoints provided by the API. From the dashboard page of this client portal you can review the data you have interacted with.
            </p>

            <p class="text">
                <a class="link" href="https://github.com/asimon84/rest-api" target="_NEW">Click Here</a> for the Code Repository for this application.
            </p>

            <p class="text">
                <a class="link" href="./docs" target="_NEW">Click Here</a> for the API Endpoints Documentation.
            </p>

        </div>
    </div>
</x-layouts.app>
