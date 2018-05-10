@foreach($types as $type)
    <a href="/post?type={{ $type->name }}">$type->name</a>
@endforeach