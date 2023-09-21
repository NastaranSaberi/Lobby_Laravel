@include('header')
@include('navbar')

<div class="row mt-5" > 
    <div class="col-12"> 
        <ul class="list-group ">

            @foreach($messages as $message)

            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold"> {{$message->name}}</div>
                        {{$message->text}}
                    </div>
                    <span class="badge bg-primary rounded-pill">{{$message->created_at}}</span>
            </li>

            @endforeach
        </ul>
    </div>
</div>

<!-- Button trigger modal -->
<button type="button" id="btn_new_messages" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
+
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">پیام جدید</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="/send-message">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">نام</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">متن پیام</label>
                        <textarea  name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button type="submit" class="btn btn-primary">فرستادن</button>
                    </form>
            </div>
        </div>
    </div>
</div>
            </div>

@include('footer')
   