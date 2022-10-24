@php
use Illuminate\Support\Str;

$sorted = $schedules->sortBy('date');

$dia1 = $sorted
  ->filter(fn ($e) => explode(' ', $e->date)[0] === '2022-10-07')
  ->groupBy('date');

$dia2 = $sorted
  ->filter(fn ($e) => explode(' ', $e->date)[0] === '2022-10-08')
  ->groupBy('date');

$dia3 = $sorted
  ->filter(fn ($e) => explode(' ', $e->date)[0] === '2022-10-09')
  ->groupBy('date');
@endphp

<div class="site-section">
    <div class="container">
      <table class="table table-bordered table-hover table-condensed text-center">
        <thead>
          <tr class="thead-dark">
            <th scope="col" width="100"></th>
            <th scope="col" colspan="3">Sexta 07/10</th>
          </tr>
          <tr class="thead-dark">
            <th scope="col"></th>
            <th scope="col" width="30%">Trilha 1</th>
            <th scope="col">Trilha 2</th>
            <th scope="col">Trilha 3</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dia1 as $date => $events)
            @php
              $events = $events->sortBy(fn ($e) => $e->rooms[0])->sortBy('date');
              [, $time] = explode(' ', $events->first()->date);
            @endphp
            <tr>
              <th scope="row" class="table-secondary">{{ $time }}</th>
              @foreach ($events as $event)
                @php
                  $hasPicture = file_exists("{$page->root}/source" . $event->picture);
                @endphp
                @if ($events->count() === 1)
                  <td colspan="3">
                    @if ($event->type === 'span')
                      <strong>{{ $event->title }}</strong>
                    @else
                      @if ($hasPicture)
                        <img src="{{ url($event->picture) }}" class="img-thumbnail img-fluid rounded-circle" width="100"><br>
                      @endif
                      <h5>{{ implode(', ', $event->speakers) }}</h5>
                      <small>Local: {{ Str::plural('sala', count($event->rooms)) }} {{ implode(', ', $event->rooms) }}</small> 
                      <br>
                      {{ $event->title }}
                    @endif
                  </td>
                @else
                  <td>
                    @if ($hasPicture)
                      <img src="{{ url($event->picture) }}" class="img-thumbnail img-fluid rounded-circle" width="100"><br>
                    @endif
                    <h5>{{ implode(', ', $event->speakers) }}</h5>
                    <small>Local: {{ Str::plural('sala', count($event->rooms)) }} {{ implode(', ', $event->rooms) }}</small> 
                    <br>
                    {{ $event->title }}
                  </td>
                @endif
              @endforeach
            </tr>
          @endforeach
        </tbody>
      </table>
      <table class="table table-bordered table-hover table-condensed text-center">
        <thead>
          <tr class="thead-dark">
            <th scope="col" width="100"></th>
            <th scope="col" colspan="3">Sábado 08/10</th>
          </tr>
          <tr class="thead-dark">
            <th scope="col"></th>
            <th scope="col" width="30%">Trilha 1</th>
            <th scope="col">Trilha 2</th>
            <th scope="col">Trilha 3</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dia2 as $date => $events)
            @php
              $events = $events->sortBy(fn ($e) => $e->rooms[0])->sortBy('date');
              [, $time] = explode(' ', $events->first()->date);
            @endphp
            <tr>
              <th scope="row" class="table-secondary">{{ $time }}</th>
              @foreach ($events as $event)
                @php
                  $hasPicture = file_exists("{$page->root}/source" . $event->picture);
                @endphp
                @if ($events->count() === 1)
                  <td colspan="3">
                    @if ($event->type === 'span')
                      <strong>{{ $event->title }}</strong>
                    @else
                      @if ($hasPicture)
                        <img src="{{ url($event->picture) }}" class="img-thumbnail img-fluid rounded-circle" width="100"><br>
                      @endif
                      <h5>{{ implode(', ', $event->speakers) }}</h5>
                      <small>Local: {{ Str::plural('sala', count($event->rooms)) }} {{ implode(', ', $event->rooms) }}</small> 
                      <br>
                      {{ $event->title }}
                    @endif
                  </td>
                @else
                  <td>
                    @if ($hasPicture)
                      <img src="{{ url($event->picture) }}" class="img-thumbnail img-fluid rounded-circle" width="100"><br>
                    @endif
                    <h5>{{ implode(', ', $event->speakers) }}</h5>
                    <small>Local: {{ Str::plural('sala', count($event->rooms)) }} {{ implode(', ', $event->rooms) }}</small> 
                    <br>
                    {{ $event->title }}
                  </td>
                @endif
              @endforeach
            </tr>
          @endforeach
        </tbody>
      </table>
      <table class="table table-bordered table-hover table-condensed text-center">
        <thead>
          <tr class="thead-dark">
            <th scope="col" width="100"></th>
            <th scope="col" colspan="3">Domingo 09/10</th>
          </tr>
          <tr class="thead-dark">
            <th scope="col"></th>
            <th scope="col" width="30%">Trilha 1</th>
            <th scope="col">Trilha 2</th>
            <th scope="col">Trilha 3</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dia3 as $date => $events)
            @php
              $events = $events->sortBy(fn ($e) => $e->rooms[0])->sortBy('date');
              [, $time] = explode(' ', $events->first()->date);
            @endphp
            <tr>
              <th scope="row" class="table-secondary">{{ $time }}</th>
              @foreach ($events as $event)
                @php
                  $hasPicture = file_exists("{$page->root}/source" . $event->picture);
                @endphp
                @if ($events->count() === 1)
                  <td colspan="3">
                    @if ($event->type === 'span')
                      <strong>{{ $event->title }}</strong>
                    @else
                      @if ($hasPicture)
                        <img src="{{ url($event->picture) }}" class="img-thumbnail img-fluid rounded-circle" width="100"><br>
                      @endif
                      <h5>{{ implode(', ', $event->speakers) }}</h5>
                      <small>Local: {{ Str::plural('sala', count($event->rooms)) }} {{ implode(', ', $event->rooms) }}</small> 
                      <br>
                      {{ $event->title }}
                    @endif
                  </td>
                @else
                  <td>
                    @if ($hasPicture)
                      <img src="{{ url($event->picture) }}" class="img-thumbnail img-fluid rounded-circle" width="100"><br>
                    @endif
                    
                    <div>
                      @foreach ($event->speakersPictures as $picture)
                        <img src="{{ url($picture) }}" class="img-thumbnail img-fluid rounded-circle" width="100">
                      @endforeach
                    </div>

                    <h5>{{ implode(', ', $event->speakers) }}</h5>
                    <small>Local: {{ Str::plural('sala', count($event->rooms)) }} {{ implode(', ', $event->rooms) }}</small> 
                    <br>
                    {{ $event->title }}
                  </td>
                @endif
              @endforeach
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
