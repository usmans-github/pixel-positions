<x-layout>
    <x-page-heading>Results</x-page-heading>

    <div class="mt-6 space-y-6">
        @foreach ($jobs as $job)
            <x-wide-job-card :$job />
        @endforeach

    </div>
</x-layout>