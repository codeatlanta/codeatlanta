@extends('layout')

@section('content')

    <h2>All Events</h2>
    <p>{{ HTML::link('/events/create', 'Create New Event') }}</p>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Date and Time</th>
                <th>Last Updated</th>
                <th>Manage</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td><a href="{{{ URL::route('events.edit', $event->id) }}}">{{{ $event->name }}}</a></td>
                <td>{{{ $event->location }}}</td>
                <td>{{{ $event->event_datetime }}}</td>
                <td>{{{ $event->updated_at }}}</td>
                <td>
                    {{ Form::open(array('method' => 'DELETE', 'route' => array('events.destroy', $event->id))) }}
                        <input type="submit" value="Delete" class="btn-delete" />
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script type="text/javascript">
        $('.btn-delete').click(function (e) {
            if (!confirm('Are you sure you want to delete this event?')) {
                return false;
            }
        });
    </script>
    
@stop