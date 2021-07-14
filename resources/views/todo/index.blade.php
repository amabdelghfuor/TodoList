<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <div class="row mt-5 ">

        <form class="col-12 " action="{{route('todo.store')}}" method="POST">
            @csrf
            <div class="form-group d-flex">
            <input type="title" class="form-control text-center ml-2" placeholder="Add Title" name="title"/>
            <button type="submit" class="btn btn-success mr-2">Add</button>
            </div>
        </form>

        @if(count($todos)>0)
            <ul class="list-group col-12">
                @foreach($todos as $item)
                    <li class="list-group-item col-12 mt-2 ">
                    
                            <div class="form-group ">
                                <form action="{{route('todo.update',['id'=> $item->id])}}" method="POST"  class="d-flex" >
                                @csrf
                                {{ method_field('PUT') }}  
                                <input class="form-control text-info text-center ml-2" placeholder="{{$item->title}}" name="title"/> 

                                    <button type="submit" class=" btn btn-info ml-2"> Update </button>

                                    <a href="{{route('todo.destroy',['id'=>$item->id])}}" class="btn btn-danger mr-2">Delete</a>
                                </form>   
                            </div>
                    </li>
                @endforeach
            </ul>
        @else
        <ul class="list-group col-12">
            <li class="list-group-item col ">

                <div class="alert alert-dark text-center" role="alert">
                    No Posts
                </div>
            </li>
        </ul>
        
        @endif

    
    </div>
</div>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.min.js" integrity="sha384-VmD+lKnI0Y4FPvr6hvZRw6xvdt/QZoNHQ4h5k0RL30aGkR9ylHU56BzrE2UoohWK" crossorigin="anonymous"></script>

</body>
</html>