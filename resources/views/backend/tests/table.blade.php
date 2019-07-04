<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                  <th>@sortablelink('name', trans('labels.backend.tests.table.name')) </th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tests as $test)
        <tr>
             
                <td>{{  $test->name }}</td>  
                

               <td>{!! $test->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>