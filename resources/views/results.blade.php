<x-layout>
  <x-page-heading>Recent Jobs</x-page-heading>
            <div class="mt-6 space-y-6">
              @foreach ($jobs as $job)
              <x-job-card-wide :$job />
              @endforeach
            </div>
</x-layout>