<h1>Star detail</h1>
@foreach ($data as $id => $star)
    <h3>Name : {{$star->name}} </h3>
    <h3>Email : {{$star->email}} </h3>
    <h3>Age : {{$star->age}} </h3>
    <h3>City : {{$star->city}} </h3>

@endforeach