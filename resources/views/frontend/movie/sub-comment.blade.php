<ul class="children">
    @foreach($comments as $comment)
        <li class="comment">
            <img class="avatar"
                 src="{{asset('frontend/assets/images/ava-01.jpg')}}"
                 alt="IMG">
            <div class="content-comment">
                <div class="author">
                        <span class="author-name">
                        {{$comment->user->name}}
                        </span>
                    <span class="comment-extra-info">
                         {{$comment->created_at}}
                        </span>

                </div>
                <div class="message">
                    <p>
                        {{$comment->comments}}
                    </p>
                    <div class="comment-message">
                        <form class="communicate">
                            @csrf
                        <div class="form-group">
                            <input type="text" name="comment[{{$comment->id}}]" class="form-control">

                            <button type="submit" class="comment-reply-link main-communicate-btn">
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
