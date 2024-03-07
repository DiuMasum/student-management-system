@extends('layout')
@section('content')

                <div class="card">
                    <div class="card-header">
                        <h2>Enrollment application</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/enrollment/create') }}" class="btn btn-success btn-sm" title="Add new courses">
                        <i class="fa fa-plus" aria-hidden="true"></i>Add New
                        </a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Enroll no</th>
                                        <th>Batch</th>
                                        <th>Student</th>
                                        <th>Join date</th>
                                        <th>fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enrollment as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->enroll_no }}</td>
                                            <td>{{ $item->batch_id }}</td>
                                            <td>{{ $item->student_id }}</td>
                                            <td>{{ $item->join_date }}</td>
                                            <td>{{ $item->fee }}</td>
                                            <td>
                                                <a href="{{ url('/enrollment/' .$item->id) }}" title="view enrollment"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                                <a href="{{ url('/enrollment/' .$item->id . '/edit') }}" title="edit enrollment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>

                                                <form method="POST" action="{{ url('/enrollment' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete enrollment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

@endsection