<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="text-4xl font-extrabold mb-6">Let's Find You a Great Job</h1>

            <x-forms.form action='/search'>
                <x-forms.input :label='false' name='q' placeholder='I am looking for...' />
            </x-forms.form>

        </section>
        <section class="pt-10">
            <x-section-heading>Top Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>

        </section>
        <x-section-heading>Tags</x-section-heading>

        <div class="mt-6 space-x-1">
            @foreach ($tags as $tag)
                <x-tag :$tag />
            @endforeach

        </div>
        <section>

        </section>
        <x-section-heading>Recent Jobs</x-section-heading>

        <div class="mt-6 space-y-6">
            @foreach ($jobs as $job)
                <x-wide-job-card :$job />
            @endforeach

        </div>
        <section>

        </section>
    </div>
</x-layout>
