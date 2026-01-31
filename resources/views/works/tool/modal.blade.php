<div class="modal fade" id="modal{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold" id="modalTitleId">
                    {{$post->name}}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
            </div>
            <div class="modal-body">
                <img src="{{$post->image}}" alt="" class="img-fluid">
                <p class="text-muted  mt-3">{{$post->description}}</p>
            </div>
        </div>
    </div>
</div>
