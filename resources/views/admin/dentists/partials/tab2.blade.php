<div class="row">
    <div class="white-box">
        <div class="row">

            @php
            $jobs = $dentist->jobs;
            @endphp

            @if($jobs->count() == 0)
                <p>This dentist has no jobs</p>
            @else
                @include('admin.jobs.table')
            @endif

        </div>
    </div>
</div>