<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="text-4xl font-extrabold mb-6">Let's Find You a Great Job</h1>
            <form action="">
                <input type="text" placeholder="I'm looking for..." class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
            </form>
        </section>
        <section class="pt-10">
            <x-section-heading>Top Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">

                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>

        </section>
        <x-section-heading>Tags</x-section-heading>
        
            <div class="mt-6 space-x-1"> 
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        <section>

        </section>
        <x-section-heading>Recent Jobs</x-section-heading>

        <div class="mt-6 space-y-6"> 
            <x-wide-job-card />
            <x-wide-job-card />
            <x-wide-job-card />
        </div>
        <section>

        </section>
    </div>
</x-layout>
