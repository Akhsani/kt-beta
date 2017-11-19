<div class="row">
    <div class="slider" data-paging="true" data-autoplay="false" data-arrows="true">
        <ul class="slides">

            @foreach($talents as $talent)
                <li class="col-sm-3">
                	@include('talents.card')
                </li>
                        
            @endforeach

        </ul>
    </div>
    <!--end slider-->
</div>
