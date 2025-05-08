@if(isset($statuses) && $statuses->count() > 0)
    <div class="col-md-8 col-lg-7">
        <h1 class="fs-3">{{__('profile.last-journeys-of')}} {{ $user->name }}:</h1>
        @include('includes.statuses', ['statuses' => $statuses, 'showDates' => true])
    </div>

    <div class="mt-5">
        {{ $statuses->onEachSide(1)->links() }}
    </div>
@else
    <div class="col-md-8 col-lg-7">
                    <span class="text-danger fs-3">
                        @if($user->train_distance > 0)
                            {{__('profile.no-visible-statuses', ['username' => $user->name])}}
                        @else
                            {{__('profile.no-statuses', ['username' => $user->name])}}
                        @endif
                    </span>
    </div>
@endif
