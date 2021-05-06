@props(['wrapped' => true, 'wrapTag' => 'li', 'tag' => 'hr' ])
@if($wrapped)
@if($wrapTag == 'li')
<li>
@else
<div>
@endif
@endif
    <hr class="dropdown-divider my-1 h-0 overflow-hidden border-top" />
@if($wrapped)
@if($wrapTag == 'li')
</li>
@else
</div>
@endif
@endif
