@component('mail::message')
# Introduction

Thanks so much for registering!

@component('mail::button', ['url' => 'http://purplenex.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
The Gardener in His Wisdom prunes a branch, but only to
strengthen the tree; He uproots a sapling from the sandy shore,
but only to plant it elsewhere in the realm of eternity, that it may
grow taller and stronger. But the tree bewails and bemoans—not knowing what lies beyond its vision, beyond the realm of the knowable
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
