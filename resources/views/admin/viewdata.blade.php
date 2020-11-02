@extends('admin.layout')

@section('content')

<div>
    <x-alert/>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First NAME</th>
            <th scope="col">Last NAME</th>
            <th scope="col">SEMESTER</th>
            <th scope="col">CNIC</th>
            <th scope="col">EMAIL</th>
            <th scope="col">ACTIONS</th>
        </tr>
        </thead>
        <tbody>

@foreach($data as $info)

        <tr>
            <th scope="row">{{$info->id}}</th>
            <td>{{$info->fname}}</td>
            <td>{{$info->lname}}</td>
            <td>{{$info->semester}}</td>
            <td>{{$info->cnic}}</td>
            <td>{{$info->email}}</td>
            <td class="px-4" style=" ">
              <a href="{{route('student.edit',$info->id)}}">  <span  role="button" class="fa fa-edit cursor-pointer" style="font-size:24px"/></a>

                <a href="#">  <span role="button" class="fa fa-info-circle" style="font-size:24px"/></a>

                <span  style="font-size:24px"
                    role="button" class="fa fa-trash cursor-pointer "
                      onclick="event.preventDefault(); confirmdel();"/>
                <script>
                    function confirmdel(){
                       var response= confirm("Do you want to delete this student ?")
                        if (response==TRUE){
                            document.getElementById('delete-{{$info->id}}').submit();
                        }


                    }
                </script>

                <form action="{{route('student.delete',$info->id)}}" method="post" class="display:none" id="delete-{{$info->id}}">
                    @csrf
                    @method('delete')

                </form>
            </td>

        </tr>

@endforeach
        </tbody>
    </table>


</div>




@endsection()
