<ul class="children">
    @foreach($comments as $comment)
        <li class="comment">
            <img class="avatar"
                 src="{{asset('frontend/assets/images/ava-01.jpg')}}"
                 alt="IMG">
            <div class="content-comment">
                <div class="author">
                        <span class="author-name">
                        {{$comment->user->name}} [  {{\Carbon\Carbon::parse($comment->created_at)->format('d-M-Y')}}]
                        </span>

                </div>
                <div class="message">
                    <p>
                        {{$comment->comments}}
                    </p>
                    <button onclick="ShowHideDiv({{$comment->id}},'show')" class="btn show_btn_{{$comment->id}}" title="Comment" ><i class="fa fa-comment"></i> </button>
                    <button onclick="ShowHideDiv({{$comment->id}},'hide')" class="btn hide_btn_{{$comment->id}}" title="Comment" style="display: none"><i class="fa fa-comment"></i> </button>

                    <div class="comment-message">
                        <form class="communicateForm_{{$comment->id}}">
                            @method('POST')
                            @csrf
                            <div class="form-group show-comment_{{$comment->id}}" style="display: none">
                                <input type="text" name="comment" id="comment_{{$comment->id}}" class="form-control">
                                <input type="hidden" name="movie_id" value="{{$movie->id}}" class="form-control">
                                <input type="hidden" name="comment_id" value="{{$comment->id}}" class="form-control">
                                <button type="submit" class="comment-reply-link main-communicate-btn"
                                        data-id="{{$comment->id}}">
                                    Reply
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </li>
        @if(count($comment->subComments) > 0)
            @include('frontend.movie.sub-comment',['comments'=>$comment->subComments,'level'=>1])
        @endif
    @endforeach
</ul>
