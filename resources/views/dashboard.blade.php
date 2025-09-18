<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <div id="record-chart"></div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            {{ $recordTable }}
        </div>
    </div>
</x-layouts.app>

<script>
    window.chartData = @json($chartData);
</script>

@vite('resources/js/dashboard.js')