<div>
 @if(session()->has('message'))
     <div class="alert alert-success">
         {{session()->get('message')}}
     </div>
    @elseif(session()->has('error'))
    <div class="alert alert-danger">
        {{session()->get('error')}}
    </div>

     @endif
                       {{-- Errors in Validation   --}}
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li class="alert alert-danger list-group">{{$error}}</li>

                @endforeach
            </ul>
        </div>
        @endif
</div>
