<div class="feature feature-1">
    <a href="/talents/{{$talent->id}}" class="border-round block" style="height">
        <img alt="Image" src="{{asset($talent->img_thumb)}}" />
    </a>
    <div class="feature__body boxed boxed--border">
        <h5 style="margin-bottom:0px;">
            <a href="/talents/{{$talent->id}}" class="color--dark talent--name">{{$talent->name}}</a>
        </h5>
        <a href="/talents/category/{{$talent->category->name}}" style="font-weight:200;font-size:12px">{{$talent->category->name}}</a>                                   
        <p>From &bull; <strong>Rp {{$talent->price}}</strong> /day</p>                
    </div>
</div>