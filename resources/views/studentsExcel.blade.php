<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Registration Number</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->registration_number }}</td>
                <td>{{ $student->phone }} </td>
                @foreach ($student->fees as $fee)
                    <td>Rs {{ $fee->amount }}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
