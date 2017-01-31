<div class="panel panel-default">
    <div class="panel-heading">
        Current Tasks
    </div>

    <div class="panel-body">
        <table class="table table-striped task-table">

            <!-- Table Headings -->
            <thead>
            <th>Curriculums</th>
            <th>&nbsp;</th>
            </thead>

            <!-- Table Body -->
            <tbody>
            @foreach ($curriculums as $curriculum)
                <tr>
                    <!-- Task Name -->
                    <td class="table-text">
                        <div>{{ $curriculum->name }}</div>
                    </td>

                    <td>
                        <!-- TODO: Delete Button -->
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>