@extends('Dashboard::master')
@section('content')
<main class="p-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-semibold">Card 1</h2>
        <p>This is some content for card 1.</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-semibold">Card 2</h2>
        <p>This is some content for card 2.</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-semibold">Card 3</h2>
        <p>This is some content for card 3.</p>
      </div>
    </div>
  </main>
  @endsection