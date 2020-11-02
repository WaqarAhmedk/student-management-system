@extends('admin.layout')

@section('content')

<section id="cover" class="min-vh-100">

    <div id="cover-caption">
        <div class="container">
            <div class="row text-black">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-4 py-2 text-truncate">Enter Details</h1>
                    <div class="px-2">

                        <form action="{{route('student.registerstudent')}}" method="post" class="justify-content-center">
                            @csrf
                            <div class="form-group">
                                <label class="sr-only">First Name</label>
                                <x-alert/>
                                <input type="text" class="form-control" name="fname" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Last Name</label>
                                <input type="text" class="form-control" name="lname" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Cnic</label>
                                <input type="text" class="form-control" name="cnic" placeholder="Cnic" >
                            </div>
                            <div>

                                        <label>Semester</label>
                                <br>
                                        <select id="semester" name="semester">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                        </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="sr-only">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection()
