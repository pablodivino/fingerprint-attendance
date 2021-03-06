<div class="row">
    <div class="col-sm-12">
        <div class="table-default has-datatable table-large table-responsive table-round table-td-vmiddle">
            <table id="driver-payments-table" class="table" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Teacher Name</th>
                        <th>Date</th>
                        <th>Entry Time</th>
                        <th>Departure Time</th>
                        <th>School Name</th>
                    </tr>
                </thead>
                <tbody>    
                    @foreach($attendances as $attendance)                
                        <tr>
                            <td>
                                <div class="text-nowrap">
                                    {{$attendance->id ?? ''}}
                                </div>
                            </td>
                            <td>
                                <div class="text-nowrap">
                                    <a href="/{{$panel}}/panel/school/{{$attendance->school->id}}/teacher/{{$attendance->teacher->id}}">{{$attendance->teacher->user->name}}</a>
                                </div>
                            </td>
                            <td>
                                <div class="text-nowrap">
                                    {{date('d/m/Y', strtotime($attendance->date))}}
                                </div>
                            </td>
                            <td>
                                <div class="text-nowrap">                                    
                                    {{date('g:i A', strtotime($attendance->entry))}}
                                </div>
                            </td>  
                            <td>
                                <div class="text-nowrap">  
                                    @if($attendance->departure)  
                                        {{date('g:i A', strtotime($attendance->departure))}}
                                    @else
                                        &nbsp;
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="text-nowrap">
                                    @if($panel=='teacher')
                                        {{$attendance->school->name ?? ''}}
                                    @else
                                        <a href="/{{$panel}}/panel/school/{{$attendance->school->id}}/teacher/index">{{$attendance->school->name ?? ''}}</a>
                                    @endif
                                </div>
                            </td>          
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>