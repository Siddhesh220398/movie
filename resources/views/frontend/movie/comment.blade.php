<div class="comments-area">
    <div class="list-comments">
        <h3 class="comments-title">
            2 comments
        </h3>
        <ul class="comment-list">
            @forelse($movie->movieComments as $movieComment)
                <li class="comment">
                    <img class="avatar"
                         src="{{asset('frontend/assets/images/ava-01.jpg')}}"
                         alt="IMG">
                    <div class="content-comment">
                        <div class="author">
                  <span class="author-name">
                  {{$movieComment->user->name}}
                  </span>
                            <span class="comment-extra-info">
                 {{$movieComment->created_at}}
                  </span>

                        </div>
                        <div class="message">
                            <p>
                                {{$movieComment->comments}}
                            </p>
                            <div class="comment-message">
                                <form class="communicate">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="comment[{{$movieComment->id}}]" class="form-control">
                                        <button type="submit" class="comment-reply-link main-communicate-btn">
                                            Reply
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    @if(count($movieComment->subComments) > 0)
                        @include('frontend.movie.sub-comment',['comments'=>$movieComment->subComments,'level'=>1])
                    @endif
                </li>
            @empty
            @endforelse
        </ul>
    </div>
</div>
