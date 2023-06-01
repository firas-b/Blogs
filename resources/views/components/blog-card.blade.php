@props(['blog'])

<div class="col">

    <div class="card float-right " >
        <div class="row">
            <div class="col-sm-5 " style="background-image:url('{{asset('images/laravel.jpg')}}');
             
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;">
                <img src="">
                


            </div>
            <div class="col-sm-7">
                <div class="card-block">
                    <h4 class="card-title"> <a href=" /blog/{{$blog->id}}">{{ $blog->title }}</a></h4>
                    <h6 class="card-subtitle">author :{{ $blog->author }}</h6>

                    <p>{{ $blog->description }}</p>
                    <br>
                    <a href="#" class="btn btn-primary btn-sm float-right">Read More</a>
                </div>
            </div>

        </div>
    </div>

</div>
